<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 29/01/2019
 * Time: 14:39
 **/



class inscription
{
    private $user;
    private $nom;
    private $prenom;
    private $age =0;
    private $mdp;
    private $description;
    private $avatar;


    public function __construct()
    {
        $this->user = $_POST['user'];
        $this->nom  = $_POST['nom'];
        $this->prenom= $_POST['prenom'];
        $this->age=$_POST['age'];
        $this->mdp = $_POST['mdp'];
        $this->description= $_POST['description'];
        $this->avatar = $_POST['avatar'];
    }

    public function setcreatapprenant(){

        global $conn;



        $stmt = $conn->prepare("insert into apprenant(`nom`,`prenom`,`age`,`avatar`,`description`,`password`,`nom_utilisateur`,`id_session`) value (?,?,?,?,?,?,?,1)");
        $stmt->bind_param("ssissss",$this->nom,$this->prenom,$this->age,$this->avatar,$this->description,$this->mdp,$this->user);
        $stmt->execute();
        $stmt->close();




    }

}