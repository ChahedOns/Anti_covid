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

<body style="background-color: rgb(255, 253, 253);">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-10">
        <a href="index.php">
            <img src="assets//img/logo.png" width="70px">
        </a>
        <a class="navbar-brand" href="index.php">Anti covid-army</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ">
                 

            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>

            </form>
            <?php
            if(isset($_SESSION['pw_user']))
            {
            echo '<form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/logout.php">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout">Se déconcter</button>
            </form> ';
            }
            else{
            echo '<form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/auth.php">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="login">Se connecter</button>
            </form>
            <form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/inscriptot.php">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="insci">inscription</button>
            </form>';}
            ?>
        </div>
    </nav>
    <header>

        <div class="jumbotron" style="background-image: url('assets/img/8.jpeg');height: 100vh;background-repeat: no-repeat;
        background-size:cover;">
            <br><br>
            <h1 class="display-3" style="color:rgb(51, 51, 51)">Asslema ,<br>Sahtek w sahet bledek <br>bin ydik !
            </h1>

            <p class="lead">
                <hr>
                <a class="btn btn-danger btn-lg" href="#" role="button">Tala 3la Statistiques</a>
            </p>
        </div>
        <br>
        <br><br><br><br>
        <div style="background-color:rgb(51, 51, 51);">
            <table " id=" tab" class="col-md-12">
                <tbody>
                    <tr>
                        <td class="display-4"> Confirmées</td>

                        <td class="display-4">Morts</td>

                        <td class="display-4">Gerir</td>
                    </tr>
                    <tr>

                        <td class="compteur display-4" id="cc"><b nbcc="10">0</b></td>


                        <td class="compteur display-4" id="mr"><b nbmr="0">0</b></td>

                        <td class="compteur display-4" id="gr"><b nbgr="0">0</b></td>

                    </tr>
                </tbody>
            </table>

            <br>
            <p class="display-4" style="color:whitesmoke;text-transform: uppercase;text-align: center;"><strong>suivis
                    des cas
                    contaminées de coronavirus en Tunisie.
                </strong></p>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <table class="col-md-12" style="background-color: black;">
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
    </header>
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