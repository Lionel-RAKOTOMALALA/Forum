<?php
    require "actions/questions/showArticleContentAction.php";
    require "actions/database.php";

    $getALlAnswerInBdd = $bdd->prepare('SELECT * FROM answer WHERE id_question = ?');
    $getALlAnswerInBdd->execute(array($idQuestion));
?>