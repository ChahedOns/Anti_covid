<?php
error_reporting(0);

//to check if the user have really check the sing up button to enter into this page ! 
if(isset($_POST['ok']))
{
    require 'database.php';
    $np = $_POST['np'];
    $adr = $_POST['adr'];
    $reg = $_POST['reg'];
    $tel = $_POST['ntel'];
    $sexe = $_POST['sexe'];
    $sp = $_POST['sp'];
    $poste = $_POST['poste'];
    $mail = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdpr = $_POST['mdpr'];
    //Champs vide redirection vers la page d'inscription 
        
        if ($mdp !== $mdpr){
            header("location: ../assets/html/inscripMe.php?error=PasswordError&np=".$np."adr=".$adr."ntel=".$tel."sexe=".$sexe."sp=".$sp."poste=".$poste."email=".$mail);
            exit();
        }
        else 
        {
            $r="SELECT email FROM medecin WHERE email ='$mail'" ;
            $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $r))
            {
            
                header("location: ../assets/html/inscripMe.php?error=sqlerror1");
                exit();
            }
          else
            {
                mysqli_stmt_bind_param($stmt,"s",$mail);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result = mysqli_stmt_num_rows($stmt);
                if ($result > 0)
                {
                    header("location: ../assets/html/inscripMe.php?error=emailTaken");
                    exit();
                }
                else
                {
                    //le mdp doit être codé!
                     $hachedmdp = password_hash($mdp, PASSWORD_DEFAULT);
                    $r="INSERT INTO users (email_user,pw_user) VALUES ('$mail','$hachedmdp')";
                     $stmt = mysqli_stmt_init($conn);
                      if (!mysqli_stmt_prepare($stmt,$r))
                     {
                         echo mysqli_stmt_error($stmt);
                         exit();
                     }
                     else
                 
                     {
                         mysqli_stmt_bind_param ($stmt,"ss",$mail,$hachedmdp);
                         mysqli_stmt_execute($stmt);
                     
                     }    
                   
                 $r="INSERT INTO medecin (Np_med,Adr,reg,Ntel_m,sexe_m,spec,poste,email,mdp_med) VALUES ('$np' ,'$adr' , '$reg','$tel','$sexe','$sp','$poste','$mail','$hachedmdp')";
                
                    $stmt = mysqli_stmt_init($conn);
                 if(! mysqli_stmt_prepare($stmt,$r) )
                    {
                        echo mysqli_stmt_error($stmt);
                        exit();
                    }
                  else
                    {
                        mysqli_stmt_bind_param ($stmt,"sssssssss",$np,$adr,$reg,$tel,$sexe,$sp,$poste,$mail,$hachedmdp);
                        
                        mysqli_stmt_execute($stmt);
                        header("location: ../assets/html/inscripMe.php?succes=done");
                      exit();
                    }   
                }
            }
            
            
    
        }
        msqli_stmt_close($stmt);
            mysqli_close($conn);

    }
    else 
    {
    header("location: ../assets/html/inscripMe.php");
                              exit();
    }
?>