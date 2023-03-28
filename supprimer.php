<?php
    // DATABASE CONNECTION
    include_once("connexion.php");
    // ID RECUPERATION IN THE URL
    $id = $_GET['id'];
    // DELETE QUERY
    $req = mysqli_query($con, "DELETE FROM employe WHERE `id` = $id");
    // REDIRECTION TO THE INDEX PAGE
    header("location:index.php");
    // CLOSE THE CONNECTION
    mysqli_close($con);
?>