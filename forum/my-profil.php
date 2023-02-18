<?php
    if(isset($_POST['validate'])){
        require "./actions/database.php";
        $imgInsert = $bdd->prepare('INSERT INTO image(nom,taille,type,bin) VALUES(?,?,?,?)');
        $imgInsert->execute(array($_FILES["image"]["name"], $_FILES["image"]["size"], $_FILES["image"]["type"], file_get_contents($_FILES["image"]["tmp_name"])));
    }


?>


<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/head.php"; ?>
<body>
    <?php include "./includes/navbar.php";?>
    <form action="profil.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" >
        <input type="submit" value="valider" name = "validate">
    </form>
</body>
</html>