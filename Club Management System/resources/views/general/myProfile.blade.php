<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="fonts/icomoon/style.css"> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> --}}
    {{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}
    {{-- <link rel="stylesheet" href="css/jquery-ui.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> --}}


    {{-- <link rel="stylesheet" href="css/aos.css"> --}}

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_myClubs.css">

</head>


<body>

    <div class="site-wrap">
        {{-- nav bar --}}
        @include('menu.navBar')
        {{-- nav bar end--}}

        <h1 class="viewpostheading"> My Profile </h1>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Student Name</span><span class="text-black-50">StudentID@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">

                        <div class="myprofilefont">

                            <div class="col-md-6">Name</div>

                            <div class="col-md-12"> Student ID</div>

                            <div class="col-md-12">Mobile Number</div>


                            <div class="col-md-12">Email ID</div>

                            <div>

                                <div class="d-flex flex-row-reverse">
                                    <div class="col-md-12">Position In Club</div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a href="edit-my-profile">
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="button">Edit Profile</button>
                        </div>
                    </a>
                </div>
            </div>

        </div>











        {{-- footer --}}

        @include('menu.footer')

        {{-- footer end--}}

        < <script src="js/jquery-3.3.1.min.js">
            </script>
            <script src="js/jquery-ui.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/aos.js"></script>
            <script src="js/main.js"></script>

</body>

</html>