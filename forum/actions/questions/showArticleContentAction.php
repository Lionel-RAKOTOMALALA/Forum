<?php
    require "actions/database.php";

    if(isset($_GET['id']) && !empty($_GET['id'])){

        $idQuestion = $_GET['id'];
        $ifQuestionExist = $bdd->prepare('SELECT * FROM question WHERE id = ?');
        $ifQuestionExist->execute(array($idQuestion));
        if($ifQuestionExist->rowCount() > 0){

            $question = $ifQuestionExist->fetch();

            $question_title= $question['titre'];
            $question_content= $question['contenu'];
            $question_id_author= $question['id_auteur'];
            $question_pseudo_author= $question['pseudo_auteur'];
            $question_publication_date= $question['date_publication'];

        }else{
            $errorMsg= "Aucune question n'a été trouvée";    
        }
    }else{
        $errorMsg= "Aucune question n'a été trouvée";
    }

?>