<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
          <a href="amuse" class="navbar-brand headerFont text-lg"><strong>Cambiar Password</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
        	-->
          </ul>
          

          <a href="amuse"><button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Panel Administrativo</strong></span></button></a>
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:100px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4" style="border:2px solid gray;padding:50px;">
    			
    			<div class="page-header">
    				<h2 class="specialHead">Contraseña de Administrador</h2>
    			</div>
          
          <form action="updatePwd" method="POST">
      			<div class="form-group">
      				<label for="">Contraseña Actual</label><br>
      				<input type="text" name="existingPassword" placeholder="Ingrese su actual contraseña" class="form-control"><br>

      				<label for="">Nueva Contraseña</label><br>
      				<input type="password" name="newPassword" class="form-control" placeholder="Ingrese su nueva contraseña"><br>

              <label for="">Repite la Contraseña</label><br>
              <input type="password" name="retypePassword" class="form-control" placeholder="Ingrese su contraseña otra vez"><br>

      				<button type="submit" class="btn btn-block span btn-primary "> <span class="glyphicon glyphicon-ok"></span> Cambiar Contraseña</button>
      			</div>
          </form>
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