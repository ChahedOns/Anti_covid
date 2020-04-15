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
        <a class="navbar-brand" href="#">Code universe </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ">
                    <a class="nav-link " href="#">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Interaction <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reclamer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Statistique </a>
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
        <form>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <br>
              <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                  </div>
                  <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <br>
              <div class="col-md-3 mb-3">
                <label for="validationServer04">State</label>
                <select class="custom-select is-invalid" id="validationServer04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div><br>
              <div class="col-md-3 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div><br>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div><br>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>

<div class="jumbotron ">
    <h1 class="display-3">Hello, great coder ! </h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
        featured content or information.</p>
    <hr class="my-4">


    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>
<table class="container" border="0px">
    <tr>
        <div class="card text-white bg-light  col-md-6 " style="max-width: 40rem;"></div>
        <td>
            <div class="  card-body  ">
                <h4 class="card-title display-5">GoMyCode est la plus grande communauté de développeurs en
                    Afrique
                    et au
                    Moyen-Orient.</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
            </div>
            </div>
        </td>
        <td>
            <div class="card text-white bg-dark ml-md-10 col-md-6 "
                style="max-width: 40rem; background-image: url('../img/1.jpeg'); background-repeat: no-repeat;
                background-attachment: fixed; background-size: cover;">

                <div class="card-body  ">
                    <h4 class="card-title display-5">GoMyCode est la plus grande communauté de développeurs en
                        Afrique et au
                        Moyen-Orient.</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </td>
    </tr>
</table>
</header>
 <!--jQuery library-->
    <script src="../js/jquery.min.js"></script>

    <!-- Popper JS Library -->
    <script src="../js/popper.min.js"></script>

    <!--Bootstrap JS library-->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>