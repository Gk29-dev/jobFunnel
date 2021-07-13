<?php 

$candiEmail = $_POST['candiEmail'];
$comp_email = $_POST['comp_email'];
$candi_name = $_POST['candi_name'];

$msg = "Hey!" .$candi_name. "You Have Been Shortlist for the Interview.";
$subject = "Shortlist For The Interview";

$header = "From : ".json_encode($comp_email);

if(mail($candiEmail, $subject, $msg, $header)){
	echo 1;
}
else{
	echo 0;
}
?>