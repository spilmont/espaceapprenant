<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 29/01/2019
 * Time: 14:39
 **/



class inscription
{
    /**
     * @var string stock un nom utilisateur
     */
    protected $user;
    /**
     * @var string stock le nom de famille de l'utilisateur
     */
    protected $nom;
    /**
     * @var string stock un prénom de l'utilisateur
     */
    protected $prenom;
    /**
     * @var int stock l'age de l'utilisateur
     */
    protected $age =0;
    /**
     * @var string stock le mot de passe de l'utilisateur
     */
    protected $mdp;
    /**
     * @var string stock une description de lutilisateur (falcultatif)
     */
    protected $description;
    /**
     * @var string stock url d'une image pour un avatar (facultatif)
     */
    protected $avatar;
    /**
     * @var string stock email de l'utilisateur
     */
    protected $email;


    public function __construct()
    {
        $this->user = $_POST['user'];
        filter_var($this->user,FILTER_SANITIZE_STRING);
        $this->nom  = $_POST['nom'];
        filter_var($this->nom,FILTER_SANITIZE_STRING);
        $this->prenom= $_POST['prenom'];
        filter_var($this->prenom,FILTER_SANITIZE_STRING);
        $this->age=$_POST['age'];
        filter_var($this->age,FILTER_SANITIZE_NUMBER_INT);
        $this->mdp = $_POST['mdp'];
        filter_var($this->mdp,FILTER_SANITIZE_STRING);
        $this->description= $_POST['description'];
        filter_var($this->description,FILTER_SANITIZE_STRING);
        $this->avatar = $_POST['avatar'];
        filter_var($this->avatar,FILTER_SANITIZE_STRING);
        $this->email = $_POST['email'];
        filter_var($this->email,FILTER_SANITIZE_EMAIL);
    }

    /**
     * Cette fonction permets de creer un utilisateur dans la base de données
     *
     */
    public function setcreatapprenant(){


        global $conn;

        if ($this->user !=="" && $this->nom !=="" && $this->prenom !=="" && $this->age !=="" && $this->mdp !=="" && $this->email !==""  ){

            $stmt = $conn->prepare("insert into apprenant(`nom`,`prenom`,`age`,`avatar`,`description`,`password`,`nom_utilisateur`,`id_session`,`email`,`rank_user`) value (?,?,?,?,?,?,?,1,?,1)");
            $stmt->bind_param("ssisssss",$this->nom,$this->prenom,$this->age,$this->avatar,$this->description,$this->mdp,$this->user,$this->email);
            $stmt->execute();
            $stmt->close();

        }else{
            echo "veuillez remplir tout les champs obligatoires";
        }





    }

}