<?php session_start();
      if(empty($_POST['adminUserName']) || empty($_POST['adminPassword']))
                      {
                        header("location:login");
                        
                      }
?>
<!DOCTYPE html>
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
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">
      <?php
                    

                      // Credentials
                      $hostname= "fdb28.atspace.me";
                      $username= "3654396_evoting";
                      $password= "@Marcelito2020";
                      $database= "3654396_evoting";
                      
                      
                        
                      // UserInput Test
                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                       
                        return $data;
                      }

                      if(empty($_POST['adminUserName']) || empty($_POST['adminPassword']))
                      {
                        $error= "Ingrese Usuario Y Contraseña";
                        echo "<p class='alert alert-danger'><strong>$error</strong></p>";
                      
                      }
                      else
                      {
                        $admin_username= test_input($_POST['adminUserName']);
                        $admin_password= test_input($_POST['adminPassword']);

                    
                        //Establish Connection
                        $conn= mysqli_connect($hostname, $username, $password, $database);
          //      $conn = mysqli_connect('localhost','id15371065_root','b<t0Rc&g\$9hAKSH','id15371065_db_evoting');    
                        
                        
                        //Check
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql= "SELECT * FROM tbl_user WHERE username='".$admin_username."' AND password='".$admin_password."' AND bandera=true";
                        $query= mysqli_query($conn, $sql);
                       

                        
                        if(mysqli_num_rows($query)==1)
                        {
                          
                       //   session_start();
                          $_SESSION['usuario'] = $admin_username;
                       //   header("location:index");
                          echo "<script> 
                                <!--
                                window.location.replace('index'); 
                                 //-->
                                </script>";
                        }
                        

                        $sql1= "SELECT * FROM tbl_user WHERE username='".$admin_username."' AND password='".$admin_password."' AND bandera=false";
                        $query1= mysqli_query($conn, $sql1);

                        if(mysqli_num_rows($query1)==1)
                        {
                          $error="Lo siento !! Voto Ya Emitido";
                          
                          echo "<p class='alert alert-danger'><strong>$error</strong></p>";

                          echo "<p class='normalFont text-primary'><strong>El Usuario ingresado ya ha emitido su voto. Ante cualquier duda contacte al desarrollador del sistema.</strong> </p>";
                          echo "<br><a href='login' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Intente con otro Usuario</strong></a>";
                        }

                        else
                        {
                          $error="Lo siento !! Autenticación fallida";
                          
                          echo "<p class='alert alert-danger'><strong>$error</strong></p>";

                          echo "<p class='normalFont text-primary'><strong>Su combinación de nombre de usuario y contraseña es incorrecta. Ante cualquier duda contacte al desarrollador del sistema.</strong> </p>";
                          echo "<br><a href='login' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Intentalo otra vez</strong></a>";
                        }



                        mysqli_close($conn);

                      }
                    
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


