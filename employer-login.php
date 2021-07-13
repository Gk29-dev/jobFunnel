<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background-image: url('bg.png');
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
                        <a href="#" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a href="#" class="nav-link">About Us</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="cointainer-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/21207-removebg.png" alt="image" width="450" height="350">
                        </div>

                        <div class="col-md-5">
                            <div class="container">
                                <img src="images/job-logo.png" width="300" height="200" alt="logo-image" style="display:block;" class="mx-auto">
                                <h3 style="margin-top:-30px;">Employer Login</h3>
                            </div>
                            <form action="employer-login1.php" autocomplete="off" class="mt-4" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Email" id="email" name="email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Password" id="password" name="password" required="required">
                                </div>
                                <small style="color:blue; float:right;"><a href="email-forget-password.php">Forget Password?</a></small><br>
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                                <p style="text-align: center;" class="mt-3">Don't have an account?<b><a href="employer-registration.php"> Sign Up</a></b></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>