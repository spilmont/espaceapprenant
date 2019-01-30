<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 29/01/2019
 * Time: 14:02
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espaceapprenants";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("connected failed : ".$conn->connect_error);

}else{

    $conn->select_db($dbname);
}



