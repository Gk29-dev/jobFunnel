<?php 

include 'connection.php';

$jobID = $_POST['jobID'];
$category = $_POST['category'];
$jobType = $_POST['jobType'];
$salary = $_POST['salary'];
$exp_req = $_POST['exp_req'];
$job_exp_date = $_POST['job_exp_date'];
$emp_req = $_POST['emp_req'];

if($conn){
	$sql = "UPDATE post_job SET category= '$category', job_type= '$jobType', salary= $salary, exp_required= '$exp_req', job_exp_date= '$job_exp_date', emp_required= $emp_req WHERE job_id = $jobID";

	$result = mysqli_query($conn, $sql);
	if($result){
		echo 1;
	}
	else{
		echo 0;
	}
}
