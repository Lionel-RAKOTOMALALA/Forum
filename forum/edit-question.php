<?php
require "actions/questions/editQuestionsAction.php";
require "./actions/questions/getInfoOnEditedAction.php";
require "./actions/users/securityAction.php";
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/head.php"; ?>
<body>
<?php include "./includes/navbar.php"; ?>
    <div class="container">
        <?php 
            if(isset($errorMsg)){
                echo'<p>'. $errorMsg . '</p>';
            }
        ?>
    </div>
    <?php
        if(isset($question_content)){
            ?>
                <form action="#" method="POST">
            <div class="container-fluid">

                <div class="mb-4 m-5">
                    <label for="exempleInputEmail1" class="form-label">Tire de question</label>
                    <input id="exempleInputEmail1" type="text" name="title" value="<?php echo $question_title; ?>" class="form-control">
                </div>
                <div class="mb-4 m-5">
                    <label for="exempleInputEmail2" class="form-label">Description de la question</label>
                    <textarea id="exempleInputEmail2"  name="description" class="form-control"><?php echo $question_description; ?></textarea>
                </div>
                <div class="mb-4 m-5">
                    <label for="exempleInputEmail3" class="form-label">Contenu de la question</label>
                    <textarea id="exempleInputEmail3"  name="content" class="form-control"><?php echo $question_content; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-4 m-5 " name="validate">Modifier la question</button>
            </div> 
        </form>        
            <?php
        }
    ?>
    
</body>
</html>