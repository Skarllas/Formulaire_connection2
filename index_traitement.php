<?php

session_start();
require_once "db_connect.php";


if (!empty($_POST["prenom"]) && (!empty($_POST["nom"])) && (!empty($_POST["password"])) && (!empty($_POST["retype_password"]))) {

    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $password = htmlspecialchars($_POST["password"]);
    $retype_password = htmlspecialchars($_POST["retype_password"]);

    if (($_POST["password"]) === ($_POST["retype_password"])) {

            
        // On hash le mot de passe avec Bcrypt, via un coût de 12
        $cost = ['cost' => 12];
        $password = password_hash($password, PASSWORD_BCRYPT, $cost); 

        var_dump($_POST);
        die();


        $insert = $bdd->prepare("INSERT INTO `membres` (`prenom`, `nom`, `password`, `id`) VALUES (:prenom, :nom , :password, NULL)");
        $insert->execute(array(
            "prenom" => $prenom,
            "nom" => $nom,
            "password" => $password
        ));
    } else echo ("tu n'es pas connecter");
} else header('location: index.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index_traitement.css">
    <title>Document</title>
</head>

<body>

    Salut <?php echo ($prenom) ?>, ton nom est : <?php echo ($nom) ?>.
    <br>
    Ta session est representé par : <?php var_dump($_POST) ?>
</body>

</html>