<?php session_start();
 
        if (!isset($_POST["selectedCandidate"])) header('location:login');
  ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema De Votacion</title>

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
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">
    			
    			<?php
          
          require('config.php');
          date_default_timezone_set('America/Argentina/Buenos_Aires');
          $hoy = date("Y-m-d H:i:s");
    		//	 session_start();		
				 error_reporting(0);
                //Comprobamos existencia de sesión
                if ($_SESSION['usuario'] && ($_POST["selectedCandidate"]) ) {
                     
                     
					if(isset($_POST["submit"])){
					if(isset($_POST["selectedCandidate"]))
					{
						$name= test_input($_SESSION['usuario']);
						
						$selection= test_input($_POST["selectedCandidate"]);
					}
				}
				else
				{
					echo "<br>All Field Recquired";
				}
				
       $DB_HOST= "fdb28.atspace.me";
       $DB_USER="3654396_evoting";
       $DB_PASSWORD="@Marcelito2020";
       $DB_NAME="3654396_evoting";
       
       
	    
	     /*             $hostname= "localhost";
                      $username= "id15371065_marcelo2020";
                      $password= "@014Moli2020";
                      $database= "id15371065_2222_db_evoting"; */
	    

        $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
        or die("Couldn't Connect to Database :");
				
       
        $sqlvot= "SELECT bandera FROM `tbl_user` WHERE username='".$_SESSION['usuario']."'";
        $resultado=mysqli_query($conn, $sqlvot);
        $row= $resultado->fetch_array()[0] ?? '';
				$sql= "INSERT INTO tbl_users VALUES(null,'".$name."',null,null,'".$selection."');";
				$negvot="UPDATE tbl_user SET bandera=0,time_stamp='".$hoy."' WHERE username='".$_SESSION['usuario']."'";

        if($row==0){

          session_unset();
          session_destroy();

          echo "<img src='images/success.png' width='70' height='70'>";
          echo "<h3 class='text-info specialHead text-center'><strong> Usted Ya Ha Emitido Su Voto.</strong></h3>";
          echo "<a href='login' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
          
        }


				else if($row==1){

          mysqli_query($conn, $sql);
          mysqli_query($conn, $negvot);

          session_unset();
          session_destroy();
					echo "<img src='images/success.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> Has votado satisfactoriamente.</strong></h3>";
					echo "<a href='login' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
          
				}
				else
				{
					echo "<img src='images/error.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> Parece que tenemos un problema.</strong></h3>";
					echo "<a href='index' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Volver</strong> </a>";
				}

                     
                }
          /*      else if ($_SESSION['admin']) {
   
                         if ($_SESSION['admin']=='rosales') {
                        header('location:amuse');
                            }
   
                 else header('location:cpanel1.php');
                }*/
                    
                    
                
				
				?>

				
    			
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


