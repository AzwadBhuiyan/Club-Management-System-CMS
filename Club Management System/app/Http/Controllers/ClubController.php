<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Image;

class ClubController extends Controller
{
    public function createClubForm()
    {
        return view('superAdmin/create_new_club');
    }

    public function createClub(Request $request)
    {
        $clubName = $request->input('club_name');
        $clubID = $request->input('club_id');

        // $request->validate([
        //     'club_id'=>'required',
        //     'club_name'=>'required'
        // ]);

        // Create the table if it doesn't exist
        if (!Schema::hasTable($clubName)) {

            $query = DB::table('club_list')->insert([
                'club_id' => $clubID,
                'club_name' => $clubName
            ]);


            Schema::create($clubName, function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('user_id');
                $table->string('user_name');
                $table->string('user_email');
                $table->string('contact_number');
                $table->enum('gender', ['male', 'female', 'other']);
                $table->string('club_position');
                $table->timestamps();
            });



            // Set success message in the session
            Session::flash('message', "Club '$clubName' table created successfully!");
        } else {
            // Set error message in the session
            Session::flash('error', "Club '$clubName' '$clubID' table already exists!");
        }

        return redirect()->route('manageClubs');
    }




    ///////////////
    // Club admin functions
    //////////////


    public function load_manageMembers()
    {
        $clubName = Auth::user()->user_name;

        $data = array(

            'list' => DB::table($clubName)->get(),
            'clubName' => $clubName,
        );
        // return view('myClubs\manage-members', $data, compact('clubName'));
        return view('myClubs.manageMembers', $data);
    }


    function deleteMember($id)
    {

        $clubName = Auth::user()->user_name;

        $delete = DB::table($clubName)
            ->where('user_id', $id);

        $delete->delete();


        return back();
    }


    function load_addMember()
    {
        $clubName = Auth::user()->user_name;


        return view('myClubs.addMember', ['clubName' => $clubName]);
    }

    public function addNewMember(Request $request)
    {
        $clubName = Auth::user()->user_name;

        // Assuming $data contains the fields you want to insert
        $data = $request->all();

        // Use the DB facade to insert data into the dynamically determined table
        DB::table($clubName)->insert([
            'user_id' => $data['member_id'],
            'user_name' => $data['member_name'],
            'user_email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'gender' => $data['gender'],
            'club_position' => $data['club_position'],

        ]);

        return redirect()->back()->with('success', 'Member added successfully.');
    }

    function load_editMember($id)
    {

        $clubName = Auth::user()->user_name;

        $row = DB::table($clubName)
            ->where('user_id', $id)
            ->first();

        $data = [
            'Info' => $row,
            'clubName' => $clubName,
        ];

        return view('myClubs.editMember', $data);
    }


    function updateMember(Request $request)
    {

        $clubName = Auth::user()->user_name;
        $currentEmail = Auth::user()->user_email;

        $request->validate([
            'member_id' => 'required',
            'member_name' => 'required',
            'contact_number' => 'required',
            'gender' => 'required',
            'club_position' => 'required'
        ]);


        $updating = DB::table($clubName)
            ->where('user_id', $request->input('member_id'))
            ->update([
                'user_id' => $request->input('member_id'),
                'user_name' => $request->input('member_name'),
                'user_email' => $request->input('email'),
                'contact_number' => $request->input('contact_number'),
                'gender' => $request->input('gender'),
                'club_position' => $request->input('club_position')
            ]);


        // $data = array(
        //     'list' => DB::table($clubName)->get()
        // );

        return back()->with('success', 'Successfull!!!!');
    }




    /////////////////////
    /// Event post management
    /////////////////////

    public function load_managePosts()
    {


        if (Auth::user()->user_type == 'super admin'){
            $data = array(
                'list' => DB::table("post_info")->get()
            );
        }

        elseif (Auth::user()->user_type == 'club admin'){
            $clubName = Auth::user()->user_name;
            $data = array(
                'list' => DB::table("post_info")
                ->where('club_name', $clubName)
                ->get()
            );
        }

        return view('myClubs.managePosts', $data);
    }


    public function load_createPost()
    {
        $row = DB::table('club_list')
        ->get();
        
        $data = [
            'clubList'=> $row
        ];

        return view('myClubs.createPost', $data);
    }



    // public function addNewPost(Request $request)
    // {
    //     $clubName = Auth::user()->user_name;

    //     $tableName = 'post_info';

    //     // Assuming $data contains the fields you want to insert
    //     $data = $request->all();

    //     $request->validate([
    //         'post_title'=>'required',
    //         'post_type'=>'required',
    //         'post_date'=>'required',
    //         'post_description'=>'required',
    //         // 'fileUpload' => 'required|mimes:jpeg,png,jpg,gif|max:25600', 
    //         // 'fileUpload' => 'required', 
    //         // Adjust validation as needed
    //     ]);



    //     // Use the DB facade to insert data into the dynamically determined table
    //     DB::table($tableName)->insert([
    //         'post_title' => $data['post_title'],
    //         'post_type' => $data['post_type'],
    //         'post_date' => $data['post_date'],
    //         'post_description' => $data['post_description'],
    //         'writers_name' => $clubName,
    //         'club_name' => $clubName,
    //     ]);

    //     return redirect()->back()->with('success', 'Post added successfully.');
    // }

    private function getUniqueFileName($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $id = DB::table('post_info')->max('post_id') + 1; // Assuming 'id' is the primary key

        return "{$id}.{$extension}";
    }

    public function addNewPost(Request $request)
    {
        $clubName = Auth::user()->user_name;
        $tableName = 'post_info';

        $data = $request->all();

        $request->validate([
            'post_title' => 'required',
            'post_type' => 'required',
            'post_date' => 'required',
            'post_description' => 'required',
            'file-upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:25600',
        ]);

        if ($request->hasFile('file-upload')) {
            $file = $request->file('file-upload');

            if ($file->isValid()) {
                $filename = $this->getUniqueFileName($file);

                // Attempt to move the file to the specified directory
                try {
                    if ($file->move(public_path('images/post_images'), $filename)) {
                        // Use the DB facade to insert data into the dynamically determined table
                        try {
                            DB::table($tableName)->insert([
                                'post_title' => $data['post_title'],
                                'post_type' => $data['post_type'],
                                'post_date' => $data['post_date'],
                                'post_description' => $data['post_description'],
                                'writers_name' => $clubName,
                                'club_name' => $clubName,
                            ]);

                            return redirect()->back()->with('success', 'Post added successfully');
                        } catch (QueryException $e) {
                            // Handle database insertion error
                            return redirect()->back()->with('error', 'Error adding the post. Please try again.');
                        }
                    } else {
                        // Handle move failure
                        return redirect()->back()->with('error', 'Error moving the file. Please try again.');
                    }
                } catch (\Exception $e) {
                    // Log the error
                    // Log::error('Error moving file: ' . $e->getMessage());

                    // Include a generic error message
                    return redirect()->back()->with('error', 'An error occurred while processing the file. Please try again.');
                }

            } else {
                // Handle invalid file
                return redirect()->back()->with('error', 'Invalid file.');
            }
        }

        // Use the DB facade to insert data into the dynamically determined table
        // try {
        //     // Use the DB facade to insert data into the dynamically determined table
        //     DB::table($tableName)->insert([
        //         'post_title' => $data['post_title'],
        //         'post_type' => $data['post_type'],
        //         'post_date' => $data['post_date'],
        //         'post_description' => $data['post_description'],
        //         'writers_name' => $clubName,
        //         'club_name' => $clubName,
        //     ]);

        //     return redirect()->back()->with('success', 'Post added successfully.');

        // } catch (QueryException $e) {
        //     return redirect()->back()->with('error', 'Error adding the post. Please try again.');
        // }

    }


}