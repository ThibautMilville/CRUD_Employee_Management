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
            <tr>
                <td>Steev</td>
                <td>Johnson</td>
                <td>25 ans</td>
                <td><a href="modifier.php"><img src="images/pen.png"></a></td>
                <td><a href="#"><img src="images/trash.png"></a></td>
            </tr>
        </table>
    </div>
</body>
</html>