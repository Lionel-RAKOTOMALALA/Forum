<?php

session_start();
require('actions/database.php');
//valider un formulaire
if(isset($_POST['validate'])){
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content']))
    {
        //Les de la question 
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y  à H:i');
        $question_id_author = $_SESSION['id'];
        $question_pseudo = $_SESSION['pseudo'];
        
        $insertIntoQuestionSite = $bdd->prepare('INSERT INTO question(titre, description, contenu, id_auteur, pseudo_auteur,date_publication)VALUES(?, ?, ?, ?, ?, ?)');
        $insertIntoQuestionSite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_content, 
                $question_id_author, 
                $question_pseudo,
                $question_date
            )
        );

            $succesMsg = "votre question a bien été publié sur le site";

    }
    else{
        $errorMsg = "veuillez compléter tout les champs...";
    }
}   

?>