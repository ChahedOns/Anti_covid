<?php
    session_start();

?>
<!DOCTYPE html>

<head>
    <title>Demande</title>
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
                    <a class="nav-link" href="stat.php">Statistique </a>
                </li>
           
            </ul>

            <?php echo '<div>
            <form class="form-inline my-2 my-lg-0" method="POST" action="meddesh.php">
            <button class="btn btn-light   my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
            </form> </div>
             <form class="form-inline my-2 my-lg-0" method="POST" action="../../includes/logout.php">
            <button class="btn btn-light  my-2 my-sm-0" type="submit" name="logout">Se déconecter</button>
            </form>
            
        </div>';?>
    </nav>
    
    
        <!-- Material form register -->
        

        <div class="jumbotron" style="background-image: url('../img/27.jpg');height: 50vh;background-repeat: no-repeat;
        background-size:cover; background-position:center;">
        
            <h1 class="display-3" style="color:white;">Remettre votre demande sur notre platform</h1>
            <div class="container"><div class="card">

            
        

            <!--Card content-->
            <div class="card-body col-md-6px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="../../includes/ajoutdem.php" class="col-md-6" method="POST">
                <br><br> <hr><br><br><br><br>
                <div class="md-form mt-4">
                        <label for="materialRegisterFormEmail" style="color: rgb(22, 21, 21);"
                            >E-mail</label>
                        <input type="email" id="materialRegisterFormEmail" class="form-control" name="mail">

                    </div>
                    <div class="md-form mt-4">
                        <label for="materialRegisterFormEmail" style="color: rgb(22, 21, 21);"
                            >Sujet</label>
                        <input type="text" id="materialRegisterFormEmail" class="form-control" name="suj">

                    </div>
                <div class="form-group">
                         <br>
                        <label for="exampleTextarea">Votre question</label>
                        <textarea class="form-control" id="exampleTextarea" rows="6"name="compte"></textarea>
                    </div>
                    <!--Select -->
                    <DIV>
                        <label for="materialRegisterFormFirstName" style="color: rgb(22, 21, 21);">votre région</label>
                        <select class="browser-default custom-select mb-4" id="select" name="reg">
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
                    <div class="md-form mt-4">
                                <label for="materialRegisterFormFirstName" style="color: rgb(22, 21, 21);"name="date">Date</label>
                                <input type="date" id="materialRegisterFormFirstName" class="form-control" name="date">

                            </div>
                    <!-- Sign up button -->
                    <button class="btn  btn-secondary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"name="ok">Envoyer La demande</button>

                
                  

                    <hr>

                  
                </form>
                <!-- Form -->

            </div>

            </div></div>
        <!-- Material form register -->
    </div>

</body>

</html>