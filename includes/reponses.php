<?php

error_reporting(E_ALL);
require 'database.php';
$r ="SELECT * FROM reponse ";
$stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$r)){
        echo mysl_error();
        exit();
    }
    else {
        //mysqli_stmt_bind_param($stmt,"i",$regmed);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
            while($row2 = mysqli_fetch_assoc($result)){
            echo'<div class="container">
            <table border="0px" style="table-position : center;" class="col-md-8"><tr><div class="col-md-12 card" style="height: 40vh">
                <div class="card-body">
                <h4 class="card-title display-4" ><strong>'.$row2["sujet_rep"].'</strong></h4>
                <h6 class="card-subtitle mb-2 text"style="color:black">'.$row2["date_rep"].'</h6>
                <p class="card-text"><strong>'.$row2["rep"].'</strong></p>
                <form method="post"action="../html/ask.php"><button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="logout">Poser votre question</button></form>
                
                </div></tr></table></div><br>';}
             
    }
?>
