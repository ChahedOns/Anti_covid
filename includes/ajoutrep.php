<?php
session_start();
if(isset($_POST['ok']))
{
    require 'database.php';
    $cmp = $_POST['compte'];
    $reg = $_POST['reg'];
    $date = $_POST['date'];
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
                                   echo$id;
                                }
                                else
                               echo"erreur";
                            }
    $r="INSERT INTO reponse (rep,date_rep,user_rep,reg_rep) VALUES ('$cmp' ,'$date' , '$id', '$reg')";
                
                    $stmt = mysqli_stmt_init($conn);
                 if(! mysqli_stmt_prepare($stmt,$r) )
                    {
                        echo"erreur";
                    }
                  else
                    {
                        //mysqli_stmt_bind_param ($stmt,"ssss",$cmp,$date,$reg,);
                        
                        mysqli_stmt_execute($stmt);
                        header("location: ../assets/html/meddesh.php");
                      exit();
                    }   
}
else 
    {
    header("location: ../assets/html/reponse.php");
                              exit();
    }

?>