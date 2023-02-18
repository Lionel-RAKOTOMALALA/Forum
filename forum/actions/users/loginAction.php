<?php
   session_start(); 
    require 'actions/database.php';
    //validation du formulaire
if(isset($_POST['validate'])){
//vérifier si l'user a complété tous les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
        
        //les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        //vérifier si l'utilisateur existe( et est correct)
        $verifyUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $verifyUser->execute(array($user_pseudo));
        
        $infoUser = $verifyUser->fetch(); //affecter les données obténue à partir du requette ci dessus dans le variable infoUser

        if($verifyUser->rowCount() > 0){
        
            //vérifier si le mot de passe est correct
            if(password_verify($user_password, $infoUser['mdp'])){

                //Authentifier l'utilisateur sur le site et recupérer ses données dans bdd en l'affectant dans des variables globales sessions
                $_SESSION['authe'] = true;
                $_SESSION['id'] = $infoUser['id'];
                $_SESSION['lastname'] = $infoUser['nom'];
                $_SESSION['firstname'] = $infoUser['prenom'];
                $_SESSION['pseudo'] = $infoUser['pseudo'];
                header('Location: index.php');
            }else{
                $errorMsg = "Votre mot de passe est incorrect";
            }
        }else{
            $errorMsg = "Votre pseudo est incorrect...";
        }
    }
    else{
        $errorMsg = "Veuillez compléter tous les champs...";
        
    }

}



?>