<?php

session_start();
require_once "db_connect.php";


if (!empty($_POST["prenom"]) && (!empty($_POST["nom"]))  && (!empty($_POST["email"]))  && (!empty($_POST["date"])) && (!empty($_POST["password"])) && (!empty($_POST["retype_password"]))) {


    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $retype_password = htmlspecialchars($_POST["retype_password"]);
    $date = htmlspecialchars($_POST["date"]);



    $check = $bdd->prepare("SELECT `prenom`, `email`, password FROM membres WHERE email = ?");
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    $email = strtolower($email);


    if ($row == 0) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (($_POST["password"]) === ($_POST["retype_password"])) {

                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);


                $insert = $bdd->prepare("INSERT INTO `membres` (`prenom`, `nom`, `email`, `date`, `password`, `id`) VALUES (:prenom, :nom, :email, :date, :password, NULL)");
                $insert->execute(array(
                    "prenom" => $prenom,
                    "nom" => $nom,
                    "email" => $email,
                    "password" => $password,
                    "date" => $date
                ));
            } else echo ("tu n'es pas connecter");
        } else header('location: index.php');
    } else header('location: index.php');
} else header('location: index.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index_traitement.css">
    <title>Document</title>
</head>

<body>

    <h1>Page de connexion</h1>
    <form action="connexion.php" method="POST">

        <input type="email" name="email" placeholder="email">
        <input type="password" name="Password" placeholder="password">

        <button type="submit">Se connecter</button>
    </form>
</body>

</html>