<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background-image: url('images/bg.png');
        background-size: cover;
        background-repeat: no-repeat;
    }


    #job-btn {
        background-color: orangered !important;
        color: white;
    }
</style>

<body>

    <?php
    include 'employer-header.php';
    ?>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2 class="my-3">Become an Employer</h2>
                    <small>Job Funnel is an online job portal. It has been developed in PHP programming language. It helps to search job for Job Seekers. It also helps to employer to posts their job and advertisement of their company</small><br>
                    <a href="#" role="button" class="btn btn-warning my-4" id="job-btn">Post Jobs</a>
                </div>

                <div class="col-md-6">
                    <img src="images/image1-removebg.png" alt="image" height="350px">
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