<?php
	
	session_start();
	error_reporting(0);
	$varsesionadm = $_SESSION['admin'];
        $varsesionadm1 = $_SESSION['admin2001'];
	if ($varsesionadm == null && $varsesionadm1 == null){
		header("Location: login");
		die();
	}

	session_unset();
	session_destroy();
	header("Location: login");

?>