<?php

error_reporting(E_ALL);

session_start();
require_once "db_connect.php";
if (!empty($_POST["prenom"]) && (!empty($_POST["nom"]))) {

    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);

    $insert = $bdd->prepare("INSERT INTO `membres` (`prenom`, `nom`, `id`) VALUES (:prenom, :nom , NULL)");
    $insert->execute(array(
        "prenom" => $prenom,
        "nom" => $nom
    ));
} else echo("tu n'es pas connecter");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index_traitement.php">
    <title>Document</title>
</head>
<body>
    
Salut <?php echo($prenom) ?>, ton nom est : <?php echo($nom) ?>.
<br>
Ta session est representé par : <?php var_dump($_POST) ?>
</body>
</html>