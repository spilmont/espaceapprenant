<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 15:03
 */

include "dbconn.php";
require "classes/login.php";

$login = new login();

$login->login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>login</legend>
        <input type="text" name="user">
        <input type="password" name="mdp">
        <input type="submit">
    </fieldset>
</form>

</body>
</html>
