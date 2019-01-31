<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 15:23
 */

class affichage
{

 protected $user;


    public function screen(){

        global $conn;

        $sql="select * from `apprenant` ";

        $result =$conn->query($sql);
        ?>
        <table>
            <?php
        while ($row = $result->fetch_assoc()){


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
                <td><a href="modifier.php?nom=<?=$nom ?>&prenom=<?=$prenom?>&age=<?=$age?>&avatar=<?=$avatar?>&description=<?=$description?>&username=<?=$username?>&mdp=<?=$mdp?>&mail=<?=$mail?>&validation=<?=$validation?>&id_session=<?=$id_session?>"> modifier </a></td>
                <td><a href="supprimer">supprimer</a> </td>
                <td><?= $row['nom']?></td>
                <td><?= $row['prenom'] ?></td>
                <td><?= $row['age']?></td>
                <td><img src="<?=$row['avatar']?>"></td>
                <td><?= $row['description']?></td>
                <td><?= $row['nom_utilisateur'] ?></td>
                <td><?= $row['password']?></td>
                <td><?=$row['email'] ?></td>
                <td><?= $row['rank_user'] ?></td>
                <td><?= $row['id_session']?></td>
            </tr>

<?php
        }
        ?>
        </table>

<?php
    }
}