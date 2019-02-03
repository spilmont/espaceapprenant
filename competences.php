<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 02/02/2019
 * Time: 10:38
 */

include "dbconn.php";
require "classes/affichage.php";

$competences= new affichage();

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
    <form action="check/check_competences.php" method="post">
        <fieldset>
            <legend>ajouter une competence</legend>
            <label for="competence"> competence </label><input type="text" id="competence" name="competence"><br>
            <label for="niveau"> niveau </label>
            <select name="niveau">
                <option value="front">front-end</option>
                <option value="back">back-end</option>
            </select>
            <input type="submit" name="enregistrer" id="enregistrer" class="formulaire" value="enregistrer">
        </fieldset>
    </form>
</div>

    <?php $competences->screencompetences();?>

</body>
</html>
