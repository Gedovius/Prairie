<?php

//var_dump($_POST);
$username = $_POST['username'];
$email = $_POST['email'];
$keypass = $_POST['keypass'];

// se connecter à la BDD
try {

    $pdo = new PDO('mysql:host=localhost;dbname-atelier_prairie','gedovius','Gedo1990%');
} catch (PDOException $e) {
    echo 'connexion échouée';
}
// insérer la ligne utilisateur en BDD
$sql = "INSERT INTO user (user_name, user_email, user_keypass) VALUES (?,?,?)";
$preparation = $pdo->prepare($sql);
$preparation->bindParam(1, $username);
$preparation->bindParam(2, $email);
$preparation->bindParam(3, $keypass);
$preparation->execute();




