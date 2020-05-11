<?php
    session_start();

?>
<!doctype html>

<head>
<meta charset="utf-8">
    <title>Mon compte</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/theme/cosmo.min.css">
    <link rel="stylesheet" href="../css/theme/bootstrap.min.css ">
    <link rel="stylesheet" href="../css/theme/cosmo.min.css">
    <link rel="stylesheet" href="../css/theme/layout.css ">
    <link rel="stylesheet" href="../css/theme/font-awesome-ie7.css">
    <link rel="stylesheet" href="../css/theme/font-awesome.css">
    <link rel="stylesheet" href="../css/theme/font-awesome-ie7.min.css">
    <link rel="stylesheet" href="../css/theme/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

</head>

<body class="bg-trasparent "style=" background-image:url('../img/33.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;height: 50%; background-attachment: fixed">

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mb-10">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ">
                    <a class="nav-link " href="../../index.php">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="interact.php">Interaction <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="reps.php">Réponses<span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stat.php">Statistique </a>
                </li>
           
            </ul>

            
             <form class="form-inline my-2 my-lg-0" method="POST" action="../../includes/logout.php">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="logout">Se déconecter</button>
            </form> 
        </div>
    </nav>
    <div class="jumbotron" style="background-color:transparent">
            <br><br>
            

            
    </div>
    <br><br> <br><br> <br><br>
<div class="container card border-light"  style="background-color:white">
<h1 class="display-2" style="color:gray;">Medecin Dashbord
            </h1>
  <table class="table table-hover table-light ">
    <thead>
      <tr>
        <th class="col-md-4"scope="col">Date du réponse</th>
        <th class="col-md-4"scope="col">Sujet</th>
        <th class="col-md-4"scope="col">Votre Réponse </th>
        
        
        
      </tr>
    </thead>
    <tbody>

      <?php 
require ("../../includes/database.php");
error_reporting(E_ALL);
    
    $user=$_SESSION['email_user'];
    $r="SELECT id_user FROM users WHERE email_user='$user'";
    $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$r))
        
                echo mysl_error();
        
        else 
        {
          //mysqli_stmt_bind_param($stmt,"s",$mail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_array($result)){
               $id=$row['id_user'];
               
            }
            else echo"erreur";                    
        }   

        $r ="SELECT * FROM reponse where user_rep='$id'";
        if(!mysqli_stmt_prepare($stmt,$r))
        {
            echo mysl_error();
            
        }
        else 
        {
            //mysqli_stmt_bind_param($stmt,"i",$regmed);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
                while($row2 = mysqli_fetch_assoc($result))
                    {
                      echo '<tr>
                        <td class="col-md-4"scope="row">'.$row2['date_rep'].'</th>
                        <td class="col-md-4">'.$row2['sujet_rep'].'</td>
                        <td  class="col-md-4">'.$row2['rep'].'</td>
                        
                        </tr>';
                       
                       
                    }
                   
        }
        
    ?>
    
        

    </tbody>
    </table>
</div>
  
    <!--jQuery library-->
    <script src="../js/jquery.min.js"></script>

      <!-- Popper JS Library -->
    <script src="../js/popper.min.js"></script>

    <!--Bootstrap JS library-->
      <script src="../js/bootstrap.min.js"></script>
    </body>
    </html>