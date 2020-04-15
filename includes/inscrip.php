<?php
error_reporting(0);

//to check if the user have really check the sing up button to enter into this page ! 
if(isset($_POST['okc']))
{
    require 'database.php';
    $np = $_POST['np'];
    $adr = $_POST['adr'];
    $reg = $_POST['reg'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['ntel'];
    $age =$_POST['age'];
    $mail = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdpr = $_POST['mdpr'];
    
        
        if ($mdp !== $mdpr){
            header("location: ../assets/html/inscripCi.html?error=PasswordError&np=".$np."adr=".$adr."ntel=".$tel."age=".$age."sexe=".$sexe."email=".$mail);
            exit();
        }
        else {
          $r="SELECT Email_pat FROM patient WHERE Email_pat ='$mail'" ;
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $r))
          {
            
            header("location: ../assets/html/inscripCi.php?error=sqlerror1");
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
                        header("location: ../assets/html/inscripCi.php?error=emailTaken");
                        exit();
                    }
                    else
                    {  //le mdp doit être codé!
                     $hachedmdp = password_hash($mdp, PASSWORD_DEFAULT);
                     
                     $r="INSERT INTO users (email_user,pw_user) VALUES ('$mail','$hachedmdp')";
                     $stmt = mysqli_stmt_init($conn);
                      if (!mysqli_stmt_prepare($stmt,$r))
                     {
                         
                         exit();
                     }
                     else
                 
                     {
                         mysqli_stmt_bind_param ($stmt,"s,s",$mail,$hachedmdp);
                         mysqli_stmt_execute($stmt);
                     
                     }    
                        $r="INSERT INTO patient (Np_pat,Adr_pat,reg_pat,Ntel_p,Age,sexe_p,Email_pat,Mdp_pat) VALUES ('$np' ,'$adr' , '$reg','$tel','$age','$sexe','$mail','$hachedmdp')";
                    
                        $stmt = mysqli_stmt_init($conn);
                        if(! mysqli_stmt_prepare($stmt,$r)  )
                        {
                            echo mysqli_stmt_error($stmt);
                            exit();
                         }
                        else
                        {
                            mysqli_stmt_bind_param ($stmt,"s,s,s,s,s,s,s,s",$np,$adr,$reg,$tel,$age,$sexe,$mail,$hachedmdp);
                            mysqli_stmt_execute($stmt);
                            header("location: ../assets/html/inscripCi.php?succes=done");
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
        header("location: ../assets/html/inscripCi.php");
        exit();
    }
?>