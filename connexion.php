<?php
    // DATABASE CONNECTION
    $con = mysqli_connect("localhost", "root", "root", "entreprise");
    if(!$con){
        echo "Vous n'êtes pas connecté à la base de données.";
    }
?>