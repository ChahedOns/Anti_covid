<?php
    session_start();

?>
<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Connextion </title>
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

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-10">
        <a href="../../index.php">
            <img src="../img/logo.png" width="70px">
        </a>
        
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
                    <a class="nav-link" href="reclamer.php">Reclamer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stat.php">Statistique </a>
                </li>
           
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                <button class="btn btn-primary my-2 my-sm-0" type="submit">sing up</button>

            </form>
        </div>
    </nav>
    <header>

        <!-- Full Page Intro -->
        <div class=" view bg-transparent
        " style="background-image: url('../img/5.jpg');height: 100vh;background-repeat: no-repeat; background-size: 100%;
                     background-position:top top;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row ">
                        <!--Grid column-->
                        <br>
                        <br>

                        <br>
                        <div class="col-md-6 mb-5 white-text text-center text-md-left">
                            <br><br>
                            <br>
                            <br>
                            <br>
                            <h1 style="color: ghostwhite" class="h1-responsive font-weight wow fadeInLeft display-3"
                                data-wow-delay="0.3s"> COVID-19 </h1>
                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                            <h6 style="color: whitesmoke" class="mb-3 wow fadeInLeft" data-wow-delay="0.3s"> </h6>
                            <a style="color: whitesmoke" class="btn btn-outline-white wow fadeInLeft"
                                data-wow-delay="0.3s">La maladie à coronavirus 2019 (COVID-19) est une maladie
                                infectieuse provoquée par un nouveau virus qui n'avait encore jamais été identifié chez
                                l'être humain. </a>

                            <h4 style="color: ghostwhite" class="h1-responsive font-weight wow fadeInLeft "
                                data-wow-delay="0.3s">Si vous voulez être parmis les beneficies de notre Plateform et
                                vous n'avez pas un
                                compte <a href="inscrip.php"> s'inscrire</a> </h4>
                            <a style="color: whitesmoke" class="btn btn-outline-white wow fadeInLeft"
                                data-wow-delay="0.3s">Ce virus provoque une maladie respiratoire (analogue à la grippe)
                                avec des symptômes
                                comme la toux, la fièvre et, dans les cas les plus sévères, une pneumonie. On peut s'en
                                protéger en se lavant fréquemment les mains, et en évitant de se toucher le visage.</a>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mb-4">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <!--Form-->
                            <form method="POST" role="form" action="../../includes/login.php" name="f">
                            
                            <div class=" card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 style="color: whitesmoke" class="white-text display-5">
                                            Se connecter:</h3>
                                        <hr class="hr-light">
                                    </div>
                                    <!--Body-->
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <div class="md-form">
                                        <i class="fa fa-user prefix white-text active"></i>
                                        <label style="color: whitesmoke" for="form3" class="active"
                                            name="username">Email</label>
                                        <input style="color: whitesmoke" type="text" id="form3"
                                            class="bg-transparent white-text form-control"name="email">

                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text active"></i>
                                        <label style="color: whitesmoke" for="form4" class="display-6 "
                                            name="password">Mot de Passe </label>
                                        <input style="color: whitesmoke" type="password" id="form4"
                                            class=" bg-transparent white-text form-control" name="pwd">

                                    </div>


                                    <div class="text-center mt-4">
                                        <button class="btn btn-outline-light" type="submit" name="login"> Connecter
                                        </button>
                                        <hr class="hr-light mb-3 mt-4">
                                        <form method="POST" action="../../includes/logout.php">
                                            <button class="btn btn-outline-light" type="submit" name="logout"> déconnecter
                                            </button>
                                        </form>
                                        <div class="inline-ul text-center">

                                            <i class="fa fa-facebook-official white-text"><a
                                                    href="wwww.facebook.com"></a></i>
                                            <i class="fa fa-google-plus white-text"><a
                                                    href="www.googleplus.com"></a></i>
                                            <i class="fa fa-instagram white-text"><a href="www.instagram.com"></a> </i>

                                        </div>

                                    </div>
                                </div>
                        </div>
                        </form>
                        <!--/.Form-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>

    <!--jQuery library-->
    <script src="../js/jquery.min.js"></script>

    <!-- Popper JS Library -->
    <script src="../js/popper.min.js"></script>

    <!--Bootstrap JS library-->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>