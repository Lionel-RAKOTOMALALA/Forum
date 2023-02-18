<?php 
    session_start();
    require "../database.php";
    if(!isset($_SESSION['authe'])){
        header('Location: login.php');
    }



    if(isset($_GET['id']) && !empty($_GET['id'])){
        $idOfQuestion = $_GET['id'];

        $checkIfQuestionExtist = $bdd->prepare('SELECT id_auteur FROM question WHERE id = ?');
        $checkIfQuestionExtist->execute(array($idOfQuestion));

        if($checkIfQuestionExtist->rowCount() > 0){
            $question = $checkIfQuestionExtist->fetch();
            if($question['id_auteur'] == $_SESSION['id']){
                
                $deleteThisQuestion = $bdd->prepare('DELETE FROM question WHERE id = ?');
                $deleteThisQuestion->execute(array($idOfQuestion));

                header('Location:../../my-questions.php');

            }else{
                echo "vous n'avez pas le droit de supprimer une question qui ne vous appartient pas";
            }
        }else{
            echo "Aucune question n'a été trouvée";
        }
    }else{
        echo "Aucune question n'a été trouvée";
    }



?>