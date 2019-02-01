<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 01/02/2019
 * Time: 13:13
 */

class modifier
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

    /**
     * @var int stock id du rang de l'utilisateur
     */
    protected $validation;

    /**
     * @var int stock id du rang de l'utilisateur
     */
    protected $session;

    /**
     * @var int stock id de l'utilisateur
     */
    protected $id;



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

        $this->validation = $_POST['id_rank'];
        filter_var($this->validation,FILTER_SANITIZE_NUMBER_INT);

        $this->session = $_POST['id_session'];
        filter_var($this->session,FILTER_SANITIZE_NUMBER_INT);

        $this->id = $_POST['id'];
        filter_var($this->id,FILTER_SANITIZE_NUMBER_INT);

    }


    public function modifier(){

       global $conn;

       $sql="update `apprenant`
              set  nom='$this->nom', prenom='$this->prenom', age='$this->age', avatar='$this->avatar', description='$this->description',
                   nom_utilisateur='$this->user', password='$this->mdp', email='$this->email', rank_user='$this->validation', id_session='$this->session'
              where id='$this->id' ";

       $conn->query($sql);


    }

}