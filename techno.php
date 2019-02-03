<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 02/02/2019
 * Time: 10:59
 */
include "dbconn.php";
require "classes/affichage.php";

$techno = new affichage();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="techno">
    <form action="check/check_techno.php" method="post">
        <fieldset>
            <legend>ajouter une techno</legend>
            <label for="techno"> techno </label><input type="text" id="techno" name="techno"><br>
            <label for="id_competence"> id de la competence associée </label><input type="number"  id="id_competence" name="id_competence"><br>
            <input type="submit" name="enregistrer" id="enregistrer" class="formulaire" value="enregistrer">
            <p><?php $techno->screentocompfotechno() ?></p>
        </fieldset>
    </form>
</body>
</div>
<?php $techno->screentechno()?>

</html>
