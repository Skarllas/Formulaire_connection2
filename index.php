<?php
session_start();
require "db_connect.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>entrainement insert</title>
</head>

<body>

    <div id="totoa">
        <h1>Inscription</h1>

    </div>

    <div id="toto">
        <form action="index_traitement.php" method="POST">

            <div> <input name="prenom" type="text" placeholder="prenom"></div>
            <br>
            <div> <input name="nom" type="text" placeholder="nom"></div>
            <br>
            <div> <input name="email" type="text" placeholder="email"></div>
            <br>
            <div> <input name="password" type="text" placeholder="password"></div>
            <br>
            <div> <input name="retype_password" type="text" placeholder="retype_password"></div>
            <br>
            <div> <button type="submit">S'inscrire</button></div>


        </form>
    </div>




</body>

</html>