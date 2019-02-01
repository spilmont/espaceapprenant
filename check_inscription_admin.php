<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 01/02/2019
 * Time: 19:31
 */

include "dbconn.php";
require "classes/inscription.php";

$isncadmin = new inscription();

$isncadmin->setcreatapprenantadmin();

header("Location:affichage.php");