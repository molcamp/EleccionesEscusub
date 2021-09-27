<?php
session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION['usuario']) !="0") {
header('Location: login.html');
} 
else { 
    $actividad = $_SESSION["actividad"]; 
    $hractual = date("Y-n-j H:i:s"); 
    $tiempo = (strtotime($hractual)-strtotime($actividad)); 
     if($tiempo >= 500) { 
      session_destroy(); 
      header("Location: login.html");  
    }else { 
    $_SESSION["actividad"] = $hractual; 
   } 
} 
?>