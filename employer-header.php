<?php
session_start();
if (!isset($_SESSION['cname'])) {
	echo '<script>location.href="employer-login.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
</head>

<style>
	nav ul li a {
		font-size: 15px;
		font-weight: bold;
		color: black !important;
	}

	nav ul li a:hover {
		color: grey !important;
	}

	.dropdown-menu a:hover {
		background-color: Dodgerblue;
		color: white !important;
	}
</style>

<body>


	<div class="container-fluid">
		<div class="container">

			<nav class="navbar navbar-expand-sm  navbar-light">
				<a href="#" class="navbar-brand">
					<img src="images/job-logo.png" width="130px" height="100px" alt="">
				</a>

				<ul class="navbar-nav" style="margin-left:200px; margin-top:-60px;">
					<li class="nav-item">
						<a href="employer-home.php" class="nav-link">Home</a>
					</li>

					<li class="nav-item">
						<a href="manage-job.php" class="nav-link">Manage Jobs</a>
					</li>

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Candidate</a>
						<div class="dropdown-menu">
							<a href="search-candidate-skill.php" class="dropdown-item">Skills</a>
							<hr>
							<a href="#" class="dropdown-item">Qualification</a>
							<hr>
							<a href="#" class="dropdown-item">Experience</a>
						</div>
					</li>

					<li class="nav-item">
						<a href="post-job.php" class="nav-link">Post Jobs</a>
					</li>

					<li class="nav-item">
						<a href="job-status.php" class="nav-link">Job Status</a>
					</li>



					<li class="nav-item ml-5 mt-2">
						<div class="dropdown">
							<img src="images/user-image.jpg" alt="" height="30px" width="30px" class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;" />
							<span><b><?php echo $_SESSION['cname']; ?></b></span>
							<div class="dropdown-menu">
								<a href="employer-profile.php" class="dropdown-item">My Profile</a>
								<a href="#" class="dropdown-item">Change Password</a>
								<a href="logout.php" class="dropdown-item" data-target="#mymodal" data-toggle="modal">Logout</a>
							</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</div>


	<!---Logout Modal Box--->
	<div class="modal fade" id="mymodal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title"><?php echo $_SESSION['cname']; ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					Are You Sure to Logout
				</div>

				<div class="modal-footer">
					<a href="logout.php" class="btn btn-primary" name="yes">Yes</a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>

</body>

</html>