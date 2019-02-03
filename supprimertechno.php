<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 02/02/2019
 * Time: 20:46
 */

include "dbconn.php";
require "classes/supprimer.php";

$supprimer = new supprimer();
$supprimer->supprimertechno();

header("Location:techno.php");