<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 01/02/2019
 * Time: 16:36
 */

include "dbconn.php";
require "classes/modifier.php";

$modif = new modifier();
$modif->modifier();

header('Location:affichage.php');