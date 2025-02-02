<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Formulaire</title>

</head>
<body>

<form method = "post" action = "test.php">
    <div>
        <img src="./asset/image/Ordinateur.jpg">
    </div>
    <div>
        <br><h2>Contactez-moi</h2>
        <label for = "prenom">Prenom :</label>
        <input id = "prenom" type = "text" name = "prenom" required>
        

        <br><br><label for = "nom">Nom :</label>
        <input id = nom type = "text" name = "nom" required>


        <br><br><label for = "email">Email :</label>
        <input type = "email" name = "email" required>

        <br><br>

        <label for = "message">Message :</label>
        <textarea id = "message" name = "message"></textarea><br><br>

        <button type = "submit">Soumettre</button>
    </div>
   

</form>


   

</body>
</html>