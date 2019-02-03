<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 02/02/2019
 * Time: 15:28
 */
include "../dbconn.php";
require "../classes/inscription.php";



$competences= new inscription();
$competences->setcreatecompetence();





header("Location:../competences.php");


