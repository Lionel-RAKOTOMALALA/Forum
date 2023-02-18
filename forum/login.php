<?php
 
    require_once 'actions/database.php';
    require 'actions/users/loginAction.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php include('./includes/head.php'); ?>

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
                <label for="exempleInputEmail4" class="form-label">password</label>
                <input id="exempleInputEmail4" type="password" name="password" id="exempleInputPassword" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-4 m-5 " name="validate">Se connecter</button>
            <a href="./signup.php"><p>je n'ai pas de compte, je m'inscris</p></a>
        </div>

    </form>
</body>
</html>