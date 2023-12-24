<?php
header("location:TEST.php");
session_start();

// Connexion à la base de données MySQL
$bdd = new PDO('mysql:host=localhost;dbname=talkwork', 'root', '');

// Vérifier les identifiants de connexion
if(isset($_POST['password'])) {
    $password = $_POST['password'];

    $query = $bdd->prepare('SELECT nom,prenom FROM utilisateurs WHERE password = :password');
    $query->execute(array(
        'password' => $password
    ));

    $user = $query->fetch();

    if($user) {
        // Utilisateur connecté
        $_SESSION['utilisateur'] = $user['nom'];
        $_SESSION['utilisateur'] .= " ";
        $_SESSION['utilisateur'] .= $user['prenom'];
    } else {
        echo 'Identifiants incorrects';
    }
}
?>