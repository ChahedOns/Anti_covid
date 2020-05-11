<?php
error_reporting(E_ALL);
/*
$servername ="localhost";
$DBusername ="root";
$DBpassword = "";
$DBName = "covid_19";
$conn = mysqli_connect($servername, $DBusername , $DBpassword , $DBName);
if ( !$conn)
 die("Connection erronée".mysqli_connect_error());
    $mail= $_POST['email'];
    $pwd= $_POST['pwd'];
    $result = mysqli_query ("select * FROM users WHERE  where email_user='$mail' ",$conn)
            or die ("failed to query database".mysql_error());
           $r= mysqli_fetch_array($result) ;
           if ($r['email_user'] == $mail &&  password_verify ($pwd,$r['pw_user'])== true )
            echo "Login success";
            else
                echo "eRReur";
    
*/
  
        require 'database.php';
        $mail= $_POST['email'];
        $pwd= $_POST['pwd'];
        
            //bech nchoufooo est ce que les données mawjoudin fl base wale!
            $r =" SELECT * from users where email_user='$mail'";
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
                if ($row = mysqli_fetch_array($result))
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


                            
                            $r =" SELECT * from medecin where email ='$mail'";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$r)){
                                    echo mysl_error();
                            }
                            else {
                            mysqli_stmt_bind_param($stmt,"s",$mail);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                                if($row = mysqli_fetch_array($result)){
                                    header("location: ../assets/html/meddesh.php");
                                }
                                else
                                header("location: ../assets/html/patdesh.php");
                            }
                         exit();


                        }
                    }
                else 
                    {   
                        header("location: ../assets/html/auth.php?error=nouser");
                    exit();
                    }
                
            }
    



?>