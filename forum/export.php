<?php
     require "./actions/database.php";
    $imgInBdd = $bdd->prepare('SELECT * FROM image WHERE id=? LIMIT 1');
    // $imgInBdd->setFetchMode (PDO::FETCH_ASSOC);
    $imgInBdd->execute(array($_GET['id']));
    $tab = $imgInBdd->fetch();
    echo $tab['bin'];
    // $_GET['id'] = $tab['id'];
    ?>