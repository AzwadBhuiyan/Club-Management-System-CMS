<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/manageUsers.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <title>Chess Club new user</title>
</head>

<body>
    <div class="site-wrap">

        {{-- nav bar --}}

        @include('menu.navBar')
        {{-- nav bar end --}}

        <div class = "he ml-3 mr-3">Club Name</div>
        <h3 class="text-center">Manage Posts</h3>


        {{-- <div class="container-fluid"> --}}

            @if (Session::get('success'))
                <div class = "alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::get('fail'))
                <div class = "alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <br>

            @csrf
            <div class="table-responsive pl-5 pr-5">

                <table class="table table-hover ">
                    <thread>
                        <th>Post ID</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Club</th>
                        <th>Action</th>

                    </thread>
                    <tbody>

                        @foreach ($list as $posts)
                            <tr>
                                <td>{{ $posts->post_id }}</td>
                                <td>{{ $posts->post_title }}</td>
                                <td>{{ $posts->post_type }}</td>
                                <td>{{ $posts->post_date }}</td>
                                <td>{{ $posts->post_description }}</td>
                                <td>{{ $posts->writers_name }}</td>
                                <td>{{ $posts->club_name }}</td>
                                <td>
                                    <div class = "btn-group">

                                        <a href=""
                                            class="btn btn-info btn-xs">Edit</a>
                                        <a href=""
                                            class="btn btn-danger btn-xs">Delete</a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-auto">
                    <a href="/myClubs/manage-posts/create-post">

                        <div class="text-center">
                          <button type="submit" class="btn btn-primary bg-info mb-5">Create New Post</button>
                      </div>
                    </a>
                </div>
            </div>

        {{-- </div> --}}

    </div>


    {{-- footer --}}
    @include('menu.footer')

    {{-- footer end     --}}

</body>

</html>
