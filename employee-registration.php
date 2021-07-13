<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


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
        margin-top: 50px;
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
            <form action="employee-registration1.php" autocomplete="OFF" method="POST" enctype="multipart/form-data">
                <div class="main-form">
                    <h2 class="mb-4">Candidate Registration</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="name" required="required" name="name" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="email" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" name="mob" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" name="age" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Gender</label><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" class="form-check-input" value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" class="form-check-input" value="">Female &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" class="form-check-input" value="Other">Other &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Key Skill</label>
                                <input type="text" name="skill" class="form-control" required="required" placeholder="eg: Problem Solving, Critical Thinking, Communication etc.">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Qualification</label>
                            <select name="qualification" id="qualification" class="form-control">
                                <option value="">Choose Your Qualification</option>
                                <option value="bca">BCA</option>
                                <option value="mca">MCA</option>
                                <option value="b.tech">B.TECH</option>
                                <option value="m.tech">M.TECH</option>
                                <option value="mba">MBA</option>
                                <option value="m.com">M.COM</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">Experience</label>
                            <input type="text" class="form-control" name="experience" required="required">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="pass" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Upload Resume (only PDF allowed)</label>
                            <input type="file" name="resume" class="form-control" required="required">
                        </div>
                    </div>


                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" required="required">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="register" value="Register" id="register" class="btn btn-primary mt-4 mb-4">
                        </div>
                    </div>




                </div>
            </form>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

</body>
</html>