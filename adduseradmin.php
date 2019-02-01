<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 01/02/2019
 * Time: 18:29
 */
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
<form action="check_inscription_admin.php" method="post">
    <fieldset ">
        <legend>inscription admin</legend>
    <label for="user"> nom d'utilisateur* </label><input type="text"  id="user" name="user"><br>
    <label for="nom"> nom* </label><input type="text" id="nom"  name="nom"><br>
    <label for="prenom"> prenom* </label><input type="text" id="prenom"  name="prenom"><br>
    <label for="age"> age* </label><input type="number" id="age"  name="age"><br>
    <label for="email"> email* </label><input type="text" name="email" id="email" >
    <label for="mdp">mot de passe*</label><input type="password" id="mdp"  name="mdp"><br>
    <label for="description">description </label><textarea  name="description" id="description"></textarea>
    <label for="avatar">avatar (url image)</label><input  type="text" id="avatar" name="avatar">
    <label for="id_session">id session</label><input  type="number" id="id_session" name="id_session">
    <label for="id_session">id rank</label><input  type="number" id="id_rank" name="id_rank">
    <input type="submit" name="enregistrer" id="enregistrer" class="formulaire" value="enregistrer">
    <p>(*) obligatoire</p>
    <p>id rank : <br>
        1 : non activé<br>
        2 : administrateur<br>
        3 : utilisateur </p>

</form>
</div>
</body>
</html>
