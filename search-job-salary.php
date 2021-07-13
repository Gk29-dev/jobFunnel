<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Candidate By Skill</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

</style>

<body>

	<?php include 'employee-header.php'; ?>
	<div class="container-fluid">
		<div class="container">

			<form id="addform" autocomplete="off">


				<div class="row pt-3" style="margin-left:25%;">

					<div class="col-sm-6 col-md-4 form-group">
						<label for="">Enter Minimum Salary</label>
						<input type="text" class="form-control" id="mini" placeholder="eg:$4000">
					</div>


					<div class="col-sm-6 col-md-4 form-group">
						<label for="">Enter Maximum Salary</label>
						<input type="text" class="form-control" id="max" placeholder="eg: $6000">
					</div>

					<div class=" col-sm-6 col-md-4  form-group" style="margin-top:30px;">
						<input type="submit" class="btn btn-outline-primary" id="search-job" value="Search" />
					</div>

				</div>
				<hr>

			</form>

			<div id="table-data"></div>
		</div>


	</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#addform").on("submit", function(e) {
				e.preventDefault();
				var minsalary = $("#mini").val();
				var maxsalary = $("#max").val();

				$.ajax({
					url: 'search-job-salary1.php',
					type: 'POST',
					data: {
						minsalary: minsalary,
						maxsalary: maxsalary
					},
					success: function(data) {
						if (data != "") {
							$("#table-data").html(data);

						} else {
							$("#table-data").html('<h1 class="text-secondary mt-5 ml-5">😂No Data Found😂</h1>');
						}
					}
				});
			});
		});
	</script>

	<?php include 'footer.php'; ?>



	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>