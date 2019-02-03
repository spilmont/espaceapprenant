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

    public function supprimerapprenant(){

        global $conn;
        $sql ="DELETE FROM `apprenant` WHERE `apprenant`.`id` = '$this->id' ";
        $conn->query($sql);
    }

    public function supprimercompetences(){

        global $conn;
        $sql ="DELETE FROM `competences` WHERE `competences`.`id` = '$this->id' ";
        $conn->query($sql);
    }

    public function supprimertechno(){

        global $conn;
        $sql ="DELETE FROM `techno` WHERE `techno`.`id` = '$this->id' ";
        $conn->query($sql);
    }


}