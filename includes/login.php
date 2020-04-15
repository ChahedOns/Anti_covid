<?php

    if (isset($_POST['login']))
    {
        require 'database.php';
        $mail= $_POST['email'];
        $pwd= $_POST['pwd'];
        
            //bech nchoufooo est ce que les données mawjoudin fl base wale!
            $r =" SELECT email_user from users where email_user='$mail'";
            $stmt = mysqli_stmt_init($conn);
            if ( !mysqli_stmt_prepare($stmt,$r))
            {
                
                header("location: ../assets/html/auth.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"s",$mail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result))
                
                {   
                     $pwdcheck = password_verify ($pwd,$row['pw_user']);
                        if($pwdcheck == false){
                            header("location: ../assets/html/auth.php?error=sqlerror");                
                                        exit();
                        }
                        else{
                            session_start();
                            $_SESSION['id_user'] = $row['id_user'];
                            $_SESSION['email_user'] = $row['email_user'];

                            header("location: ../assets/html/auth.php?succes=done");
                         exit();


                        }
                    }
                else 
                    {
                     header("location: ../assets/html/auth.php?error=nouser");
                    exit();
                    }
                
            }
    }

    
    else
    {
        header("location: ../assets/html/auth.html");
        exit();
    }
?>