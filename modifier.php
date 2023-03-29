<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // DATABASE CONNECTION
        include_once("connexion.php");
        // WE GET THE ID IN THE URL
        $id = $_GET['id'];
        // QUERY TO DISPLAY THE EMPLOYEE
        $req = mysqli_query($con, "SELECT * FROM employe WHERE id = $id");
        $row = mysqli_fetch_assoc($req);

        // VERIFY IF THE BUTTON HAS BEEN CLICKED
        if(isset($_POST['button'])){
            // EXTRACT THE VARIABLES
            extract($_POST);
            // VERIFY IF ALL THE FIELDS ARE FILLED
            if(!empty($nom) && !empty($prenom) && !empty($age)){
                // UPPERCASE THE NAME AND CAPITALIZE THE FIRST NAME
                $nom = strtoupper($nom);
                $prenom = ucwords(strtolower($prenom));
                // UPDATE QUERY
                $req = mysqli_query($con, "UPDATE employe SET nom = '$nom', prenom = '$prenom', age = '$age' WHERE id = $id");
                // IF REQUEST SUCCESS -> REDIRECTION TO THE INDEX PAGE
                if($req){
                    header("location:index.php");
                }else{
                    $message = "Employé non modifié";
                }
            }else{
                $message = "Veuillez remplir tous les champs !";
            }
        }
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png">Retour</a>
        <h2>Modifier l'employé : <?=$row['nom']?></h2>
        <p class="erreur_message">
            <?php
                // IF THE VARIABLE EXISTS -> DISPLAY THE ERROR MESSAGE
                if(isset($message)){
                    echo $message;
                }
            ?>
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="<?=$row['nom']?>">
            <label>Prénom</label>
            <input type="text" name="prenom" value="<?=$row['prenom']?>">
            <label>Âge</label>
            <input type="number" name="age" value="<?=$row['age']?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>