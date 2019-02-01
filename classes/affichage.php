<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 15:23
 */

class affichage
{





    /**
     * Permet d'afficher un tableau d'administration
     */
    public function screen(){

        global $conn;

        $sql="select * from `apprenant` ";

        $result =$conn->query($sql);
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
        while ($row = $result->fetch_assoc()){

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
                <td><a href="modifier.php?id=<?=$id ?>&nom=<?=$nom ?>&prenom=<?=$prenom?>&age=<?=$age?>&avatar=<?=$avatar?>&description=<?=$description?>&username=<?=$username?>&mdp=<?=$mdp?>&mail=<?=$mail?>&validation=<?=$validation?>&id_session=<?=$id_session?>"> modifier </a></td>
                <td><a href="supprimer.php?id=<?=$id ?>">supprimer</a> </td>
                <td><?= $row['id']?></td>
                <td><?= $row['nom']?></td>
                <td><?= $row['prenom'] ?></td>
                <td><?= $row['age']?></td>
                <td id="imgav"><img src="<?=$row['avatar']?>" width="50px" height="50px"></td>
                <td><?= $row['description']?></td>
                <td><?= $row['nom_utilisateur'] ?></td>
                <td><?= $row['password']?></td>
                <td><?=$row['email'] ?></td>
                <td><?= $row['rank_user'] ?></td>
                <td><?= $row['id_session']?></td>
                <td><a href="#">cliquer ici</a></td>
            </tr>

<?php
        }
        ?>
        </table>

<?php
    }
}