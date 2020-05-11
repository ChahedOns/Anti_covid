<?php

error_reporting(E_ALL);
session_start();
if(isset($_POST['ok']))
{
    require 'database.php';
    $cmp = $_POST['compte'];
    $reg = $_POST['reg'];
    $date = $_POST['date'];
    $suj=$_POST['suj'];
    $user=$_SESSION['email_user']; 
    $r="SELECT id_user FROM users WHERE email_user='$user'";
    $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$r)){
                                    echo mysl_error();
                            }
                            else {
                            //mysqli_stmt_bind_param($stmt,"s",$mail);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                                if($row = mysqli_fetch_array($result)){
                                   $id=$row['id_user'];
                                   
                                }
                                else
                               echo"erreur";
                            }
    $r="INSERT INTO `covid_19`.`intercation` (`id_int`, `sujet`, `compte`, `date`, `user`, `reg`) VALUES (NULL, '$suj', '$cmp', '$date', '$id', '$reg')";
    $stmt = mysqli_stmt_init($conn);
                 if(! mysqli_stmt_prepare($stmt,$r) )
                    {
                        echo mysqli_stmt_error($stmt);
                    }
                  else
                    {
                        mysqli_stmt_bind_param ($stmt,"sssss",$suj,$cmp,$date,$id,$reg);
                        
                        mysqli_stmt_execute($stmt);
                        header("location: ../assets/html/patdesh.php");
                        echo"ok";
                      exit();
                    }   
}
else 
    {
    header("location: ../assets/html/ask.php");
                              exit();
    }

?>