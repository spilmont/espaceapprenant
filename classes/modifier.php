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
        $this->user = (isset($_POST['user'])?$_POST['user']:null);
        filter_var($this->user,FILTER_SANITIZE_STRING);

        $this->nom  = (isset($_POST['nom'])?$_POST['nom']:null);
        filter_var($this->nom,FILTER_SANITIZE_STRING);

        $this->prenom= (isset($_POST['prenom'])?$_POST['prenom']:null);
        filter_var($this->prenom,FILTER_SANITIZE_STRING);

        $this->age=(isset($_POST['age'])?$_POST['age']:null);
        filter_var($this->age,FILTER_SANITIZE_NUMBER_INT);

        $this->mdp = (isset($_POST['mdp'])?$_POST['mdp']:null);
        filter_var($this->mdp,FILTER_SANITIZE_STRING);

        $this->description= (isset($_POST['description'])?$_POST['description']:null);
        filter_var($this->description,FILTER_SANITIZE_STRING);

        $this->avatar = (isset($_POST['avatar'])?$_POST['avatar']:null);
        filter_var($this->avatar,FILTER_SANITIZE_STRING);

        $this->email = (isset($_POST['email'])?$_POST['email']:null);
        filter_var($this->email,FILTER_SANITIZE_EMAIL);

        $this->validation = (isset($_POST['id_rank'])?$_POST['id_rank']:null);
        filter_var($this->validation,FILTER_SANITIZE_NUMBER_INT);

        $this->session = (isset($_POST['id_session'])?$_POST['id_session']:null);
        filter_var($this->session,FILTER_SANITIZE_NUMBER_INT);

        $this->id = $_POST['id'];
        filter_var($this->id,FILTER_SANITIZE_NUMBER_INT);

    }


    public function modifier(){

       global $conn;

       $sql="update `apprenant`
              set  nom='$this->nom', prenom='$this->prenom', age='$this->age', avatar='$this->avatar', description='$this->description'
                   nom_utilisateur='$this->user', password='$this->mdp', email='$this->email', rank_user='$this->validation', id_session='$this->session'
              where id='$this->id' ";

       $conn->query($sql);


    }

}