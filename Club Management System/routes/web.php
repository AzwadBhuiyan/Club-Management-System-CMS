<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\globalController;
use App\Http\Controllers\LaravelCrud;
use App\Http\Controllers\NewUserRequestsController;
use App\Http\Controllers\approvalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController; // Make sure to include HomeController

use App\Http\Controllers\ClubController;
use App\Http\Controllers\ApplicationInfoController;
use App\Http\Controllers\EventsController;





// Database connection check
Route::get('/connection', function () {
    try {
        DB::connection()->getPdo();
        return 'connected successfully';
    } catch (\Exception $ex) {
        dd($ex->getMessage());
    }
});

// redirect to login page
Route::get('/', function () {
    return redirect('/login');
});

//testing
Route::get('/home2', [HomeController::class, 'index2'])->name('home2');
//testing



// Forms
Route::post('/form', [formController::class, 'formLoad'])->name("loadForm");

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']); // Removed the name('login') for POST login

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home route (protected by middleware)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Global routes
// Route::get('/', [globalController::class, 'load_homePage'])->name("homePage");
Route::get('/signup', [globalController::class, 'load_signup'])->name("signup");
Route::post('/signup', [NewUserRequestsController::class, 'store'])->name('signup.store');
Route::get('/forgot-password', [globalController::class, 'load_forgotPassword'])->name("forgotPassword");
Route::get('/club-admin', [globalController::class, 'load_clubAdmin'])->name("clubAdmin");
Route::get('/my-profile', [globalController::class, 'load_myProfile'])->name("general.myProfile");

// ... Other global routes ...
Route::get('/test', [AuthController::class, 'showLoginForm2']);

Route::post('/profile/update-profile-picture', [userController::class, 'updateProfilePicture'])->name('updateProfilePicture');

Route::get('/upcoming-events', [EventsController::class, 'load_upcomingEvents'])->name("viewAllPosts");
// Route::get('/view-events', [EventsController::class, 'load_Events'])->name("viewPosts");
Route::get('/view-events/{contentType}', [EventsController::class, 'loadContent'])->name('loadContent');
Route::get('/view-event/{post_id}', [EventsController::class, 'load_event'])->name("viewPost");





// CRUD routes
Route::post('add', [LaravelCrud::class, 'add']);
Route::get('edit/{id}', [LaravelCrud::class, 'edit']);
Route::post('update', [LaravelCrud::class, 'update'])->name('update');
// Route::get('delete/{id}', [LaravelCrud::class, 'delete']);

// Super Admin routes
Route::get('/view-all-applications', [approvalController::class, 'index']);

Route::get('/superAdmin/manage-users', [adminController::class, 'load_manageUsers'])->name('manageUsers');
Route::get('/superAdmin/add-user', [adminController::class, 'load_addUser'])->name("addUser");
Route::post('/superAdmin/add-user', [adminController::class, 'addNewUser'])->name('superAdmin.addNewUser');
Route::get('/delete-user/{id}', [adminController::class, 'deleteUser'])->name('superAdmin.deleteUser');
Route::get('/superAdmin/edit-user/{id}', [adminController::class, 'load_editUser'])->name('superAdmin.editUser');
Route::post('/superAdmin/edit-user/{id}', [adminController::class, 'updateUser'])->name('superAdmin.updateUser');

Route::get('/superAdmin/new-user-requests', [adminController::class, 'load_newUserRequests'])->name('newUserRequests');
Route::get('/superAdmin/edit-user-request/{id}', [adminController::class, 'load_acceptUserRequest'])->name('acceptUserRequest');

Route::get('/superAdmin/manage-clubs', [adminController::class, 'load_manageClubs'])->name('manageClubs');
Route::get('/superAdmin/add-club', [ClubController::class, 'createClubForm'])->name('showCreateForm');
Route::post('/superAdmin/add-club', [ClubController::class, 'createClub'])->name('createClub');
Route::get('/delete-club/{id}', [adminController::class, 'deleteClub'])->name("superAdmin.deleteClub");
Route::get('/superAdmin/edit-club/{id}', [adminController::class, 'load_editClub'])->name("superAdmin.editClub");
Route::post('/superAdmin/edit-club/{id}', [adminController::class, 'updateClub'])->name("superAdmin.updateClub");



// Application routes
Route::get('/applications/create', [ApplicationInfoController::class, 'create'])->name('applications.create');
Route::post('/applications', [ApplicationInfoController::class, 'store'])->name('applications.store');
Route::get('/applications/edit-application/{id}', [approvalController::class, 'load_editApplication'])->name('applications.editApplication');
Route::post('/applications/edit-application/{id}', [approvalController::class, 'updateApplication'])->name('applications.updateApplication');
Route::get('/applications/delete/{id}', [approvalController::class, 'delete'])->name('applications.delete');
Route::get('/applications/view-application-file/{id}', [approvalController::class, 'viewApplicationFile']);

// Approval progress routes
Route::get('/application-approval-progress/{id}', [approvalController::class, 'calculateProgress']);
Route::get('/post-approval/{id}', [approvalController::class, 'load_postApproval']);

Route::post('approve_update', [approvalController::class, 'approve_update'])->name('approve_update');

// Club Admin routes
Route::get('/myClubs/manage-members', [ClubController::class, 'load_manageMembers'])->name("manageMembers");
Route::get('/myClubs/add-member', [ClubController::class, 'load_addMember'])->name("addMember");
Route::post('/myClubs/add-member', [ClubController::class, 'addNewMember'])->name('club.addNewMember');
Route::get('/myClubs/manage=members/delete/{id}', [ClubController::class, 'deleteMember'])->name('club.deleteMember');
Route::get('/myClubs/manage=members/edit-member/{id}', [ClubController::class, 'load_editMember'])->name("club.editMember");
Route::post('/myClubs/manage=members/edit-member/{id}', [ClubController::class, 'updateMember'])->name("club.updateMember");

Route::get('/myClubs/manage-posts', [ClubController::class, 'load_managePosts'])->name("managePosts");
Route::get('/myClubs/manage-posts/create-post', [ClubController::class, 'load_createPost'])->name("createPost");
Route::post('/myClubs/manage-posts/create-post', [ClubController::class, 'addNewPost'])->name('club.addNewPost');


// profile route


// web.php or routes/web.php

// use App\Http\Controllers\UserController;

// web.php or routes/web.php


// web.php or routes/web.php


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('update-profile');
});
