<?php
  //Arrancamos la sesión
session_start();
error_reporting(0);
//Comprobamos existencia de sesión
if ($_SESSION['usuario']) {
   header('location:index');
}
else if ($_SESSION['admin']) {
   
  // if ($_SESSION['admin']=='rosales') {
    //   header('location:amuse');
   //}
   
    header('location:cpanel1');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel De Usuario</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
                                                           
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
    
      @font-face{
        font-family: "Oswald";
        src: url("fonts/Oswald-Regular.ttf");
        }
      @font-face{
        font-family: "Raleway";
        src: url("fonts/Raleway-Regular.ttf");
        }
      @font-face{
        font-family: "Ubuntu";
        src: url("fonts/Ubuntu-Medium.ttf");
        }  
      @font-face{
        font-family: "Roboto Condensed";
        src: url("fonts/RobotoCondensed-Regular.ttf");
        } 
     
      body{
        /*    background-color: #E1F4DD;*/
    
        background:url("https://i.pinimg.com/originals/a2/16/52/a216523bfb4eff97128dd2f30218dfdd.jpg") no-repeat center center fixed;
        background-size:cover;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
      }
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
        color: #173707;
    
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation" style="background-color: #214D11">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="login" class="navbar-brand headerFont text-lg"><strong>Elecciones Casino de Suboficiales</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
        	-->
          </ul>
          

          <span class="normalFont"><a href="admin" class="btn btn-success navbar-right navbar-btn"><strong>Panel Administrativo</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4" style="background-color: #f7f7f7;padding:50px;">
    			
    			<div class="page-header">
    				<h2 class="specialHead">Autenticación de Usuario</h2>
                                
    			</div>
          <form action="userauth" method="POST">
      			<div class="form-group" style="color: #173707">
      				<label for="">Usuario</label><br>
      				<input type="text" name="adminUserName" placeholder="Ingrese su usuario" class="form-control"  required/><br>

      				<label for="">Contraseña</label><br>
      				<input type="password" name="adminPassword" class="form-control" placeholder="Ingrese su contraseña" required/><br>

      				<button type="submit" class="btn btn-block span btn-primary " style="background-color: #214D11;"><span class="glyphicon glyphicon-user"></span> Ingresar</button>

              <label id="error"></label>
      			</div>

          </form> 
          <br>

    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
