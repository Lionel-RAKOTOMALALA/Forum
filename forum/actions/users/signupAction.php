<?php
    session_start();
    require('actions/database.php');
    //validation du formulaire
if(isset($_POST['validate'])){
//vérifier si l'user a complété tous les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])){
        
        //les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //vérifier si l'utilisateur s'est déjà inscrit sur le site
        $verifUserInBdd = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $verifUserInBdd->execute(array($user_pseudo));
        
        //insérer l'utilisateur dans la bdd
        if($verifUserInBdd->rowCount() == 0){
            $insertUser = $bdd ->prepare('INSERT INTO users(pseudo, nom, prenom, mdp)VALUES(?, ?, ?, ?)');
            $insertUser->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));
        
        //Récupérer les informations de l'utilisateur
            $recupInfo = $bdd->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?');
            $recupInfo->execute(array($user_lastname, $user_firstname, $user_pseudo));
        
            $getInfoBdd = $recupInfo->fetch();

        //Authentifier l'utilisateur sur le site et recupérer ses données dans bdd en l'affectant dans des variables globales sessions
            $_SESSION['authe'] = true;
            $_SESSION['id'] = $getInfoBdd['id'];
            $_SESSION['lastname'] = $getInfoBdd['nom'];
            $_SESSION['firstname'] = $getInfoBdd['prenom'];
            $_SESSION['pseudo'] = $getInfoBdd['pseudo'];
        
        //rediriger l'utilisateur dans la page d'accueil
            header('location: index.php');
        
        }
        else{
            $errorMsg = "l'utilisateur existe déjà sur le site";
        }
    }
    else{
        $errorMsg = "Veuillez compléter tous les champs...";
        
    }

}



?>