<?php
$name = $_POST['user_name'];
$lastName = $_POST['user_firstName'];
$subject = $_POST['subject'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
<main>
    <div>
        <p>
            Merci <?= $name ?> <?= $lastName ?> de nous avoir contacté à propos de <?= $subject ?>.
            Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?=  $_POST['user_phoneNumber'] ?> dans les
            plus brefs délais pour traiter votre demande :
            <?= $message ?>
        </p>
    </div>
</main>
</body>
</html>
