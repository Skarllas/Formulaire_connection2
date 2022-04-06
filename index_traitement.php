<?php

error_reporting(E_ALL);

session_start();
require_once "db_connect.php";
if (!empty($_POST["prenom"]) && (!empty($_POST["nom"]))) {

    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $password = htmlspecialchars($_POST["password"]);





    $insert = $bdd->prepare("INSERT INTO `membres` (`prenom`, `nom`, `password`, `id`) VALUES (:prenom, :nom , :password, NULL)");
    $insert->execute(array(
        "prenom" => $prenom,
        "nom" => $nom,
        "password" => $password
    ));
} else echo("tu n'es pas connecter");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index_traitement.css">
    <title>Document</title>
</head>
<body>
    
Salut <?php echo($prenom) ?>, ton nom est : <?php echo($nom) ?>.
<br>
Ta session est representé par : <?php var_dump($_POST) ?>
</body>
</html>