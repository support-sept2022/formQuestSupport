<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$data = array_map('trim', $_POST);

if (!isset($data['user_name']) || empty($data['user_name']))
    $errors[] = "Le nom est obligatoire.";
if (!isset($data['user_firstName']) || empty($data['user_firstName']))
    $errors[] = "Le prénom est obligatoire.";
if (!isset($data['subject']) || empty($data['subject']))
    $errors[] = "Le sujet est obligatoire.";
if (!isset($data['user_email']) || empty($data['user_email']))
    $errors[] = "L'e-mail est obligatoire.";
if(!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL))
    $errors[] = "Le format de l'e-mail est invalide.";
if (!isset($data['user_message']) || empty($data['user_message']))
    $errors[] = "Le message est obligatoire.";
if (!isset($data['user_phoneNumber']) || empty($data['user_phoneNumber']))
    $errors[] = "Le tél est obligatoire.";

    if (empty($errors)) {
        header('location: thank.php');
    }

}

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

<?php
        if (count($errors) > 0) : ?>
        <ul>
            <?php foreach($errors as $error) : ?>
                <li><?= $error ?></li>
                <?php endforeach; ?>
        </ul>
        <?php endif; ?>

    <form  action=""  method="post">
        <div>
            <label  for="name">Nom :</label>
            <input  type="text"  id="name"  name="user_name" required>
        </div>
        <div>
            <label  for="firstName">prénom :</label>
            <input  type="text"  id="firstName"  name="user_firstName" required>
        </div>
        <div>
            <label  for="courriel">e-mail :</label>
            <input  type="email"  id="courriel"  name="user_email" required>
        </div>
        <div>
            <label  for="phoneNumber">tel :</label>
            <input  type="tel"  id="phoneNumber"  name="user_phoneNumber" required>
        </div>
        <div>
            <label for="subject">sujet :</label>

            <select name="subject" id="subject" required>
                <option value="">--Sélectionner un sujet--</option>
                <option value="sujet 1">sujet 1</option>
                <option value="sujet 2">sujet 2</option>
            </select>

        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message" required></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</main>
<script src="index.js"></script>
</body>
</html>
