<?php 
    
    require "./actions/database.php";
    // verifier si l'utilisateur a entrer un donnée dans l'url
    if(isset($_GET['id']) && !empty($_GET['id'])){
            $idOfQuestion = $_GET['id'];

            $checkIfQuestionExists = $bdd->prepare('SELECT * FROM question WHERE id = ?');
            $checkIfQuestionExists->execute(array($idOfQuestion));

            if($checkIfQuestionExists->rowCount() > 0){
                $questionInfos = $checkIfQuestionExists->fetch();
                if($questionInfos['id_auteur'] == $_SESSION['id']){ //si id entré dans l'URL trouvé dans la bdd est égale à l id de l auteur connecté

                    $question_title =  $questionInfos['titre'];
                    $question_description =  $questionInfos['description'];
                    $question_content =  $questionInfos['contenu'];
                    $question_date =  $questionInfos['date_publication'];

                    $question_description= str_replace('<br />','',$question_description);
                    $question_content= str_replace('<br />','',$question_content);
                }else{
                    $errorMsg = "Vous n'êtes pas l'auteur de cette question";
                }
            }else{
                $errorMsg = "aucune question n'a été trouvé";          
            }




    }else{
        $errorMsg = "aucune question n'a été trouvé";
    }



    ?>

