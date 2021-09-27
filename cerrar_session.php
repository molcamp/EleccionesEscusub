<?php
	
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];
	if ($varsesion == null || $varsesion =''){
		header("Location: login");
		die();
	}

	session_unset();
	session_destroy();
	header("Location: login");

?>