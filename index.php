<?php
      session_start();
      error_reporting(0);
      $varsesion = $_SESSION['usuario'];

      if ($varsesion == null || $varsesion = ''){
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
    <title>Elecciones Casino De Suboficiales</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/faviconconfiguroweb.png" type="image/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
  
    body{
      margin:0px;
      padding:0px;
      background-color: #E1F4DD;
    /*  background-image: url("https://i.pi/*nimg.com/originals/8f/e0/4c/8fe04c89b6b6109a689a2bf6355ce330.jpg");*/
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

      a {
        color: #FFFFFF;
        text-decoration: none;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
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
          
          <a href="nomination" class="navbar-brand headerFont text-lg"><strong>CONOCER LAS LISTAS</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          
          

          <span class="normalFont"><a href="cerrar_session" class="btn btn-success navbar-right navbar-btn"><strong>Cerrar Sesion</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
    </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="jumbotron text-center text-block" style="padding-top:170px;">
              <img src="images/logescusub.jpg" alt="">
                  <h1 class="specialHead">Sistema de Votacion Online</h1>
                  <h1 class="subFont">Casino De Suboficiales</h1>
                  <h1 class="subFont">Gendarmeria Nacional - Jesus Mar??a</h1>
                  <p class="normalFont">Seguro . Eficiente . De confianza . R??pido </p>

                  <a href="vault" class="btn btn-primary btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> Emitir su voto</a>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" id="featuresTab">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="page-header" style="padding-top:50px;padding-bottom:50px">
              <h1 class="normalFont" style="font-size:44px;" >??Qu?? es esto?</h1>
              <p class="subFont" style="font-size:24px;"><em>Una forma interactiva de resolver la votaci??n convencional.</em></p>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" style="padding:50px;" id="aboutTab">
        <div class="row">

          

          <div class="col-sm-4 text-center">
            
            <img src="images/Nominee.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;">Voto en L??nea.</h2>
            <p><em>Solo necesita detalles b??sicos suyos y le dejaremos votar.</em></p>

          </div>
          <div class="col-sm-4 text-center">

            <img src="images/Vote.png" width="100" height="100" alt=""/>
            <a href="nomination.html" class="normalFont" style="font-size:28px;"><h2 style="color: black">Nominaci??n</h2></a>
            <p><em>El Panel de control del administrador le permite administrar la lista de nominaciones completas.</em></p>

          </div>
          <div class="col-sm-4 text-center"> 
            
            <img src="images/Stats.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;" >Estad??sticas</h2>
            <p><em>Muestra la representaci??n gr??fica de datos de sus votos. Y, est?? en el Panel de control del administrador.</em></p>

          </div>

         
        </div>
      </div>
        <hr>
        <div class="container" id="feedbackTab">
          <div class="row">
            <div class="col-sm-12 text-center" style="">
              <div class="page-header" style="padding-top:30px;padding-bottom:30px;">
                <img src="images/MailBoy.png" width="100" height="100" alt="">
                <br>
                <h1 class="specialHead">Contacto</h1>
                <p style="font-size:16px;">Si tiene alguna sugerencia con respecto a nuestro sistema de votaci??n. Agradeceremos cualquier sugerencia.</p>
                
              
                <br>
               
              </div>
            </div>
          </div>
        </div>
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
             <h2 class="specialHead">Area Comunicaciones<br>Escusub</h2>
            </div>
            <div class="col-sm-6 text-center">
              <a href="https://web.facebook.com/gendarmerianacional" target="_blank"><img src="images/Facebook.png" width="50" height="50" alt=""></a>
              <a href="https://twitter.com/gendarmeria" target="_blank"><img src="images/Twitter.png" width="50" height="50" alt=""></a>
              
              
            </div>

          </div>
        </div>
      </footer>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
