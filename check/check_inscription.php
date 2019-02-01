<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 29/01/2019
 * Time: 13:22
 */
include "../dbconn.php";
require "../classes/inscription.php";



$inscription = new inscription();


$inscription->setcreatapprenant();



header("Location:../affichage.php");


