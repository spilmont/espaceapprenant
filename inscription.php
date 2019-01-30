<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 29/01/2019
 * Time: 14:10
 */

include "dbconn.php";
require "classes/inscription.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="post" >
    <fieldset id="insc">
        <legend>inscription</legend>
    <label for="user"> nom d'utilisateur </label><input type="text" class="formulaire" id="user" name="user"><br>
    <label for="nom"> nom </label><input type="text" id="nom" class="formulaire" name="nom"><br>
    <label for="prenom"> prenom </label><input type="text" id="prenom" class="formulaire" name="prenom"><br>
    <label for="age"> age </label><input type="number" id="age" class="formulaire" name="age"><br>
    <label for="mdp">mot de passe</label><input type="password" id="mdp" class="formulaire" name="mdp"><br>
    <label for="description">description</label><textarea name="description" id="description"></textarea>
    <label for="avatar"></label><input type="file" id="avatar" name="avatar">
    <input type="submit" name="enregistrer" id="enregistrer" value="enregistrer">
    </fieldset>
</form>
</body>
</html>
