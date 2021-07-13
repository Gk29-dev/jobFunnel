<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Category</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	* {
		box-sizing: border-box;
	}

	body {
		margin: 0;
		padding: 0;
		font-family: "Roboto", "sans-serif";
		background: #EDF4F8;
	}

	header {
		width: 100%;
		background: #22242A;
		height: 50px;
	}

	.header button:hover {
		background-color: #19B3D3;
		border: 0;
	}

	.heading {
		text-transform: uppercase;
		color: #19B3D3;
	}

	.header .heading {
		word-spacing: 2px;
	}

	.header h4 {
		font-size: 22px;
		font-weight: 900;
	}

	.header span {
		font-size: 22px;
		font-weight: 900;
	}

	.main-content .container-fluid #left-column {
		background: #2F323A;
		height: 100vh;
	}

	.main-content .container-fluid #left-column img {
		width: 100px;
		height: 100px;
		border-radius: 100px;
		margin-bottom: 10px;
	}

	#left-column .admin-img h4 {
		color: #ccc;
		margin-top: 0;
		margin-bottom: 10px;
	}

	#left-column .useful-links a {
		color: #fff;
		display: block;
		width: 100%;
		line-height: 50px;
		text-decoration: none;
		padding-left: 40px;
		transition: 0.5s;
		transition-property: background-color;
	}

	#left-column .useful-links a:hover {
		background-color: #19B3D3;
	}

	i {
		padding-right: 10px;
	}
</style>

<body>

	<!------Main Header Start---->


	<div class="modal fade" id="mymodal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title"><?php echo $_SESSION['Admin_name']; ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					Are You Sure to Logout?
				</div>

				<div class="modal-footer">
					<a href="admin-logout.php" class="btn btn-primary" name="yes">Yes</a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>
	<!------Main Header Ends---->

	<header class="header">
		<div class=" heading float-left mt-3">
			<h4 class="float-left ml-5">Job <span class="text-white">Funnel</span></h4>
		</div>
		<button class="btn btn-outline-secondary btn-sm text-white float-right mr-5 mt-2" name="logout" data-target="#mymodal" data-toggle="modal">Logout</button>
	</header>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">

				<div class="pt-3" id="left-column" style="width:250px;">

					<div class="admin-img">
						<center>
							<img src="../images/user-image.jpg" alt="">
							<h4><?php echo $_SESSION['Admin_name']; ?></h4>
						</center>
					</div>

					<div class="useful-links">
						<a href="admin-dashboard.php">
							<i class="fa fa-dashboard icon"></i><span>Dashboard</span>
						</a>

						<a href="staff_registration.php">
							<i class="fa fa-user icon"></i><span>Job Category</span>
						</a>

						<a href="add_item.php">
							<i class="fa fa-book icon"></i><span>Employee List</span>
						</a>
						<a href="issue_item.php">
							<i class="fa fa-pencil icon"></i><span>Employer List</span>
						</a>

						<a href="monthly_report.php">
							<i class="fa fa-bar-chart icon"></i><span>Monthly Report</span>
						</a>
					</div>


				</div>
				<div class="col-md-9">
					<div class="h2 pt-3 pb-3 px-5 center" id="adm-title">Job Category</div>

					<?php
					include 'connection.php';

					$sql = "SELECT * FROM category";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
					?>
						<table class="table table-bordered table-striped text-center">
							<thead class="bg-primary text-white">
								<tr>
									<th>Category ID</th>
									<th>Category Name</th>
									<th>Action</th>
								</tr>
							</thead>
						<?php
					}
					while ($row = mysqli_fetch_assoc($result)) {
						?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td style="text-transform: capitalize;"><?php echo $row['category']; ?></td>
								<td><button type="button" class="btn btn-warning btn-sm mx-2">Edit</button><button type="button" class="btn btn-danger btn-sm mx-2">Delete</button></td>
							</tr>
						<?php
					}
						?>
						</table>

						<button class="btn btn-success btn-sm" style="float: right;">Add New Category</button>
				</div>
			</div>
		</div>
		<!--------Main Header Ends------->


		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>