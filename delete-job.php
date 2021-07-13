<?php 
 include 'connection.php';

 if($conn){
 	$jobID = $_POST['jobID'];

 	$sql = "DELETE FROM post_job WHERE job_id = {$jobID}";
 	$result = mysqli_query($conn, $sql);
 	if($result){
 		echo 1;
 	}
 	else{
 		echo 0;
 	}
 }
?>