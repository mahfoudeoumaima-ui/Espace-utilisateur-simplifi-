<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulle</title>
</head>
<body>
    <form method="post" action="">
        <label for="nom">entre votre nom</label>
        <input type="text" name="nom" id="text"><br> <br>
        <label for="email">entre votre email</label>
        <input type="email" id="email" name="email"><br> <br>
        <label for="message">message</label>
        <textarea name="message" id="message"> </textarea> <br> <br>
        <button type="submit"> envoyer le message</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom=trim($_POST["nom"]);
        $email = trim($_POST['email']);
        $message = trim($_POST["message"]) ;

        if(empty("$nom") || empty("$email") || empty("$message")){
            echo "remplissez tous les champs";
        } elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            echo "email invalide";
        } else {
            echo "merci $nom , message envoyer" ;
        }
    }
    ?>
</body>
</html>