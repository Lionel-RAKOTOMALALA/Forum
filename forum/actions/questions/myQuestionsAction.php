<?php
    session_start();
    require "./actions/database.php";

    $getAllMyQuestions = $bdd->prepare('SELECT id, titre, description,date_publication FROM question WHERE id_auteur = ? ORDER BY date_publication DESC');
    $getAllMyQuestions->execute(array($_SESSION['id']));
?>