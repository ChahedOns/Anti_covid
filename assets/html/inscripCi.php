<?php
    session_start();

?>
<!DOCTYPE html>

<head>
    <title>inscription </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/theme/cosmo.min.css">
    <link rel="stylesheet" href="../css/theme/bootstrap.min.css ">
    <link rel="stylesheet" href="../css/theme/cosmo.min.css">
    <link rel="stylesheet" href="../css/theme/layout.css ">
    <link rel="stylesheet" href="../css/theme/font-awesome-ie7.css">
    <link rel="stylesheet" href="../css/theme/font-awesome.css">
    <link rel="stylesheet" href="../css/theme/font-awesome-ie7.min.css">
    <link rel="stylesheet" href="../css/theme/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mb-10">
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
                    <a class="nav-link " href="reps.php">Réponses <span class="sr-only">(current)</span> </a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" method="POST" action="assets/html/auth.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit" name="login">Se connecter</button>
            </form>

        </div>
    </nav>
    <div class="container">
        <!-- Material form register -->
        <div class="card">



            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="../../includes/inscrip.php" class="col-md-6" method="POST">
                    <p class="display-3" style="color: rgb(221, 27, 27);"> Fiche de rensignement </p>
                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form mt-4">
                                <label for="materialRegisterFormFirstName" style="color: rgb(22, 21, 21);">Nom et
                                    prénom</label>
                                <input type="text" id="materialRegisterFormFirstName" class="form-control" name="np" >

                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form mt-4">
                                <label for="materialRegisterFormLastName"
                                    style="color: rgb(22, 21, 21);">Adresse</label>
                                <input type="text" id="materialRegisterFormLastName" class="form-control" name="adr" >

                            </div>
                        </div>
                    </div>
                    <!--Select -->
                    <DIV>
                        <label for="materialRegisterFormFirstName" style="color: rgb(22, 21, 21);">votre région</label>
                        <select class="browser-default custom-select mb-4" id="select" name="reg" >
                            <option value="" disabled="" selected="">Choisir votre région </option>
                            <option value="1">Tunis</option>
                            <option value="2">Ariana</option> 
                            <option value="3">Ben Arous </option>
                            <option value="4">Manouba </option>
                            <option value="5">Bizert </option>
                            <option value="6">Beja </option>
                            <option value="7">Kef </option>
                            <option value="8">Nabeul</option>
                            <option value="9">Soussa </option>
                            <option value="10">Mahdia </option>
                            <option value="11">Mounastir </option>
                            <option value="12">Sfax </option>
                            <option value="13">Mednin</option>
                            <option value="14">Kairaouen</option>
                            <option value="15">Gasrine</option>
                            <option value="16">Gabes </option>
                            <option value="17">Jandouba </option>
                            <option value="18">Gafsa </option>
                            <option value="19">Sidi Bouzid </option>
                            <option value="20">Tataouin </option>
                            <option value="21">Seliana </option>
                            <option value="22">Gbeli</option>
                            <option value="23">Touzeur</option>
                            <option value="24">Zaghouan</option>
                        </select>
                    </DIV>
                     <!--Sexe-->
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="sexe"
                            class="custom-control-input" value="H">
                        <label class="custom-control-label" for="customRadioInline1">Homme</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="sexe"
                            class="custom-control-input" value="F" >
                        <label class="custom-control-label" for="customRadioInline2">Femme</label>
                    </div>
                    <!-- Num telephone-->
                    <div class="md-form mt-4">
                        <label for="materialRegisterFormPhone" style="color: rgb(22, 21, 21);">Votre numéro de
                            téléphone</label>
                        <input type="text" id="materialRegisterFormPhone" class="form-control"
                            aria-describedby="materialRegisterFormPhoneHelpBlock" name="ntel">

                        <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            C'est obligatoire pour les cad d'urgence
                        </small>
                    </div>
                    <!--Age  -->
                    <div class="md-form mt-4">
                        <label for="materialRegisterFormFirstName" style="color: rgb(22, 21, 21);">Votre
                            age </label>
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="age">

                    </div>
                   
                    <!-- E-mail -->
                    <div class="md-form mt-4">
                        <label for="materialRegisterFormEmail" style="color: rgb(22, 21, 21);"
                            name="email">E-mail</label>
                        <input type="email" id="materialRegisterFormEmail" class="form-control" name="email" >

                    </div>

                    <!-- Password -->
                    <div class="md-form mt-4">
                        <label for="materialRegisterFormPassword" style="color: rgb(22, 21, 21);" name="mdp">Mot de
                            passe </label>
                        <input type="password" id="materialRegisterFormPassword" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock" name="mdp">

                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"
                            name='inscripC'>
                            Au moins 8 caractéres et 1 Numérique.
                        </small>
                        <div class="md-form mt-4">
                    
                            <input type="password" id="materialRegisterFormPassword" class="form-control"
                                aria-describedby="materialRegisterFormPasswordHelpBlock" name="mdpr" >

                            <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"
                                name='inscripC'>
                                Répéter votre mot de passe
                            </small>
                        </div>



                        <!-- Newsletter 
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                        <label class="form-check-label" for="materialRegisterFormNewsletter"
                            style="color: rgb(22, 21, 21);">Subscribe to our newsletter</label>
                    </div>-->

                        <!-- Sign up button -->
                        <button class="btn  btn-danger btn-rounded btn-block my-4 waves-effect z-depth-0"
                            type="submit" name="okc">Sign
                            in</button>

                        <!-- Social register 
                    <p>or sign up with:</p>

                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fab fa-github"></i>
                    </a>-->

                        <hr>

                        <!-- Terms of service 
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a>-->

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form register -->
    </div>

</body>

</html>