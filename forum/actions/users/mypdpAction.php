<?php
session_start();
require "./actions/database.php";

    $getImgInBdd = $bdd->query('SELECT * FROM image');
    $pdp = $getImgInBdd->fetch();
    echo $pdp['bin'];
?>