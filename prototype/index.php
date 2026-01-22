<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #8B4513; /* marron */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            width: 400px;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: none;
            font-size: 16px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            background-color: #654321; /* لون أغمق للبوتون */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #4b2c0d;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold; /* gras */
            font-size: 18px;
        }

        .message.error {
            color: #ff4d4d; /* أحمر للخطأ */
        }

        .message.success {
            color: #00ff00; /* أخضر للنجاح */
        }
    </style>
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
