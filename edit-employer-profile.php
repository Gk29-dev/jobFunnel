<?php

include 'connection.php';

$name = $_POST['comp_name'];
$email = $_POST['comp_email'];
$website = $_POST['website'];
$industry = $_POST['industry'];
$mobile = $_POST['comp_mob'];
$address = $_POST['address'];

if($conn){
	$sql = "UPDATE company_details SET c_name ='$name', email = '$email', industry = '$industry', mobile =$mobile, website = '$website', address = '$address' WHERE email = '$email'";

	$result = mysqli_query($conn, $sql);
	if($result){
		echo '<script>location.href="employer-profile.php"</script>';
	}
	else{
		echo '<script>alert("Error")</script>';
	}
}

?>