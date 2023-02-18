<?php 
session_start();
require "actions/users/securityAction.php";
require "actions/questions/showAllQuestionsAction.php";
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/head.php"; ?>
<body>
    <?php include "./includes/navbar.php"; ?>
    <br><br>

    <div class="container">
    <p style="color: #18edfc; font-size: 2.7em; font-family: 'Courier New', Courier, monospace;">Bonjour <span  ><?php echo $_SESSION['firstname']. ' '. $_SESSION['lastname'];?></span></p>
      <br><br><br>  <form method="GET">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success">Rechercher</button>
                </div>
            </div>
        </form>
        <br><br>
        <?php
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header">
                    <a href="./article?id=<?= $question['id'];?>">
                        <?= $question['titre'];?>
                    </a>
                    </div>
                    <div class="card-body">
                        <?php echo $question['description'];?>
                    </div>  
                    <div class="card-footer">
                        Publié par <?= $question['pseudo_auteur'];?> le <?= $question['date_publication'];?>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
         

    </div>

</body>
</html>

