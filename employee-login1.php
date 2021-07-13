<?php

include 'connection.php';

 $email = $_POST['email'];
 $password = $_POST['password'];

 if($conn){

 	$sql ="SELECT email, c_password, cname FROM candidate_details WHERE email= '{$email}'";
 	$result = mysqli_query($conn, $sql);
 	if(mysqli_num_rows($result)>0){
 		$row = mysqli_fetch_assoc($result);
 		if($row['email']== $email && $row['c_password']== $password){

            //create Sessions
            session_start();
 			$_SESSION['candi_name'] = $row['cname'];
 			$_SESSION['candi_email'] = $row['email'];

 			echo '<script>alert("Login Successfully")</script>';
 			echo '<script>location.href="employee-home.php"</script>';
 		}
 		else{
 			echo '<script>alert("Email/Password Incorrect")</script>';
 			echo '<script>location.href="employee-login.php"</script>';
 		}
 	}
 }


?>