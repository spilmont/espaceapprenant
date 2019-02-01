<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 16:45
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
<form action="check/check_modif.php" method="post">
    <fieldset id="mod">
        <legend>modifier</legend>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="nom">nom </label><input type="text" name="nom" value="<?= $_GET['nom'] ?>">
        <label for="prenom">prenom </label><input type="text" name="prenom" value="<?= $_GET['prenom'] ?>">
        <label for="age">age </label><input type="number" name="age" value="<?= $_GET['age'] ?>">
        <label for="avatar">avatar </label><input type="text" name="avatar" value="<?= $_GET['avatar'] ?>">
        <label for="description">description </label><input type="text" name="description" value="<?= $_GET['description'] ?>">
        <label for="user">nom utilisateur </label><input type="text" name="user" value="<?= $_GET['username'] ?>">
        <label for="mdp">mot de passe </label><input type="text" name="mdp"  value="<?= $_GET['mdp'] ?>" >
        <label for="email">email </label><input type="text" name="email"  value="<?= $_GET['mail'] ?>">
        <label for="id_rank">id rank</label><input type="text" name="id_rank" value="<?= $_GET['validation'] ?>">
        <label for="id_session">id session</label><input type="text" name="id_session"  value="<?= $_GET['id_session'] ?>">
        <input type="submit" value="modifier" >
        <p>id rank : <br>
            1 : non activé<br>
            2 : administrateur<br>
            3 : utilisateur </p>
    </fieldset>
</form>
</body>
</html>

