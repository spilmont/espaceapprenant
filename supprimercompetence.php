<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 02/02/2019
 * Time: 19:56
 */

include "dbconn.php";
require "classes/supprimer.php";

$cometences = new supprimer();

$cometences->supprimercompetences();

header("Location:competences.php");