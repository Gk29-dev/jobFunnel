<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        background-image: url('images/bg.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    img {
        display: block;
        width: 500px;
        height: 150px;
        margin-left: auto;
        margin-right: auto;
    }

    .main-form {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
    }
</style>

<body>

    <div class="container w-50 mt-5 mb-4 main-container">
        <div class="container">

            <div class="container w-40">
                <img src="images/logo.png" alt="logo">
            </div>
            <h3 class="mt-2" style="text-align:center;">JOB FUNNEL</h3>
            <div>
                <p class="text-center">W3lessons - Material Design Signup Form</p>
            </div>
            <form action="employer-registration1.php" method="POST" enctype="multipart/form-data">
                <div class="main-form">
                    <h2 class="mb-5">Employer Registration</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" id="cname" name="cname" required="required" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="cemail" id="cemail" required="required" placeholder="xyz@gmail.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Industry</label>
                                <input type="text" name="industry" class="form-control" required="required" id="industry" placeholder="eg: Insurance, Automobile, E-commerce">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact Number</label>
                                <input type="text" name="mob" id="mob" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Website</label><br>
                                <input type="url" name="website" class="form-control" required="required" placeholder="eg: www.tcs.com">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Company Logo</label>
                                <input type="file" name="logo" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" required="required" placeholder="eg: ashi@123">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="register">
                        </div>
                    </div>


            </form>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>