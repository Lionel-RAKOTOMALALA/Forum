<?php
session_start();
require "actions/users/securityAction.php";
require "actions/database.php";

$idUserDest = $_GET['id'];
if(isset($_POST['validate'])){
    if(isset($_POST['message']) && !empty($_POST['message'])){
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
        $recupUser->execute(array($idUserDest));
        if($recupUser->rowCount() > 0){
            $message = nl2br(htmlspecialchars($_POST['message']));
            $insertMess = $bdd->prepare('INSERT INTO messages(mess, id_destinataire, id_auteur) VALUES(?,?,?)');
            $insertMess->execute(array($message, $idUserDest, $_SESSION['id']));
        }else{
            echo "Aucun Utilisateur trouvé";
        }
    
    }
}


?>


<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/head.php";?>
<body>
<?php include "./includes/navbar.php";?>

    <section id="messages">
        <?php
            $recupMess = $bdd->prepare('SELECT * FROM messages WHERE id_auteur = ? AND id_destinataire = ? OR id_auteur = ? AND id_destinataire = ? order by id_mess ASC ');
            $recupMess->execute(array($_SESSION['id'], $idUserDest, $idUserDest, $_SESSION['id']));
            while($messages = $recupMess->fetch()){
                if($messages['id_destinataire'] == $_SESSION['id']){
                    ?>
                        <p id="ses_mess"><?=$messages['mess'];?></p> <br><br>
                    <?php
                }elseif($messages['id_destinataire'] == $idUserDest){
                    ?>
                        <p id="mes_mess"><?=$messages['mess'];?></p> <br><br>
                    <?php
                }
            }

        ?>
    </section>

    <form action="" method="POST">
    <div class="form-group row">
        <div class="col-8">
            <textarea name="message" cols="100" id="texter" class="form-control"></textarea>
        </div>
        <div class="col-4">
            <input type="submit" value="envoyer" class="btn btn-primary" name="validate" id = "envmess">
    
        </div>
    </div>
    </form>
</body>
</html>