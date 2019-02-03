<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 01/02/2019
 * Time: 18:39
 */

include "dbconn.php";
require "classes/supprimer.php";

$supp = new supprimer();
$supp->supprimerapprenant();

header("Location:affichage.php");