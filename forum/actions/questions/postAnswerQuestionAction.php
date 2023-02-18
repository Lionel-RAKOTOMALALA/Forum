<?php
    session_start();
    require "actions/questions/showArticleContentAction.php";
    require "actions/questions/showArticleContentAction.php";

    if(isset($_POST['validate'])){
        if(!empty($_POST['repondre'])){

            $user_answer = nl2br(htmlspecialchars($_POST['repondre']));

            $insertAnswer = $bdd->prepare('INSERT INTO answer(id_auteur, pseudo_auteur, id_question, contenu) VALUES(?, ?, ?, ?)');
            $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idQuestion, $user_answer));
        
        }
    }


?>