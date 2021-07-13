<?php 

include 'connection.php';

if($conn){

   if(isset($_REQUEST['email']) || isset($_REQUEST['password'])){

  	$email=$_REQUEST['email'];
  	$password=$_REQUEST['password'];

  	$sql="SELECT * FROM admin_info Where Admin_email='$email'";
  	$result=mysqli_query($conn,$sql);
  	$row=mysqli_fetch_assoc($result);
  	if($row['Admin_email']==$email && $row['Admin_password']==$password){
      
      session_start();
  	  $_SESSION['Admin_name']=$row['Admin_name'];
      $_SESSION['Admin_email']=$row['Admin_email'];
       echo "<script> location.href='admin-dashboard.php' </script>";
  	}
  	else{
  		echo "<script> alert('Email/Password is Incorrect'); </script>";
  		echo "<script> location.href='index.php' </script>";
  	}
  }
  else{
  	echo "<script> location.href='index.php' </script>";
  }
}
