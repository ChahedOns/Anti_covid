
<!DOCTYPE html>

<head>
    <title>inscription</title>
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

<body class=" view bg-transparent
" style="background-image: url('../img/5.jpg');height: 100vh;background-repeat: no-repeat; background-size: cover;
             background-position:center;">
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

            </form>
            <form class="form-inline my-2 my-lg-0" method="POST" action="auth.php">
                <button class="btn btn-danger my-2 my-sm-0" type="submit" name="login">Se connecter</button>
            </form>
            <form>

            </form>
            <form class="form-inline my-2 my-lg-0" method="POST" action="../../includes/logout.php">
                <button class="btn btn-danger my-2 my-sm-0" type="submit" name="logout">Déconnecter</button>
            </form>
        </div>
    </nav>
    <div>
        <div id="box" style="background-color :white">
            

                <p class="h4 mb-4 text-center display-4">Priére de valider votre statue sur notre platform </p>
                <p class="display-4 text-center">Vous êtes un<strong> MEDECIN</strong> Ou bien<strong> SIMPLE CITOIYANT
                    </strong></p>
                <table  class="col-md-12">
                    <tr>
                        <td >
                            <form method="POST" action="inscripMe.php">
                                <button class="btn btn-danger btn-block mb-100 " type="submit">Medeçin</button>
                            </form>
                        </td>
                        <td >
                            <form method="POST" action="inscripCi.php">
                                <button class="btn btn-danger btn-block mb-100 " type="submit" width="50px"> citoiyant</button>
                            </form>
                        </td>

                    </tr>
                </table>
            
        </div>
    </div>

    </div>
</body>

</html>