<?php

include 'connection.php';

$name = $_POST['cname'];
$experience = $_POST['experience'];
$skill = $_POST['key_skill'];
$quali = $_POST['quali'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$address = $_POST['address'];

if($conn){
	$sql = "UPDATE candidate_details SET cname ='$name', email = '$email', mob_no = $mob, key_skill ='$skill', qualification = '$quali', experience = '$experience', address = '$address' WHERE email = '$email'";

	$result = mysqli_query($conn, $sql);
	if($result){
		echo '<script>location.href="employee-profile.php"</script>';
	}
	else{
		echo '<script>alert("Error")</script>';
	}
}

?>