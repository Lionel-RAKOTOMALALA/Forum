<?php require('actions/users/signupAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include("./includes/head.php"); ?>
<body>

    <form action="#" method="POST">
        <div class="container-fluid">
            
            <div class="mb-4 m-5">
                
        <?php
    if(isset($errorMsg)){
        echo'<p>'. $errorMsg . '</p>';
    }
            
    ?>
                <label for="exempleInputEmail1" class="form-label">Pseudo</label>
                <input id="exempleInputEmail1" type="text" name="pseudo" class="form-control">
            </div>
            <div class="mb-4 m-5">
                <label for="exempleInputEmail2" class="form-label">Nom</label>
                <input id="exempleInputEmail2" type="text" name="lastname" class="form-control">
            </div>
            <div class="mb-4 m-5">
                <label for="exempleInputEmail3" class="form-label">Prénom</label>
                <input id="exempleInputEmail3" type="text" name="firstname" class="form-control">
            </div>
            <div class="mb-4 m-5">
                <label for="exempleInputEmail4" class="form-label">password</label>
                <input id="exempleInputEmail4" type="password" name="password" id="exempleInputPassword" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-4 m-5 " name="validate">S'inscrire</button>
            <a href="./login.php" class =" mb-4 m-5"><p>j'ai déjà un compte, je me connecte</p></a> 
        </div> 
    </form>   
</body>
</html>