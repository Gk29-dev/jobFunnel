<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .heading {
        background-image: linear-gradient(to bottom right, dodgerblue, pink);
        height: 70px !important;
    }

    section {
        background-color: #F6F6F4;
        box-shadow: 5px 5px 5px 5px grey;
        margin-top: 20px;
    }

    .badge {
        float: right;
    }
</style>

<body>

    <?php include 'employee-header.php'; ?>

    <div class="container-fluid">
        <div class="container">

            <div class="heading">
                <h2 class="p-3 text-center">Hey, <?php echo $_SESSION['candi_name']; ?> Saved Jobs for You!</h2>
            </div>

            <?php

            include 'connection.php';

            $job_id = $_POST['id'];

            if ($conn) {
                $sql = "SELECT * FROM post_job WHERE job_id= {$job_id}";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo 1;
                    }
                } else {
                    echo 0;
                }
            }

            ?>



        </div>
    </div>


    <section>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-1">
                    <img src="images/user-image.jpg" alt="" width="80px" height="80px">
                </div>

                <div class="col-md-3">
                    <h4 style="text-transform: capitalize;"><?php echo $row['category']; ?></h4>
                    <p style="text-transform: capitalize" ;><?php echo $row['comp_name']; ?></p>
                    <small style="text-transform: capitalize" ;><i class="fa fa-map-marker icon" style="font-size:14px; color:red;"></i> <?php echo $row['job_location']; ?></small>
                </div>

                <div class="col-md-2 mt-3">
                    <div style=" background-color:yellowgreen;">
                        <h5 class="p-2 text-center text-grey">Salary</h5>
                    </div>
                    <h6 class="text-center"><i class="fa fa-dollar icon"></i><?php echo $row['salary']; ?></h6>
                </div>

                <div class="col-md-3">
                    <div style=" background-color:tomato;">
                        <h5 class="p-2 text-center text-grey" style="text-transform: capitalize" ;><?php echo $row['job_type']; ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm"><b>Apply Now</b></a>
                    <a href="job-details.php?job_id=<?php echo $row['job_id']; ?>" class="btn btn-warning btn-sm"><b>View Job in Details</b></a>
                </div>

                <div class="col-md-3">
                    <span class="badge badge-success p-2" id="badge">Saved Job</span>
                    <h5>Job Expired</h5>

                    <h6><?php echo $row['job_exp_date']; ?></h6>
                </div>


            </div>
        </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>