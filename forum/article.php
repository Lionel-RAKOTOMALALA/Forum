<?php 
    require "actions/questions/showAnswerAction.php";
    require "actions/questions/postAnswerQuestionAction.php"; 
    require "actions/questions/showArticleContentAction.php";
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/head.php";?>
<body>
    <?php include "./includes/navbar.php";?>
    <br><br>

    <div class="container">
        <?php
            if(isset($errorMsg)){
                echo $errorMsg;
            }
            if(isset($question_publication_date)){
                ?>
                <section class="show-content">
                    <h4><?=$question_title;?></h4>
                    <hr>
                    <hr>
                    <p><?=$question_content;?></p>
                    <hr>
                    <small><?php echo "publier par $question_pseudo_author  le  $question_publication_date";?></small>
                    <hr>
                    <br>
                </section>
                <section class="repondre">
                    <form action="#" method="POST" class="form-group">

                        <label class="form-label" for="repondre">Réponse :</label>
                        <textarea name="repondre" id="repondre" class="form-control"></textarea><br>
                         <button name="validate" type="submit" class="btn btn-primary">Envoyer</button>       
                    </form>
                </section>

                <?php
            while($answer = $getALlAnswerInBdd->fetch()){
                ?>
                <div class="card" id="card">
                    <div class="card-header">
                    <a href="#"><?=$answer['pseudo_auteur'] ?></a>
                    <hr>
                        <?= $answer['contenu'];?>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
                <?php

            }
        ?>
        <!-- <script>
            var card = document.querySelectorAll('#card');
            card.forEach((item) =>{
                item.addEventListener('click', ()=>{
                    item.style.float = 'right';
                    item.style.backgroundColor='skyblue';
                    item.style.opacity = '90%';
                })
            })
        </script> -->
    </div>
</body>
</html>