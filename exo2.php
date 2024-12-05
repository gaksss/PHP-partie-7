<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    ?>
    <form action="./user.php?nom=&prenom=" method="post">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" id="nom" required maxlength="10">
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom" id="prenom" required maxlength="10">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>