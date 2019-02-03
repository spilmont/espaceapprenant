<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 02/02/2019
 * Time: 20:07
 */
include "../dbconn.php";
require "../classes/inscription.php";



$techno= new inscription();
$techno->setcreattechno();





header("Location:../techno.php");


