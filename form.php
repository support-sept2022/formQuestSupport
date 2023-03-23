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
    <form  action="message.php"  method="post">
        <div>
            <label  for="name">Nom :</label>
            <input  type="text"  id="name"  name="user_name">
        </div>
        <div>
            <label  for="firstName">prénom :</label>
            <input  type="text"  id="firstName"  name="user_firstName">
        </div>
        <div>
            <label  for="courriel">e-mail :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="phoneNumber">tel :</label>
            <input  type="tel"  id="phoneNumber"  name="user_phoneNumber">
        </div>
        <div>
            <label for="subject">sujet :</label>

            <select name="subject" id="subject">
                <option value="">--Sélectionner un sujet--</option>
                <option value="sujet 1">sujet 1</option>
                <option value="sujet 2">sujet 2</option>
            </select>

        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</main>
<script src="index.js"></script>
</body>
</html>
