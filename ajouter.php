<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // VERIFY IF THE BUTTON HAS BEEN CLICKED
        if(isset($_POST['button'])){
            // EXTRACT THE VARIABLES
            extract($_POST);
            // VERIFY IF ALL THE FIELDS ARE FILLED
            if(!empty($nom) && !empty($prenom) && !empty($age)){
                // DATABASE CONNECTION
                include_once("connexion.php");
                // INSERT QUERY
                $req = mysqli_query($con, "INSERT INTO employe VALUES (NULL, '$nom', '$prenom', '$age')");
                // CLOSE THE CONNECTION
                mysqli_close($con);
                // IF REQUEST SUCCESS -> REDIRECTION TO THE INDEX PAGE
                if($req){
                    header("location:index.php");
                }else{
                    $message = "Employé non ajouté";
                }
            }else{
                $message = "Veuillez remplir tous les champs !";
            }
        }
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png">Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            <?php
                // IF THE VARIABLE EXIST -> DISPLAY THE ERROR MESSAGE
                if(isset($message)){
                    echo $message;
                }
            ?>
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>Âge</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>