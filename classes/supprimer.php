<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 01/02/2019
 * Time: 18:37
 */

class supprimer
{

    private $id;

    public function __construct()
    {
        $this->id=$_GET['id'];
    }

    public function supprimer(){

        global $conn;
        $sql ="DELETE FROM `apprenant` WHERE `apprenant`.`id` = '$this->id' ";
        $conn->query($sql);
    }

}