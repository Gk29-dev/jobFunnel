<?php

 include 'connection.php';

 $email = $_POST['email'];
 $password = $_POST['password'];

 if($conn){

 	$sql ="SELECT email, password, c_name FROM company_details WHERE email= '{$email}'";
 	$result = mysqli_query($conn, $sql);
 	if(mysqli_num_rows($result)>0){
 		$row = mysqli_fetch_assoc($result);
 		if($row['email']== $email && $row['password']== $password){

            //create Sessions
            session_start();
 			$_SESSION['cname'] = $row['c_name'];
 			$_SESSION['email'] = $row['email'];

 			echo '<script>alert("Login Successfully")</script>';
 			echo '<script>location.href="employer-home.php"</script>';
 		}
 		else{
 			echo '<script>alert("Email/Password Incorrect")</script>';
 			echo '<script>location.href="employer-login.php"</script>';
 		}
 	}
 }
