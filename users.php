<?php
      session_start();
      error_reporting(0);
      $varsesionadm = $_SESSION['admin'];

      if ($varsesionadm == null || $varsesionadm = ''){
        header("Location: login");
        die();
      }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
    
      body{
        background-color: #E1F4DD;
    
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
          <a href="admin" class="navbar-brand headerFont text-lg"><strong>Sistema de Votacion</strong></a>
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
    	
    	
    <form action="cargarusr" method="POST">
    <div class="form-group">
        <h2 class="headerFont">Cargar Votante</h2>
        <div class="input-group">
          <input type="text" name="adminUserName" placeholder="Usuario" class="form-control"style="margin: 10px;width : 200px; height : 30px" required="">
        
          <input type="text" name="adminPassword" placeholder="Contraseña" class="form-control" style="margin: 10px;width : 200px; height : 30px" required="">
          <button type="submit" class="btn btn-block span btn-primary " style="margin: 10px;width : 100px; height : 30px;background-color: #214D11;">Cargar</button>

        </div>
      </div>
    	</form>

    <form action="elimusr" method="POST">
    <div class="form-group">
        <h2 class="headerFont">Eliminar Votante</h2>
        <div class="input-group">
          <input type="text" name="adminUserName" placeholder="Usuario" class="form-control"style="margin: 10px;width : 200px; height : 30px" required="">
        
          <button type="submit" class="btn btn-block span btn-primary " style="margin: 10px;width : 100px; height : 30px;background-color: #214D11;">Eliminar</button>

        </div>
      </div>
      </form> 
    <h2 class="headerFont">Lista de Votantes</h2>
    </br>
    </br>
    </br>
    
    
    <div class="row">
      <div class="col-sm-12">
         <div style="text-align:center;background-color: #ECF1ED;">
        <table class="table table-bordered table-hover">
          <tr>
             <div style="text-align:center;">  
            <th style="text-align: center;background-color: #67C97C;">N° ORDEN</th>
            <th style="text-align: center;background-color: #67C97C;">USUARIO</th>
            <th style="text-align: center;background-color: #67C97C;">CONTRASEÑA</th>
            <th style="text-align: center;background-color: #67C97C;">VOTO</th>
            <th style="text-align: center;background-color: #67C97C;">HORARIO</th>
          </div>
          </tr>

          <?php
                      require('config.php');
                      
                      $check="";
                      $si= "<img src='images/sis.jpg' width='35' height='35'>"; 
                      $no= "<img src='images/no.png' width='40' height='40'>"; 
                          
                      //Establish Connection
                        $conn= mysqli_connect($hostname, $username, $password, $database);

                        //Check
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        for ($i=1; $i < 1000; $i++) { 
                          
                          $sql= "SELECT * FROM tbl_user where uid='".$i."'";
                          $query= mysqli_query($conn, $sql);

                          if(mysqli_num_rows($query)>0)
                            {
                              while($row= mysqli_fetch_assoc($query))
                              {
                                $full_name= $row['uid'];
                                $email= $row['username'];
                                $voter_id= $row['password'];
                                $voto= $row['bandera'];
                                $hoy= $row['time_stamp'];
                                
                                if ($voto==1) $check=$no;
                                else $check=$si;
                                echo "
                                  <tr>
                                      <td>$full_name</td>
                                      <td>$email</td>
                                      <td>$voter_id</td>
                                      <td>$check</td>
                                      <td>$hoy</td>
                                  </tr>   
                                ";
                              }
                            }
                        }
                          mysqli_close($conn);
          ?>

        </table>
      </div>
    </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>