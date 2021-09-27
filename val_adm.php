<?php
      session_start();
      error_reporting(0);
      $varsesionadm = $_SESSION['admin'];

      if ($varsesionadm != null || $varsesionadm != ''){
        header("Location: cpanel1.php");
      }
      else{
      	header("Location: admin.php");	
      }
 ?>