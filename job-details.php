<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<style>
    .heading {
        background-image: linear-gradient(to bottom right, dodgerblue, pink);
        height: 70px !important;
    }

    body {
        background-color: #F6F6F4;
    }

    section {
        background-color: white;
        margin-top: 40px;
        border-radius: 10px;
    }
</style>

<body>

    <?php
    include 'employee-header.php';
    ?>


    <div class="container-fluid">
        <div class="container">

            <div class="heading">
                <h2 class="p-3 text-center">Job Details</h2>
            </div>

            <?php
            $id = $_GET['job_id'];
            include 'connection.php';

            if ($conn) {

                $sql = "SELECT * FROM post_job WHERE job_id = {$id}";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
            ?>
                    <section>
                        <div class="container p-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="images/user-image.jpg" alt="" width="120px" height="120px">
                                </div>

                                <div class="col-md-4 ml-3">
                                    <h4 style="text-transform: capitalize;"><?php echo $row['category']; ?></h4>
                                    <p><?php echo $row['comp_name']; ?></p>
                                    <small><i class="fa fa-map-marker icon" style="font-size:14px; color:red;"></i> <?php echo $row['job_location']; ?></small>
                                    <small style="float:right;">Job Expire : <b><?php echo $row['job_exp_date']; ?></b></small>

                                    <div style=" background-color:yellowgreen; margin-top:7px;">
                                        <h5 class="p-2 text-center text-grey">Salary <i class="fa fa-dollar icon"></i><?php echo $row['salary']; ?></h5>
                                    </div>

                                </div>

                                <div class="col-md-3 mt-5 ml-5">
                                    <div style=" background-color:tomato;">
                                        <h5 class="p-2 text-center text-grey"><?php echo $row['job_type']; ?></h5>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-sm w-100"><b>Apply for This Job</b></a>
                                </div>

                                <div class="col-md-2">
                                    <a href="#" class="btn btn-sm btn-info" style="float:right;">Save Job</a>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <h4>Overview</h4>
                                    <p><?php echo $row['job_description']; ?></p>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <h4>Required Experience</h4>
                                    <p style="color:grey;"><?php echo $row['exp_required']; ?></p>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <h4>Skill Required</h4>
                                    <p style="color:grey;"><?php echo $row['skill_required']; ?></p>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <h4>Job Location</h4>
                                    <p style="color:grey;"><?php echo $row['job_location']; ?></p>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <h4>Number of Employee Required</h4>
                                    <p style="color:grey;"><?php echo $row['emp_required']; ?></p>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <a href="#" role="button" class="btn btn-primary btn-sm w-100">Apply for This Job</a>
                                </div>
                            </div>

                        </div>
                    </section>
            <?php
                }
            }

            ?>



        </div>
    </div>

    <?php
    include 'footer.php';
    ?>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>