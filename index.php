<?php

function getMessages()
{
    $message = null;

    if (isset($_POST['nom'])) {
        $message = $_POST['nom'];
    }

    return $message;
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet gaetan</title>
</head>
<body>

<h1>Bonjour <?= getMessages(); ?></h1>

<form action="index.php" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <input type="submit" value="Envoyer">

</body>
</html>