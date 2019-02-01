<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 15:03
 */

class login
{

    /**
     * @var string stock nom utilisateur
     */
    private $user;
    /**
     * @var string stock le mot de passe utilisateur
     */
    private $mdp;

    /**
     * login constructor.
     * @param  $this->>user Recuperer le nom de l'ulisateur a partir du formulaire
     * @param  $this->>mdp Recuperer le mot de passe de l'ulisateur a partir du formulaire
     */
    public function __construct()
    {
        $this->user = (isset($_POST['user'])?$_POST['user']:null);
        $this->mdp = (isset($_POST['mdp'])?$_POST['mdp']:null);
    }


    /**
     *  funtion permetant de se connecter au compte utilisateur
     */
    public function login()
    {

        global $conn;

        $sql = "select * from `apprenant` where nom_utilisateur = '$this->user' and password='$this->mdp'";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($this->user == $row['nom_utilisateur'] and $this->mdp == $row['password']) {

            if ($row['rank_user'] == 2) {
                header("Location:affichage.php");
            } elseif ($row['rank_user'] == 3) {
                header("Location:user.php");
            } elseif ($row['rank_user'] == 1) {
                echo " l'administrateur n'a pas encore activer votre compte";
            } elseif ($row['rank_user'] == null) {
                echo "veuillez vous connecter";
            }else{
                echo "veuillez crrer un compte";
            }



        }

    }
}