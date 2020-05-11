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
                                <a style="color: whitesmoke" class="btn btn-outline-white wow fadeInLeft"
                                data-wow-delay="0.3s">Ce virus provoque une maladie respiratoire (analogue à la grippe)
                                avec des symptômes
                                comme la toux, la fièvre et, dans les cas les plus sévères, une pneumonie. On peut s'en
                                protéger en se lavant fréquemment les mains, et en évitant de se toucher le visage.</a>    
                            <h4 style="color: ghostwhite" class="h1-responsive font-weight wow fadeInLeft "
                                data-wow-delay="0.3s">Si vous voulez être parmis les beneficies de notre Plateform et
                                vous n'avez pas un
                                compte <form method="POST" action="inscriptot.php"><div class="text-center mt-4">
                                        <button class="btn btn-outline-danger" type="submit" name="login"> s'inscrire
                                        </button>
                                        <hr class="hr-light mb-3 mt-4">
                                    </div></form> 
                            
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