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
    <title>Panel de Control</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

      body{
      /*  background-color: #E1F4DD;*/
      background:url("https://i.pinimg.com/originals/8f/e0/4c/8fe04c89b6b6109a689a2bf6355ce330.jpg") no-repeat center center fixed;
        background-size:cover;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;

      }
      
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
         
          <a href="cpanel1" class="navbar-brand headerFont text-lg"><strong>Panel de Control</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination"><span class="subFont"><strong>Lista de Nominados</strong></span></a></li>
             <li><a href="users"><span class="subFont"><strong>Lista de Usuarios</strong></span></a></li>
          
          </ul>
          
          
          <span class="normalFont"><a href="cerrar_adm" class="btn btn-success navbar-right navbar-btn"><strong>Cerrar Sesión</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>
     </br>
          </br>
          </br>
           </br>
          </br>
          </br>
          
    <div class="container" style="padding-top:150px;">
      <div class="row">
        <div class="col-sm-12" style="background-color: #E1F4DD;">
          
          <div class="page-header">
            <h2 class="specialHead">Panel de Control</h2>
            <p class="normalFont">Este es el panel administrativo.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $IDM=0;
              $GP=0;
              $JMS=0;
              $PV=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Hubo un fallo en la conexión.";
              }
              else
              {

           
                 
               $sql ="SELECT id FROM tbl_users WHERE voted_for='ROJO'";
                $result= mysqli_query($conn, $sql);
                $totalrojo;
                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row)
                      $IDM++;
                      $totalrojo++;
                  }

                  $idm_value= $IDM*0.1;
                  echo "<style type=”text/css”>

                        .progress-bar-success {
                        background-color: #F72611;
                  }


                  </style>";
                  echo "<strong>LISTA ROJA</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$idm_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$idm_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }
                
                
                
                
                // Gustavo Petro
                $sql ="SELECT id FROM tbl_users WHERE voted_for='VERDE'";
                $result= mysqli_query($conn, $sql);
                $totalverde;
                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row)
                      $GP++;
                      $totalverde++;
                  }
                

                  $gp_value= $GP*0.1;

                  echo "<strong>LISTA VERDE GRIS</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success1' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$gp_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }
                
                // Gustavo Petro
                $sql ="SELECT id FROM tbl_users WHERE voted_for='BLANCO'";
                $result= mysqli_query($conn, $sql);
                $totalblanco;
                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row)
                      $JMS++;
                      $totalblanco++;
                  }


                  $jms_value= $JMS*0.1;
                  
                  
                
                  echo "<strong>VOTO EN BLANCO</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$jms_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT id FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row)
                      $total++;
                  }
                
                $sqlcont = "SELECT COUNT(uid) AS total FROM tbl_user";
                $resulta= mysqli_query($conn, $sqlcont);
                $data2=mysqli_fetch_assoc($resulta);
                $votantes = $data2['total'];
                

                  $tptal= $total*10;
                $faltan = $votantes-$total;
                  echo "<strong>Número total de Votos</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>Total de Votos : $total </h3>
                    <h3 class='normalFont'>Votos que Faltan: $faltan  </h3>
                    <h3 class='normalFont'>Votos a Lista Roja : $totalrojo </h3>
                    <h3 class='normalFont'>Votos a Lista Verde: $totalverde </h3>
                    <h3 class='normalFont'>Votos en Blanco: $totalblanco </h3>
                  </div>
                  ";
                }
               

             
                }

             
            ?>
          </div>

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
