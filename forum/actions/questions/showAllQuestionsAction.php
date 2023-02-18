<?php 
require "actions/database.php";
    //recupérer tout les questions par defaut sans recherche
    $getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM question ORDER BY id DESC LIMIT 0,5');
    //vérifier si un recherche a été rentrée par l'utilisateur
    if(isset($_GET['search']) && !empty($_GET['search'])){
        //la recherche
        $user_search = $_GET['search'];
        //recuperer toutes les questions qui correspondent à la recherche
        $getAllQuestions = $bdd->query('SELECT * FROM question WHERE titre LIKE "%'.$user_search.'%" ORDER BY id DESC');
    }
?>