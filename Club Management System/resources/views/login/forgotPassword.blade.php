<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Login</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">


</head>

<body>

    <div class="wrapper">
        <div class="logo">
            <img src="images/iub-logo.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Club Management System(CMS)
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email address">
            </div>

            <button class="btn mt-3">Submit</button>

        </form>

        <div class="alert alert-success" role="alert">
            We've sent a temporary password to your email. You can change it later
        </div>


        <div class="alert alert-danger" role="alert">
            Sorry, No account has been found with this Email
        </div>

        <div class="text-center fs-6">
            <a href="login">Login</a> or <a href="signup">Sign up</a>
        </div>
    </div>

    @include('menu.footer')



</body>

</html>
