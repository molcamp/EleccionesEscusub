<?php
      session_start();
      error_reporting(0);
      $varsesion = $_SESSION['usuario'];

      if ($varsesion == null || $varsesion = ''){
        header("Location: login.php");
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
    <title>Panel de Votaciones</title>

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

      .logo:hover{
      -webkit-transform: scale(2.0);
      -ms-transform: scale(2.0);
      transform: scale(2.0);
      position: relative;
        transition: transform .5s;
      }


    </style>
    
    <script>
            function ConfirmarVoto(){

              var respuesta = confirm("¿ ESTA SEGURO DE SU VOTO ?");

              if (respuesta==true){
                return true;
              }
              else {
                return false;
              }
            }
      
    </script>

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
          <a href="index" class="navbar-brand headerFont text-lg"><strong>Votacion</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

          
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Elige tu Candidato.</h2>
            <p class="normalFont">Prueba que eres un Votante Leal<i class="fas fa-autoprefixer    "></i>.</p>
          </div>
          
          <form action="saveVote" method="POST">
          <div class="form-group">
           
            
            <h3 class="normalFont">Selecciona una de las siguientes Listas:</h3>
             </br>
              </br>
               </br>
            <div class="radio">
              <label for="">
                <div class="">
                <img src="images/listaroja.png" class="img-responsive" style="display:inline" width="400" height="400"/>
                </br>
                </div>
                <input type="radio" name="selectedCandidate" value="ROJO" required> <strong>LISTA ROJA</strong>

              </label><br>
              </br>
              </br>
              </br>
              <label for="">
                <div class="">
                <img src="images/listaverde.png" class="img-responsive" style="display:inline" width="300" height="300"/>
                </br>
                </div>
                <input type="radio" name="selectedCandidate" value="VERDE" required> <strong>LISTA VERDE-GRIS</strong> 
              </label><br>
              
              <br>
              <hr>

              </label><br>
              </br>
              </br>
              </br>
              <label for="">
                <div class="">
                <img src="images/blanco.jpg" class="img-responsive" style="display:inline" width="400" height="400"/>
                </br>
                </div>
                <input type="radio" name="selectedCandidate" value="BLANCO" required> <strong>VOTO EN BLANCO</strong> 
              </label><br>
              
              
              <br>
              <hr>
              <button id="confirm" type="submit" name="submit" class="btn btn-primary" onclick="return ConfirmarVoto()"><strong>Enviar</strong></button>
              <button type="submit" class="btn btn-default">Declinar</button>
            </div>
          </div>
          </form>

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
