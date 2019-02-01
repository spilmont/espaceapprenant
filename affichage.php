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
<a href="adduseradmin.php" id="add"> ajouter un utilisateur</a>
<?php $aff->screen(); ?>

</body>
</html>


