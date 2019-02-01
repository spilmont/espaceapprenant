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
        filter_var($this->validation,FILTER_SANITIZE_EMAIL);
        $this->session = (isset($_POST['id_session'])?$_POST['id_session']:null);
        filter_var($this->session,FILTER_SANITIZE_EMAIL);
        $this->id = $_POST['id'];
        filter_var($this->session,FILTER_SANITIZE_NUMBER_INT);

    }


    public function modifier(){

       global $conn;

       $sql="update `apprenant`
              set  nom='$this->nom', prenom='$this->prenom', age='$this->age', avatar='$this->avatar', description='$this->description'
                   nom_utilisateur='$this->user', password='$this->mdp', email='$this->email', rank_user='$this->validation', id_session='$this->session'
              where id='$this->id' ";

       $conn->query($sql);

?>
        <form action="" method="post">
    <fieldset id="mod">
        <legend>modifier</legend>
        <input type="hidden" name="<?= $_GET['id'] ?>" value="<?= $_GET['id'] ?>">
        <label for="nom">nom </label><input type="text" name="nom" value="<?= $_GET['nom'] ?>">
        <label for="prenom">prenom </label><input type="text" name="prenom" value="<?= $_GET['prenom'] ?>">
        <label for="age">age </label><input type="number" name="age" value="<?= $_GET['age'] ?>">
        <label for="avatar">avatar </label><input type="text" name="avatar" value="<?= $_GET['avatar'] ?>">
        <label for="description">description </label><input type="text" name="description" value="<?= $_GET['description'] ?>">
        <label for="user">nom utilisateur </label><input type="text" name="user" value="<?= $_GET['username'] ?>">
        <label for="mdp">mot de passe </label><input type="text" name="mdp"  value="<?= $_GET['mdp'] ?>" >
        <label for="email">email </label><input type="text" name="email"  value="<?= $_GET['mail'] ?>">
        <label for="id_rank">id rank</label><input type="text" name="id_rank" value="<?= $_GET['validation'] ?>">
        <label for="id_session">id session</label><input type="text" name="id_session"  value="<?= $_GET['id_session'] ?>">
        <input type="submit" value="modifier" >
        <p>id rank : <br>
        1 : non activé<br>
            2 : administrateur<br>
            3 : utilisateur </p>
    </fieldset>
</form>
<?php


    }

}