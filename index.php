<?php
    session_start();
?>
<!doctype html>

<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/theme/cosmo.min.css">
    <link rel="stylesheet" href="assets/css/theme/bootstrap.min.css ">
    <link rel="stylesheet" href="assets/css/theme/cosmo.min.css">
    <link rel="stylesheet" href="assets/css/theme/layout.css ">
    <link rel="stylesheet" href="assets/css/theme/font-awesome-ie7.css">
    <link rel="stylesheet" href="assets/css/theme/font-awesome.css">
    <link rel="stylesheet" href="assets/css/theme/font-awesome-ie7.min.css">
    <link rel="stylesheet" href="assets/css/theme/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

</head>

<body class="bg-trasparent "style=" background-image:url('assets/img/30.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;height: 50%; background-attachment: fixed">

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-top mb-10">
        <a href="index.php">
            <img src="assets//img/logo.png" width="70px">
        </a>
        <a class="navbar-brand" href="index.php"style="color:white">Anti covid-army</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ">
                 

            </ul>

            
            <?php
            if(isset($_SESSION['email_user'] ))
            {
            
            require 'includes/database.php';
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
                    echo '<div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto"><li class="nav-item active ">
                <a class="nav-link " href="assets/html/interact.php"style="color:white">Interactions <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link " href="assets/html/reps.php"style="color:white">Réponses <span class="sr-only">(current)</span></a>
            </li></ul></div>
             <form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/meddesh.php">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
                    </form> 
           
                
           ';
                }
                else{
                echo  ' <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto"><li class="nav-item active ">
                <a class="nav-link " href="assets/html/interact.php"style="color:white">Interactions <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link " href="assets/html/reps.php" style="color:white">Réponses  <span class="sr-only">(current)</span></a>
            </li></ul></div>
            <form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/patdesh.php">
                <button class="btn btn-danger s my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
                </form> 
                
       ';}
            }
            echo '
             <form class="form-inline my-2 my-lg-0" method="POST" action="includes/logout.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit" name="logout">Se déconecter</button>
            </form> ';
            }
            else{
            echo ' <form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/auth.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit" name="login">Se connecter</button>
            </form>
            <form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/inscriptot.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit" name="insci">inscription</button>
            </form> ';}
            ?>
        </div>
    </nav>
    <header >

        <div class=" jumbotron" height="1500px"style="background-color:transparent ; height: 180vh;background-repeat: no-repeat;
        background-size:cover;">
            <br><br>
            <h1 class="display-3" style="color:white">Asslema ,<br>Sahtek w sahet bledek <br>bin ydik !
            </h1>

            <p class="lead">
                <hr>
                <a class="btn btn-danger btn-lg" href="assets/html/stat.php" role="button">Tala 3la Statistiques</a>
            </p>
        </div></header><br><br>
        <br><br><br><br>
        
        r><br><br>
        
        <br><br><br><br><br>
        <br><br><br><br>
        
        
        
      
        <diV class="container bg-light">
        <div class=" jumbotron " style="background-image:url('assets/img/8.jpeg');background-position: center;
  background-repeat: no-repeat;
  background-size: cover;height: 50%; background-attachment: fixed" >
            <br><br>
            <h1 class="display-3" style="color:gray">
            </h1>

            <p class="lead">
                <hr>
                <br> 
                <br>
                
               
            </p>
        </div>
        <h2 class="display-2 "style="color:gray">Anti-covid19 est</h2>
        <h4 style="color:Gray"><strong>  platform qui permet  au citoiyant de poser n'importe quelles questions au médecins qui vont 
                    aussi repondre a tous les questions . <br>
                    cC'est un moyen pour diffuser l'information et aussi pour sensibiliser les gens a suivre les instructions gouvernementales car les chiffres sont vraiment alarmants !
            </strong></h4>
             <h2 class="display-2 "style="color:red">C'est le tempt ou jamais</h2>
        <h4 style="color:Gray;">Le virus qui entraîne la COVID-19 se transmet ‎principalement par des gouttelettes produites 
            ‎lorsqu’une personne infectée tousse, éternue, ou ‎lors d’une expiration.
            Ces gouttelettes sont trop ‎lourdes pour rester dans l’air 
            et tombent ‎rapidement sur le sol ou sur toute surface proche.‎
            Vous pouvez être infecté en respirant le virus, 
            si ‎vous êtes à proximité d’une personne malade, 
            ou en ‎touchant une surface contaminée puis vos yeux, ‎votre nez ou votre bouche.‎</h4>
       
        <table class="col-md-12 card border-light" >
            <tr>
                <td>
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half "
                        data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="3"></li>
                            <li data-target="#carousel-example-2" data-slide-to="4"></li>
                            <li data-target="#carousel-example-2" data-slide-to="5"></li>

                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block w-60" src="assets/img/11.png" alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive display-4 "
                                        style="color: rgb(255, 255, 255);background-color: rgb(0, 0, 0)"><strong>Aghsel
                                            ydik </strong></h3>
                                    <p style="color: rgb(255, 255, 255);background-color: rgb(0, 0, 0)">Dima w bentidham
                                        barsha marrat f nhar
                                        bel me w
                                        saboun w kenek l barra b gel
                                        déinfectant</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="size: 50px;">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-70" src="assets/img/12.png" alt="Second slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive display-5 " style="color: white;background-color: black">
                                        <strong>Taghsel yeddek minimum 20s </strong></h3>

                                </div>
                            </div>
                            <div class="carousel-item" style="size: 50px;">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-70" src="assets/img/im3.png" alt="Second slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive display-5 " style="color: white;background-color: black">
                                        <strong>Kif taates staamel papier mouchoir w tayachha fi sachet poubelle w
                                            tsakrha mli7 </strong></h3>

                                </div>
                                
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-70" src="assets/img/18.png" alt="Second slide" width="550px">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"
                                        style="color:rgb(255, 255, 255);background-color: rgb(236, 140, 49)">kiif
                                        maandekch
                                        papier
                                    </h3>
                                    <p style="color:rgb(0, 0, 0);background-color: rgb(245, 160, 110)">koh wala a3tes fi
                                        yeddek w kif trawah badel hweyjek w aghsalhom a 30°C.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img src="assets/img/13.jpg" alt="Third slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive "
                                        style="color:rgb(255, 255, 255);background-color: rgb(151, 137, 137);">
                                        <strong>O93ed b3id au
                                            minimum 1.5
                                            mêtre ala la3bed lkol</strong></h3>

                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </td>
                <td></td>
                <td></td>
                <td>
                    <p class="display-3" style="color:white;">kifeh nehmi rouhi mel covid-19 ?</p>
                    <p class="display-5" style="font-size: larger; color: honeydew;">Lmaredh hedha <strong>mo3di
                            barsha</strong> , w fisa3 mayntachar biin laa3bed w tssir l3aadwa bel
                        contact direct bin laabed wala kif nmesso lblayess eli mashom abed mriidh. </p>
                    <p class="display-5">Lazem nltazmou b 9awe3d el saha bch nhafdho 3la sahetna w sahet eli dayrin bina
                        lkol .</p>
                </td>

            </tr>
        </table>
        <br><br>
        <h4 style="color:Gray;">Avec la mise en place d’un numéro vert (80.101.919) et d’un numéro d’appel d’urgence d’aide médicale le 190, un site web vient d’être lancé à l’initiative par la Junior Entreprise ESEN pour permettre de suivre l’évolution de la pandémie du Coronavirus en Tunisie.

Pour rappel le numéro vert 80.101.919 est mis à la disposition de la population pour le signalement des cas suspects d’infection par le Coronavirus.

Le numéro d’appel d’aide médicale SAMU (190) est réservé aux personnes qui pensent être contaminés.</h4>
            </div>
        </div>
    <!--jQuery library-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Popper JS Library -->
    <script src="assets/js/popper.min.js"></script>

    <!--Bootstrap JS library-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/animation.js"></script>
</body>

</html>