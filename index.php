<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        background-image: url('images/bg.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    nav ul li a {
        font-size: 15px;
        font-weight: bold;
        color: black !important;
    }

    nav ul li a:hover {
        color: grey !important;
    }

    select option {
        background-color: white;
        color: black;
    }
</style>

<body>

    <div class="container-fluid">
        <div class="container">

            <nav class="navbar navbar-expand-sm  navbar-light">
                <a href="#" class="navbar-brand">
                    <img src="images/job-logo.png" width="130px" height="100px" alt="">
                </a>

                <ul class="navbar-nav" style="margin-left:200px; margin-top:-60px;">

                    <li class="nav-item mx-3">
                        <a href="#" class="nav-link">About Us</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="container" style="width:80%; margin-top:3%;">
                <h3 style="text-align: center;">Drive More Job Through Digital</h3>
                <p style="color:grey; font-size:15px; text-align:center;" class="mt-3">Job Funnel is an online job portal. It has been developed in PHP programming language. It helps to search job for Job Seekers. It also helps to employer to posts their job and advertisement of their company</p>

                <div class="container" style="width:50%;">
                    <form action="#" class="form-inline">
                        <select name="sign in" id="signin" class="form-control btn btn-success mx-3" role="button">
                            <option value="disabled">Sign In</option>
                            <option value="employee"><a href="employee-login.php">As a Employee</a></option>
                            <option value="employer"><a href="employer-login.php">As a Employer</a></option>
                        </select>

                        <select name="sign up" id="signup" class="form-control btn btn-primary mx-3" role="button">
                            <option value="disabled">Sign Up</option>
                            <option value="employee"><a href="#">As a Employee</a></option>
                            <option value="employer"><a href="#">As a Employer</a></option>
                        </select>
                    </form>

                </div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <img src="images/8619-removebg.png" alt="index-image" style="width:70%; height:400px; display:block; margin-left:auto; margin-right:auto;">
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>