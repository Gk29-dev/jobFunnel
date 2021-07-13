<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>


	<?php

	include 'connection.php';

	$job_id = $_POST['jobid'];
	$category = $_POST['jobcategory'];
	$job_title = $_POST['jobtitle'];
	$job_type = $_POST['jobtype'];
	$salary = $_POST['salary'];
	$skill_required = $_POST['skill'];
	$exp_required = $_POST['experience'];
	$job_location = $_POST['location'];
	$job_exp_date = $_POST['expire'];
	$no_jobs      = $_POST['no_jobs'];
	$comp_name = $_POST['comp_name'];
	$comp_email = $_POST['comp_email'];
	$job_descrip = $_POST['description'];

	if ($conn) {

		$sql = "INSERT INTO post_job(job_id, category, job_title, job_type, salary, skill_required, exp_required, job_location, job_exp_date,emp_required, comp_name, comp_email,  job_description) VALUES ({$job_id}, '{$category}', '{$job_title}', '{$job_type}', '{$salary}', '{$skill_required}', '{$exp_required}', '{$job_location}', '{$job_exp_date}', {$no_jobs}, '{$comp_name}','{$comp_email}','{$job_descrip}')";

		$result = mysqli_query($conn, $sql);
		if ($result) {
	?>
			<script type="text/javascript">
				$(document).ready(function() {
					$("#abc").modal("show");
					$("#post-jobs").on("click", function() {
						window.location.href = "post-job.php";
					});
					$("#close-modal").on("click", function() {
						window.location.href = "employer-home.php";
					});
				});
			</script>

	<?php
		} else {
			echo '<script>alert("Request Failed")</script>';
		}
	}


	?>


	<div class="modal fade" id="abc">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title"><?php echo "HI," . $_SESSION['cname']; ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					😊😊😊 You Post a Job Successfully! 😊😊😊
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="post-jobs">Post More Jobs</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal" id="close-modal">No Thanks!</button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>

</html>