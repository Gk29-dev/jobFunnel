<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Password</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


<style>
	.input-container {
		display: flex;
	}

	.input-container i {
		font-size: 20px;
		padding: 8px;
		width: 50px;
		background-color: dodgerblue;
		color: white;
		border-top-left-radius: 5px;
		border-bottom-left-radius: 5px;
		text-align: center;
	}

	input[type="email"] {
		box-shadow: none !important;
		outline: none;
		border-top-left-radius: 0px !important;
		border-bottom-left-radius: 0px !important;

	}

	input:focus {
		border: 2px solid dodgerblue;
	}
</style>

<body>

	<div class="jumbotron mt-3">
		<div class="container" style="margin:auto;">
			<h1>Change Password</h1>
			<p class="lead">Fill The data Correctly</p>

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-group" autocomplete="off" style="width: 400px; margin:auto;" method="POST">
				<div class="input-container my-4" style="width: 100%;">
					<i class="fa fa-user icon"></i><input type="email" class="form-control" placeholder="Enter Valid Email Address" name="email" required value=<?php echo $_SESSION['candi_email']; ?>>
				</div>

				<div class="input-container my-4" style="width: 100%;">
					<i class="fa fa-key icon"></i><input type="text" class="form-control" placeholder="Enter Old Password" name="oldpassword" required>
				</div>

				<div class="input-container my-4" style="width: 100%;">
					<i class="fa fa-key icon"></i><input type="text" class="form-control" placeholder="Enter New Password" name="newpassword" required>
				</div>

				<input type="submit" class="btn btn-outline-primary w-100 mt-4" name="change-password" value="Change Password">

			</form>
		</div>
	</div>

	<?php

	include 'connection.php';

	if (isset($_SESSION['candi_email'])) {
		$user_email = $_SESSION['candi_email'];

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$email = $_REQUEST['email'];
			$oldpass = $_REQUEST['oldpassword'];
			$newpass = $_REQUEST['newpassword'];

			$sql = "SELECT * FROM candidate_details WHERE email='$user_email'";
			$res = mysqli_query($conn, $sql);
			if (mysqli_num_rows($res) > 0) {
				$row = mysqli_fetch_assoc($res);

				$oldpassword = $row['c_password'];
				$sql1 = "UPDATE candidate_details SET c_password = '{$newpass}' WHERE email ='$user_email'";
				$result = mysqli_query($conn, $sql1);
				if ($result) {
	?>

					<script type="text/javascript">
						$(document).ready(function() {
							$("#mymodal").modal("show");
						});
					</script>
	<?php
				} else {
					echo "not Updated";
				}
			}
		}
	}

	?>
	<div class="modal fade" id="mymodal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Password Changed</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					Change The Password Successfully!
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-outline-success" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>