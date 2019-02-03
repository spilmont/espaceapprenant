<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 15:23
 */

class affichage
{
    private $id;

    public function __construct()
    {
        $this->id =  (isset($_GET['id'])?$_GET['id']:null);
    }


    /**
     * Permet d'afficher un tableau d'administration
     */
    public function screenapprenant()
    {

        global $conn;

        $sql = "select * from `apprenant` ";

        $result = $conn->query($sql);
        ?>
        <table>
            <th></th>
            <th></th>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>age</th>
            <th>avatar</th>
            <th>description</th>
            <th>nom utilisateur</th>
            <th>mot de passe</th>
            <th>email</th>
            <th>rank_user</th>
            <th>id_session</th>
            <th>competences</th>
            <?php
            while ($row = $result->fetch_assoc()) {

                $id = $row['id'];
                $nom = $row['nom'];
                $prenom = $row['prenom'];
                $age = $row['age'];
                $avatar = $row['avatar'];
                $description = $row['description'];
                $username = $row['nom_utilisateur'];
                $mdp = $row['password'];
                $mail = $row['email'];
                $validation = $row['rank_user'];
                $id_session = $row['id_session'];
                ?>
                <tr>
                    <td>
                        <a href="modifier.php?id=<?= $id ?>&nom=<?= $nom ?>&prenom=<?= $prenom ?>&age=<?= $age ?>&avatar=<?= $avatar ?>&description=<?= $description ?>&username=<?= $username ?>&mdp=<?= $mdp ?>&mail=<?= $mail ?>&validation=<?= $validation ?>&id_session=<?= $id_session ?>">
                            modifier </a></td>
                    <td><a href="supprimerapprenant.php?id=<?= $id ?>">supprimer</a></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nom'] ?></td>
                    <td><?= $row['prenom'] ?></td>
                    <td><?= $row['age'] ?></td>
                    <td id="imgav"><img src="<?= $row['avatar'] ?>" width="50px" height="50px"></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= $row['nom_utilisateur'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['rank_user'] ?></td>
                    <td><?= $row['id_session'] ?></td>
                    <td><a href="admintouser.php?id=<?= $id ?>">cliquer ici</a></td>
                </tr>

                <?php
            }
            ?>
        </table>

        <?php
    }

    public function scrennapp(){
        global $conn;



        $sql = "SELECT * FROM `apprenant` LEFT JOIN session ON apprenant.id_session = session.id WHERE apprenant.id = $this->id";

        $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {

                echo $row['nom']." ".$row['prenom']." ".$row['session'];


            }

    }

    public function screencompetences()
    {
        global $conn;

        $sql = "select * from `competences` ";

        $result = $conn->query($sql);
        ?>
        <table>

            <th></th>
            <th>id</th>
            <th>competences</th>
            <th>niveaux</th>

            <?php
            while ($row = $result->fetch_assoc()) {

                $id = $row['id'];


                ?>
                <tr>
                    <td><a href="supprimercompetence.php?id=<?= $id ?>">supprimer</a></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['competence'] ?></td>
                    <td><?= $row['end'] ?></td>
                </tr>

                <?php
            }
            ?>
        </table>

        <?php

    }

    public  function screentechno(){

        global $conn;

        $sql = "SELECT techno.id as technoid,techno.techno,techno.id_competence,competences.id,competences.competence
FROM techno
left JOIN competences ON techno.id_competence = competences.id  ";

        $result = $conn->query($sql);
        ?>

        <table>

            <th></th>

            <th>techno</th>
            <th>id competence</th>
            <th>competence</th>

            <?php
            while ($row = $result->fetch_assoc()) {

                $id = $row['technoid'];

                ?>
                <tr>
                    <td><a href="supprimertechno.php?id=<?= $id ?>">supprimer</a></td>
                    <td><?= $row['techno'] ?></td>
                    <td><?= $row['id_competence'] ?></td>
                    <td><?= $row['competence'] ?></td>
                </tr>


                <?php
            }
            ?>
        </table>

        <?php

    }

    public function screentocompfotechno(){
        global $conn;

        $sql = "select * from `competences` ";

        $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {

              echo $row['id']." : ".$row['competence']."<br>";


            }


    }



}