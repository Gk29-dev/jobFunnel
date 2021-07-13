<?php

session_start();
if(isset($_SESSION['cname'])){

   
	session_unset();
	session_destroy();
	echo '<script>location.href="employer-login.php"</script>';
}

if(isset($_SESSION['candi_name'])){
	session_unset();
	session_destroy();
	echo '<script>location.href="employee-login.php"</script>';
}

?>