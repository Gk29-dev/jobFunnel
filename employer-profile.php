<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employer Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body{
		background-image: url('images/bg.png');
		background-size:cover;
		background-repeat: no-repeat;
	}
</style>
<body>

<?php
 include 'employer-header.php';
 include 'connection.php';
 ?>

<?php 
 
  $comp_email = $_SESSION['email'];

  $sql = "SELECT * FROM company_details WHERE email ='{$comp_email}'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
  	$row = mysqli_fetch_assoc($result);

  ?>
  <div class="container-fluid">
	<div class="container">
		<div class="row">
		     <div class="col-md-9" style="margin:auto;">
    				<div class="h2 py-2 px-5 text-center" id="adm-title">Employer Profile</div>

    		      <div class="card" id="admin-profile-card" style="width: 700px; margin:auto;">	
	    				<div class="row">
	    					<div class="col-md-12  mb-5">
	    							
	                                         <div class="images-file mt-3" style="margin-left: 200px; display: inline-block;  border-radius:50%; height:200px; width:200px;">
	                                            <img src="images/7566.jpg" alt="" id="blah" class="images-file card-img-top" style="margin-left: 0px; margin-top:20px; border-radius:50%;">
	                                        </div>
	                                       <div  class="ml-5" style=" display: inline-block;">
	                                       	<button class="btn btn-primary btn-sm" data-target="#edit-profile" data-toggle="modal">Edit Profile</button>
	                                       </div>
                                    

	    					</div>
	    				</div>
	    				<div class="card-body" style="margin-top:-50px;">
	    					<h4 class="card-title text-center" style="text-transform: capitalize;"><?php echo $row['c_name']; ?></h4>

	    					<div class="d-flex p-3">
	    					  <div class="p-4 text-center" style="margin-left:-30px;">Industry<h6 class="py-3"><b><?php echo $row['industry']; ?></b></h6></div>
	    					  <div class="p-4 text-center">website<h6 class="py-3"><b><?php echo $row['website']; ?></b></h6></div>
	    					  <div class="p-4 text-center">Email<h6 class="py-3"><b><?php echo $row['email']; ?></b></h6></div>
	    					</div>

	    					<hr>
                                 <div class="row">
                                 	<div class="col-md-6">
				    					<h4 class="px-3 py-4">ADDRESS</h4>
				    					<p><?php echo $row['address']; ?></p>
				    					
			    				    </div>
			    				    <div class="col-md-6">
				    					<h4 class="px-3 py-4 text-right">Contact</h4>
				    					<p class="text-right">Phone: +91&nbsp;<?php echo $row['mobile']; ?></p>
			    				    </div>
			    			</div>
	    				</div>
    				</div>			
    	     </div>
    	</div>
	</div>
</div>
  
 <?php  
 }	
include 'footer.php';
?>


<!---Edit Profile Modal---->

<div class="modal fade" id="edit-profile">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h4 class="modal-title" style="text-transform: capitalize;"><?php echo "Hi,".$row['c_name']; ?></h4>
    				<button class="close" data-dismiss="modal">&times;</button>
    			</div>

    			<div class="modal-body">
    				<h5 class="text-center">Edit Your Profile</h5>

    				<form action="edit-employer-profile.php" method="POST">
    					<div class="form-group">
    						<label for="">Name</label>
    						<input type="text" class="form-control" name="comp_name" id="comp_name" value=<?php echo $row['c_name']; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Email</label>
    						<input type="text" class="form-control" name="comp_email" id="comp_email" value=<?php echo $row['email']; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Website</label>
    						<input type="text" class="form-control" name="website" id="website" value=<?php echo $row['website']; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Industry</label>
    						<input type="text" class="form-control" name="industry" id="industry" value=<?php echo $row['industry']; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Mobile</label>
    						<input type="text" class="form-control" name="comp_mob" id="comp_mob" value=<?php echo $row['mobile']; ?>>
    					</div>

    					<div class="form-group">
    						<label for="">Address</label>
    						<input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address']; ?>">
    					</div>
    				

    			</div>

    			 <div class="modal-footer">
    			 	<input type="submit" name="" id="update" value="Save changes" class="btn btn-primary btn-sm">
    				<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
    			 </div>
    			</form>
    		</div>
    	</div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
</body>
</html>