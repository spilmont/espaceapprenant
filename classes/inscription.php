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
    /**
     * @var string stock competence du formulaire
     */
    protected $competence;
    /**
     * @var string stock le niveau front ou back
     */
    protected $end;
    /**
     * @var string stock la techno
     */
    protected $techno;
    /**
     * @var int stock le id de la competence a associée
     */
    protected $idCompetence;


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
        $this->competence = $_POST['competence'];
        filter_var($this->competence,FILTER_SANITIZE_STRING);
        $this->end = $_POST['niveau'];
        filter_var($this->end,FILTER_SANITIZE_STRING);
        $this->techno = $_POST['techno'];
        filter_var($this->techno,FILTER_SANITIZE_STRING);
        $this->idCompetence = $_POST['id_competence'];
        filter_var($this->idCompetence,FILTER_SANITIZE_NUMBER_INT);


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

    /**
     * Cette fonction permets a l'admin de creer un utilisateur dans la base de données
     *
     */
    public function setcreatapprenantadmin(){


        global $conn;

        if ($this->user !=="" && $this->nom !=="" && $this->prenom !=="" && $this->age !=="" && $this->mdp !=="" && $this->email !==""  ){

            $stmt = $conn->prepare("insert into apprenant(`nom`,`prenom`,`age`,`avatar`,`description`,`password`,`nom_utilisateur`,`id_session`,`email`,`rank_user`) value (?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssissssisi",$this->nom,$this->prenom,$this->age,$this->avatar,$this->description,$this->mdp,$this->user,$this->session,$this->email, $this->validation);
            $stmt->execute();
            $stmt->close();

        }else{
            echo "veuillez remplir tout les champs obligatoires";
        }





    }

    /**
     * Cette fonction permets a l'admin creer une competence
     */
    public function setcreatecompetence(){




            global $conn;


                $stmt = $conn->prepare("insert into competences(`competence`,`end`) value (?,?)");
                $stmt->bind_param("ss",$this->competence,$this->end);
                $stmt->execute();
                $stmt->close();





    }

    public function setcreattechno(){
        global $conn;



            $stmt = $conn->prepare("insert into techno(`techno`,`id_competence`) value (?,?)");
            $stmt->bind_param("si",$this->techno,$this->idCompetence);
            $stmt->execute();
            $stmt->close();


    }




}