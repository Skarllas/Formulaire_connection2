<?php

session_start();
require_once('db_connect.php')

?>

<?php

if (!isset($_POST["email"]) && (!isset($_POST["Password"]))) {

    $email = htmlspecialchars($_POST["email"]);
    $Password = htmlspecialchars($_POST["Password"]);



    $check = $bdd->prepare("SELECT email, password FROM membres WHERE email = ?");
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();


    if ($row == 1) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
        }
    }
} else header('location:index.php')


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Salut <?php echo ($email) ?>
</body>

</html>