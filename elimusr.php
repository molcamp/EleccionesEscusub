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

                      if(empty($_POST['adminUserName']))
                      {
                     //   $error= "Ingrese Usuario";
                      //  echo "<p class='alert alert-danger'><strong>$error</strong></p>";
                        header("location:login");
                      }
                      else
                      {
                        $admin_username= test_input($_POST['adminUserName']);
                       

                    
                        //Establish Connection
                        $conn= mysqli_connect($hostname, $username, $password, $database);

                        //Check
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql="DELETE FROM `tbl_user`WHERE username='".$admin_username."'";
                        $query= mysqli_query($conn, $sql);
                       
                       
                        
                        if(mysqli_affected_rows($conn)>0)
                        {
                         
                         // header("location:users");
                         echo "<script>
                            alert('USUARIO $admin_username HA SIDO ELIMINADO');
                            window.location= 'users'
                        </script>";
                        }
                        
                        else echo "<script>
                            alert('USUARIO $admin_username NO EXISTE EN LA BASE DE DATOS');
                            window.location= 'users'
                        </script>";


                        mysqli_close($conn);

                      }
                    
          ?>