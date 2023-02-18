<?php
        session_start();
        require "actions/questions/getInfoOnEditedAction.php";
        require "actions/database.php";

        if(isset($_POST['validate'])){
            if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content']))
            {
                $new_question_title = htmlspecialchars($_POST['title']);
                $new_question_description = nl2br(htmlspecialchars($_POST['description']));
                $new_question_content = nl2br(htmlspecialchars($_POST['content']));

                $editQuestionOnWebSite = $bdd->prepare('UPDATE question SET titre = ?, description = ?, contenu = ? WHERE id = ?');
                $editQuestionOnWebSite->execute(array($new_question_title,$new_question_description,$new_question_content,$idOfQuestion));

                header('Location: my-questions.php');
            }else{
                $errorMsg = "veuillez remplir tous les champs";
            }
    
    
    }
?>