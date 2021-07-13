<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background-image: url('images/bg.png');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>

    <?php

    include 'employee-header.php';

    ?>

    <div class="container-fluid">
        <div class="container">

            <div class="row mt-5">
                <div class="col-md-7">
                    <div class="container">
                        <h2>Find The</h2>
                        <h2>job that fits your life</h2>
                        <p>Job Funnel is an online job portal. It has been developed in PHP programming language. It helps to search job for Job Seekers. It also helps to employer to posts their job and advertisement of their company.</p>
                        <form action="view-latest-job.php" class="form-inline" method="POST">
                            <div class="form-group mt-2">

                                <select name="job" id="job" class="form-control mx-3">
                                    <option value="disabled">Select Type of Job</option>
                                    <option value="Web Developer">Web Developers</option>
                                    <option value="Testing">Testing</option>
                                    <option value="Product Manager">Product Manager</option>
                                    <option value="Database Administrator">Database Administrator</option>
                                    <option value="system analyst">System Analyst</option>
                                    <option value="Network Engineer">Network Engineer</option>
                                </select>

                                <select name="location" id="location" class="form-control mx-3">
                                    <option value="disabled">Location</option>
                                    <option value="Delhi,india">Delhi</option>
                                    <option value="mumbai,india">Mumbai</option>
                                    <option value="Banglore,india">Banglore</option>
                                    <option value="Madhya Pradesh,india">Madhya Pradesh</option>
                                    <option value="Rajasthan,india">Rajasthan</option>
                                </select>

                                <button type="submit" class="btn btn-primary mx-3">Search</button>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="images/4565-removebg.png" alt="image" width="500px">
                </div>
            </div>

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