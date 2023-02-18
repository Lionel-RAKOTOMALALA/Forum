<?php
    require "./actions/questions/myQuestionsAction.php";
    require('actions/users/securityAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./includes/head.php";?>
</head>
<body>
    <?php include "./includes/navbar.php";?>
    <br><br>
    <div class="container-fluid">
    <?php
        while($question = $getAllMyQuestions->fetch())
        {
            ?>
            <div class="card">
                <div class="card-header">
                    <a href="./article?id=<?= $question['id'];?>">
                        <?= $question['titre'];?>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $question['titre'] . '<br>' . $question['date_publication'];?></p>
                    <a href="./article?id=<?= $question['id'];?>" class="btn btn-primary">Accéder à la question</a>
                    <a href="./edit-question.php?id=<?php echo $question['id'];?>" class="btn btn-warning">Modifier la question</a>
                    <a href="./actions/questions/deleteQuestionAction.php?id=<?php echo $question['id'];?>" class="btn btn-danger">Supprimer la question</a>
                </div>
            </div>
            <br>
            <?php
        }
        ?>
            </div>

</body>
</html>