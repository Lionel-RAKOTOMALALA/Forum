<?php
session_start();
require "actions/users/securityAction.php";
require "actions/database.php";

?>


<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/head.php";?>
<body>
<?php include "./includes/navbar.php";?>

<?php


$recupUser= $bdd->query('SELECT * FROM users');

while($user = $recupUser->fetch()){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div style='margin-left : 1%;'>
                <a href="./message.php?id=<?=$user['id'];?>">
                    <p><?=$user['pseudo']?></p>
                </a>
                <hr>
            </div>
        </div>
    </div>

    <?php
}


?>

</body>
</html>