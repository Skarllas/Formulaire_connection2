<?php
error_reporting(E_ALL);
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
    <h1>TEST INSERT</h1>

    <form action="index_traitement.php" method="POST">

        <div> <input name="prenom" type="text" placeholder="prenom"></div>
        <br>
        <div> <input name="nom" type="text" placeholder="nom"></div>
        <br>
        <div> <button type="submit">Envoye</button></div>


    </form>



</body>

</html>