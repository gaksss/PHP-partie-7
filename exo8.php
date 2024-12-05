<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    
    <?php

    if (isset($_POST["genre"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["fileupload"])) {
        $genre = $_POST["genre"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $fileUpload = $_POST["fileupload"];
        echo  $genre . " " . $nom . " " . $prenom . " ". $fileUpload;
    } else {
    ?>
    <form action="./exo8.php" method="post">
        <label for="genre">Genre: </label>
        <select name="genre" id="genre">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="NB">Non-binaire</option>
        </select>
        <label for="nom">Nom: </label>
        <input type="text" name="nom" id="nom" required maxlength="10">
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom" id="prenom" required maxlength="10">
        <input type="file" name="fileupload" id="fileupload" accept="application/pdf" >
        <input type="submit" value="Envoyer">
    </form>

<?php 

    }; 
    ?>


</body>

</html>