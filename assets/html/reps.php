<?php
    session_start();

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Réponses</title>
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
<body style="background-image: url('../img/25.png');background-position: center;
  background-repeat: no-repeat;
  background-size: cover;height: 50%; background-attachment: fixed;
                    ">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mb-10">
        <a class="navbar-brand" href="../../index.php">Anti covid 19</a>
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
                    <a class="nav-link" href="interact.php">Interactions </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stat.php">Statistique </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ask.php"> Demender </a>
                </li>
           
            </ul>
    <?php
            
            if(isset($_SESSION['email_user'] ))
            {
            
            require '../../includes/database.php';
            $mail=$_SESSION['email_user'];
            $r =" SELECT * from medecin where email ='$mail'";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$r)){
                    echo mysl_error();
            }
            else {
            
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_array($result)){
                    echo ' <form class="form-inline my-2 my-lg-0" method="POST" action="meddesh.php">
                    <button class="btn btn-light my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
                    </form>';
                }
                else{
                echo  ' <form class="form-inline my-2 my-lg-0" method="POST" action="patdesh.php">
                <button class="btn btn-light my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
                </form>';}
            }
            echo '
             <form class="form-inline my-2 my-lg-0" method="POST" action="../../includes/logout.php">
            <button class="btn btn-light my-2 my-sm-0" type="submit" name="logout">Se déconcter</button>
            </form> ';
            }
            else{
            echo ' <form class="form-inline my-2 my-lg-0" method="POST" action="auth.php">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="login">Se connecter</button>
            </form>
            <form class="form-inline my-2 my-lg-0" method="POST" action="inscriptot.php">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="insci">inscription</button>
            </form> ';}
    ?>
            
        </div>
</nav>
 
    <div class="container view bg-transparent
        " >
    
    <?php
            
            require '../../includes/reponses.php';
            
    ?>
  


            </div>  
<script src="../js/jquery.min.js"></script>

<!-- Popper JS Library -->
<script src="../js/popper.min.js"></script>
  
<!--Bootstrap JS library-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/layout.js"></script>
</body>
</html>