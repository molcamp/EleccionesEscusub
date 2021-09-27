<?php
                    
					 date_default_timezone_set('America/Argentina/Buenos_Aires');
          			$hoy = date("Y-m-d H:i:s");
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
                        //$error= "Ingrese Usuario Y Contraseña";
                       // echo "<p class='alert alert-danger'><strong>$error</strong></p>";
                        header("location:login");
                      }
                      else
                      {
                        $admin_username= test_input($_POST['adminUserName']);
                        $admin_password= test_input($_POST['adminPassword']);

                    
                        //Establish Connection
                        $conn= mysqli_connect($hostname, $username, $password, $database);

                        //Check
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql="INSERT INTO `tbl_user`(`username`, `password`, `bandera`) VALUES ('".$admin_username."','".$admin_password."',1)";
                        $query= mysqli_query($conn, $sql);
                       
                       
                        
                        if(($query))
                        {
                         
                         // header("location:users");
                         echo "<script>
                            alert('USUARIO $admin_username CARGADO SATISFACTORIAMENTE');
                            window.location= 'users'
                        </script>";
                        }
                        




                        mysqli_close($conn);

                      }
                    
          ?>