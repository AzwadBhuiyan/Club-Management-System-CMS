<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <!-- Include your custom CSS files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/createPost.css') }}">
</head>


<body>
    <div class="site-wrap">
        {{-- Nav Bar --}}
        @include('menu.navBar')
        <div class="p-5 w-50 mx-auto mt-5 mb-5 shadow-lg bg-white rounded-lg">
            <h1 class="text-center">Create Post</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('club.addNewPost') }}" enctype="multipart/form-data">
                
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control" id="application_title" name="post_title" placeholder="Post Title" required>
                </div>


                <div class="form-group">
                    <select class="form-control" id="post_type" name="post_type" required>
                        <option value="">Select Post Type</option>
                        <option value="General">General Post</option>
                        <option value="Recruitment">Recruitment</option>
                        <option value="Seminar">Seminar</option>
                        <option value="Festival">Festival</option>
                        <option value="Exhibitions">Exhibitions</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Sports">Sports</option>
                        <option value="Competition">Competition</option>
                        <option value="Charity">Charity</option>
                        <option value="Show">Show</option>
                        <option value="Party">Party</option>
                        <option value="Cultural">Cultural</option>
                        <option value="Others">Others</option>
                    </select>
                </div>


                <div class="form-group">
                    <input type="date" class="form-control" id="post_date" name="post_date" placeholder="Application Date" required>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="post_description" name="post_description" placeholder="Description" required></textarea>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" id="author" placeholder="Author" required>
                </div>

                @if(Auth::user()->user_type === 'super admin')
                <div class="form-group">
                    <select class="form-control" id="club_name" name="club_name" required>
                        <option value="">Select Club</option>
                        @foreach ($clubList as $row)
                            <option value="{{ $row->club_name }}">{{ $row->club_name }}</option>
                        @endforeach
                    </select>
                </div>
                
                @elseif (Auth::user()->user_type === 'club admin')
                <div class="form-group">
                    <input type="text" class="form-control" id="club_name" name="club_name" value = "{{Auth::user()->user_name}}" readonly>
                </div>
                @endif

                <div id="file-upload-form" class="uploader">
                    <input id="file-upload" type="file" name="file-upload" accept="image/*" />

                    <label for="file-upload" id="file-drag" for="file-upload">
                        <img id="file-image" src="#" alt="Preview" class="hidden">
                            <div id="start">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <div>Select an image or drag here</div>
                                <div id="notimage" class="hidden">Please select an image</div>
                                <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                            </div>
                        <div id="response" class="hidden">
                        <div id="messages"></div>
                        </div>
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-info">Create</button>
                </div>

            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif


        </div>
    </div>
    {{-- Include Footer --}}
    @include('menu.footer')
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- //////////////////////////// -->
    <!-- upload images script -->
    <!-- /////////////////////// -->
    
    <script src="../../js/image_upload.js"></script>
    <script src="../../js/image_store.js"></script>


</body>
</html>


