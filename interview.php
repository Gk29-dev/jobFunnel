<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candidate Shortlist</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<?php

	include 'employer-header.php';
	include 'connection.php';

	$jobID = $_GET['id'];

	if ($conn) {
		$sql = "SELECT * FROM applied_job WHERE job_id= {$jobID}";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo '<table class="table table-bordered table-striped text-center">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>
				      <th>Candidate Name</th>
				      <th>Candidate Email</th>
				      <th>Key Skill</th>
				      <th>Experience</th>
				      <th>Designation</th>
				      <th>Invite For Interview</th>
			        </tr>
			      </thead>';
			while ($row = mysqli_fetch_assoc($result)) {
				$comp_email = $row["comp_email"];
				$candi_name = $row['candidate_name'];
	?>

				<tr>
					<td><?php echo $row['candidate_name']; ?></td>
					<td><?php echo $row['candidate_email']; ?></td>
					<td><?php echo $row['key_skill']; ?></td>
					<td><?php echo $row['experience']; ?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><button type="button" class="btn btn-primary btn-sm interview-btn" data-email=<?php echo $row['candidate_email']; ?>>Invite</button></td>
				</tr>

	<?php
			}
			echo '</table>';
		}
	}

	include 'footer.php';

	?>

	<!---- Mail Send to Candidate for Interview--->

	<script type="text/javascript">
		$(document).ready(function() {
			$(document).on("click", ".interview-btn", function() {
				var candiEmail = $(this).data("email");
				var comp_email = <?php echo json_encode($comp_email); ?>;
				var candi_name = <?php echo json_encode($candi_name); ?>;


				$.ajax({
					url: 'interview1.php',
					type: 'POST',
					data: {
						candiEmail: candiEmail,
						comp_email: comp_email,
						candi_name: candi_name
					},
					success: function(data) {
						if (data == 1) {
							$("#mail-send").modal("show");
						} else {
							alert("Mail Not Send");
						}
					}
				});
			});

		});
	</script>

	<!---Send Mail Message-->

	<div class="modal fade" id="mail-send">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">HI!<?php echo $_SESSION['cname'];  ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					😊😊😊 Mail Send Successfully! 👍👍👍
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="close-modal">OK</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>