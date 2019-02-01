<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 16:45
 */

include "dbconn.php";
require "classes/modifier.php";

$modif = new modifier();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$modif->modifier();
?>
</body>
</html>

