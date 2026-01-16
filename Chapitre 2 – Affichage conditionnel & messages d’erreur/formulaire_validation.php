<?php
$erreurs = [];
$nom = $email = "" ;
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    
    if(empty($nom)){
        $erreurs[] = "le nom est  obligatoire." ;
    }
    if(empty($email)){
        $erreurs[] = "l'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "l'email n'est pas valide.";
    }
    if(empty($erreurs)) {
        echo "<p style='color:green;'>formulaire envoyé avec succés ! </p>" ;
    }     
}
?>
<form method= "POST" action="">
    <label>nom: </label>
    <input type="text" name="nom" value="<?=htmlspecialchars($nom)?>"><br>
    
    <label>Email :</label>
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>"><br>
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($erreurs)) {
    echo "<ul style='color:red;'>";
    foreach ($erreurs as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
?>
