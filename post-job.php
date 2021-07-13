<?php

include 'connection.php';
if ($conn) {
    $sql = "SELECT MAX(job_id) AS id FROM post_job";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

    .row {
        margin-bottom: 10px;
    }

    label {
        font-weight: bold;
        font-size: 14px !important;
    }

    .jumbotron {
        background-image: linear-gradient(to bottom right, dodgerblue, pink);
    }
</style>

<body>

    <?php
    include 'employer-header.php';
    ?>

    <div class="container-fluid">
        <div class="container">

            <div class="jumbotron" style="height:100px;">
                <h2 style="margin-top:-30px;">Post a Job</h2>
            </div>

            <div class="container-fluid">
                <form action="post-job1.php" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Job Id</label>
                                <input type="text" class="form-control" name="jobid" readonly value=<?php echo ++$row['id']; ?>>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="jobcategory" id="jobcategory" class="form-control">
                                    <option value="web developer">Web Developers</option>
                                    <option value="system analyst">System Analyst</option>
                                    <option value="tester">Tester</option>
                                    <option value="product manager">Product Manger</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Job Title</label>
                                <input type="text" name="jobtitle" placeholder="eg: full stack developer" class="form-control">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Job Type</label>
                        <select name="jobtype" id="jobtype" class="form-control">
                            <option value="full time">Full Time</option>
                            <option value="part time">Part Time</option>
                            <option value="contract">Contract</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Salary Package</label>
                        <input type="text" name="salary" placeholder="eg: $ 6000-9000" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Skill Required</label>
                        <input type="text" name="skill" placeholder="eg: PHP, MYSQL, HTML" class="form-control">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Experience Required</label>
                        <select name="experience" id="experience" class="form-control">
                            <option value="fresher">Fresher</option>
                            <option value="1-5 years">1-5 Years</option>
                            <option value="5-10 years">5-10 years</option>
                            <option value="above 10">Above 10 years</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Job Location</label>
                        <input type="text" name="location" placeholder="eg: Delhi, India" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Job Expiration Date</label>
                        <input type="date" name="expire" class="form-control">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Number of Positions</label>
                        <input type="text" name="no_jobs" placeholder="eg: 1, 2, 3 etc." class="form-control" required="required">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" name="comp_name" class="form-control" placeholder="eg: Greenwave PVT.LTD" required="required">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Company Email Address</label>
                        <input type="text" name="comp_email" class="form-control" value=<?php echo $_SESSION['email']; ?>>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Job Description</label>
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <input type="submit" value="Post Job" class="btn btn-primary" id="job-btn">
            </form>

        </div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>