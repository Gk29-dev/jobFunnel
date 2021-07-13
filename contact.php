<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
	body{
		background-color: #F4F4F6;
	}
	.jumbotron{
        background-image:linear-gradient(to bottom right, dodgerblue, pink);
    }
    section{
    	margin-top: 10px;
    	background-color: white;

    }
    section .contact-row{
    	margin-left:30px;
    	padding:10px;
    }
    section .contact-row i{
    	font-size:24px;
    	color:Dodgerblue;
    }
    section .contact-row p{
    	font-size:18px;
    	font-weight: bold;
    }
</style>
<body>

   <div class="container-fluid">
   	<div class="container">

   		<div class="jumbotron" style="height:80px !important">
                <h2 style="margin-top:-30px;">Get Touch with us</h2>
        </div>

        <section>

           <div class="row">
           	 <div class="col-md-5 mt-4">	
	        	    <div class="row contact-row mt-4">

		        		<div class="col-md-2">
		        			<i class="fa fa-phone icon"></i>
		        		</div>

		        		<div class="col-md-8">
		        			<p>011-26026347</p>
		        		</div>
	        	    </div>

			        	<div class="row contact-row">
			        		<div class="col-md-2">
			        			<i class="fa fa-envelope icon"></i>
			        		</div>
			        		<div class="col-md-8">
			        			<p>ankit4gaurav@gmail.com</p>
			        		</div>
			        	</div>

			        	<div class="row contact-row">
			        		<div class="col-md-2">
			        			<i class="fa fa-map-marker icon"></i>
			        		</div>
			        		<div class="col-md-10">
			        			<p>D-112 D.D.A Flats Kalkaji New Delhi-110019</p>
			        		</div>
			        	</div>

		        </div>

		        <div class="col-md-6" style="margin-left:20px;">
		        	<img src="images/6340-removebg.png" alt="contact-image" width="400px" height="400px" style="margin-top:-80px;">
		        </div>
		    </div>
        </section>
   	 </div>
   </div>

   <?php
     include 'footer.php';
   ?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
</body>
</html>