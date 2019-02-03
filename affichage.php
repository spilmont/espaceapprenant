<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 15:25**/

include "dbconn.php";
require "classes/affichage.php";
require "classes/inscription.php";


$aff= new affichage();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> Espace administration</h1>
<a href="adduseradmin.php" class="add"> ajouter un utilisateur</a>
<a href="competences.php" class="add"> ajouter une competence</a>
<a href="techno.php" class="add"> ajouter une techno</a>


<?php $aff->screenapprenant(); ?>

</body>
</html>


