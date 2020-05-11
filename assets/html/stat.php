<?php
    session_start();

?>
<!doctype html>

<head>
<meta charset="utf-8">
    <title>Statistiques </title>
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

<body class="bg-trasparent "style=" background-image:url('../img/15.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;height: 50%; background-attachment: fixed">

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent sticky-top mb-10">
        <a class="navbar-brand" href="../../index.php">Anti covid 19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link " href="interact.php">Interactions <span class="sr-only">(current)</span> </a>
                </li><li class="nav-item">
                    <a class="nav-link " href="reps.php">Réponses <span class="sr-only">(current)</span></a>
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
                    <button class="btn btn-btn-light bg-light my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
                    </form>';
                }
                else{
                echo  ' <form class="form-inline my-2 my-lg-0" method="POST" action="patdesh.php">
                <button class="btn  btn-btn-light bg-light my-2 my-sm-0" type="submit" name="logout">'.$_SESSION['email_user'].'</button>
                </form>';}
            }
            echo '
             <form class="form-inline my-2 my-lg-0" method="POST" action="../../includes/logout.php">
            <button class="btn  btn-btn-light bg-light my-2 my-sm-0" type="submit" name="logout">Se déconcter</button>
            </form> ';
            }
            else{
            echo ' <form class="form-inline my-2 my-lg-0" method="POST" action="auth.php">
            <button class="btn  btn-btn-light bg-light my-2 my-sm-0" type="submit" name="login">Se connecter</button>
            </form>
            <form class="form-inline my-2 my-lg-0" method="POST" action="inscriptot.php">
            <button class="btn  btn-btn-light bg-light my-2 my-sm-0" type="submit" name="insci">inscription</button>
            </form> ';}
            ?>
            
        </div>
    </nav>
    
  <div class="container "style="background-color:transparent;color:gray">
  <div class="card border-light "style="background-color:rgba(243, 242, 242, 0.616)">
            <table  id=" tab" class="col-md-12">
                <tbody>
                    <tr>
                        <td class="display-4"style="color:gray;" > Confirmées</td>

                        <td class="display-4" style="color:gray;">Morts</td>

                        <td class="display-4"style="color:gray;">Gerir</td>
                    </tr>
                    <tr>

                        <td class="compteur display-4" id="cc"><b nbcc="10">0</b></td>


                        <td class="compteur display-4" id="mr"><b nbmr="20">0</b></td>

                        <td class="compteur display-4" id="gr"><b nbgr="20">0</b></td>

                    </tr>
                </tbody>
            </table>
            
            <br>
            <p class="display-4" style="color:gray;text-transform: uppercase;text-align: center;"><strong>suivis
                    des cas
                    contaminées de coronavirus en Tunisie.
                </strong></p>
                </div></div>
                <br> <br>
                <div class="container "style="background-color:whitesmoke;color:gray">
      <p ><h3 class="display-2"style="color:red">La Tunisie et lecture en chiffre<h3>
En se basant sur les autres pays affectés, le nombre total de cas infectés en Tunisie est de 20 infectés par la COVID-19  (les cas officiels) mais il est impératif de connaître le nombre des cas réels. Il faut souligner ici que le virus se propageait sans être détecté depuis des semaines.

À première vue, en utilisant les données collectées et les ratios des données fiables nous avons créé un modèle qui estime le nombre de cas dans les semaines prochaines :
<ul>
<li style="color:red">Vrais cas probables aujourd’hui 44</li>
<li style="color:red">Vrais cas probables dans une semaine 476</li></ul>
 Dans ces conditions, il faut signaler que nous allons arriver à 2000 cas probables dans deux semaines et plus de 35000 cas dans un mois. Il semblerait que c’est une estimation alarmante pour la Tunisie !

Par ailleurs, le but de cet article sur COVID-19 est de regrouper les recherches existantes, de rassembler les données pertinentes et de permettre aux lecteurs de comprendre les données publiées et les premières recherches sur l’épidémie de coronavirus.

Les décès et les infections dus au coronavirus dans le monde ont dépassé ceux de l’intérieur de la Chine pour la première fois depuis le début de l’épidémie.

Maintenant la question qui se pose est peut-on faire des estimations de cas de Coronavirus sur le court et moyen terme ? Et ce en se basant sur des données antérieurs ?

Les infections dans le monde ont atteint plus de 87 000, selon le traqueur de l’université Johns Hopkins, alors que les cas en Chine se sont élevés à 80 860, selon la Commission nationale chinoise de la santé.

Mais à bien considérer les choses, le centre d’infection le plus important en dehors de la Chine est en Italie, où il y a près de <stong>25 000</stong> infections confirmées et plus de <stong>1 800 </stong>décès.</p></p>
      <br><br>
  

              
<img src="../img/35.png"width="100%"">
            
    <h3 class="display-2"style="color:red">Le début d’épidémie</h3>       
    <p>
    Le 31 décembre 2019, le bureau chinois de l’Organisation mondiale de la santé (OMS) a entendu les premiers rapports d’un virus inconnu derrière un certain nombre de cas de pneumonie à Wuhan, une ville de l’est de 
    la Chine comptant plus de 11 millions d’habitants. COVID-19 a touché ensuite environ 80 969 personnes en Chine continentale, tuant 3 162 personnes.

La province du Hubei a été la plus 
durement touchée par COVID-19, la plupart des infections se produisant à Wuhan même.

Mais il faut souligner que la Corée du Sud est 
probablement une aberration statistique. La pile croissante de données a permis aux autorités de tester rapidement la maladie et de suivre sa propagation rapide Lors d’épidémies précédentes, des retards dans la collecte et le suivi ont entrainé des temps de réponse lents.
            </p>
            <img src="../img/3.png"width="100%">
            <br><br>
            <h3 class="display-4"style="color:red">La suite alarmante</h3>       
    <p>
    En dehors de la Chine,
     l’Italie a enregistré le plus grand nombre de cas, avec 10 149 personnes infectées confirmées, principalement dans le nord du pays. Le pays tout entier est désormais verrouillé après la prolongation de la quarantaine couvrant le nord du pays le 9 mars. Puis le Royaume unis avec un nombre total de cas qui s’élevait à 1 372, contre 1 140 à la même heure samedi. Ensuite la France qui a compté dimanche soir 127 morts et 5 423 cas de contamination depuis le début de l’épidémie. </p>
     <img src="../img/38.png"width="100%">
             <p class="display-4">En résumé, il est temps pour un wake up all  et arrêter de banaliser le COVID-19 ! Suivez les instructions gouvernementales car les chiffres sont vraiment alarmants !</p></div>
           
     <!--jQuery library-->
    <script src="../js/jquery.min.js"></script>
<script src="../js/animation.js"></script>
    <!-- Popper JS Library -->
    <script src="../js/popper.min.js"></script>

    <!--Bootstrap JS library-->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>