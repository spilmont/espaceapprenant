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
<div id="insc">
<form action="check_inscription.php" method="post">
    <fieldset ">
        <legend>inscription</legend>
    <label for="user"> nom d'utilisateur* </label><input type="text"  id="user" name="user"><br>
    <label for="nom"> nom* </label><input type="text" id="nom"  name="nom"><br>
    <label for="prenom"> prenom* </label><input type="text" id="prenom"  name="prenom"><br>
    <label for="age"> age* </label><input type="number" id="age"  name="age"><br>
    <label for="email"> email* </label><input type="text" name="email" id="email" >
    <label for="mdp">mot de passe*</label><input type="password" id="mdp"  name="mdp"><br>
    <label for="description">description </label><textarea  name="description" id="description"></textarea>
    <label for="avatar">avatar (url image)</label><input  type="text" id="avatar" name="avatar">
    <input type="submit" name="enregistrer" id="enregistrer" class="formulaire" value="enregistrer">
    <p>(*) obligatoire</p>

</form>
</div>
</body>
</html>
