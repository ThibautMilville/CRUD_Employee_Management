<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="btn_add"><img src="images/plus.png">Ajouter</a>
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
                // INCLUDE THE CONNECTION PAGE
                include_once("connexion.php");
                // REQUEST TO DISPLAY THE EMPLOYEE LIST
                $req = mysqli_query($con, "SELECT * FROM Employe");
                if(mysqli_num_rows($req) == 0){
                    // IF THERE IS NO EMPLOYEE IN THE DATABASEN THEN :
                    echo "Il n'y a pas encore d'employés ajoutés !";
                }else{
                    // ELSE, DISPLAY ALL THE EMPLOYEES
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['age']?></td>
                            <!-- ID OF EMPLOYEE IN THIS LINK -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>