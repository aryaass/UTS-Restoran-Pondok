<?php 
	
	session_start();
	
	session_destroy();
	
	setcookie('isLoged','',time() - 3600,"/");
	header('location: ../index.php');
	exit;
?>