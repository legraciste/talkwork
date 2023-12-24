<?php
    include_once 'dbConnection.php';
    ob_start();
    $nom     = $_POST['nom'];
    $email   = $_POST['email'];
    $message= $_POST['message'];
    $submit = isset($_POST['submit']) ? $_POST['submit'] : 0;
    $nom     = stripslashes($nom);
    $email   = stripslashes($email);
    $message= stripslashes($message);  
    $q2 = mysqli_query($con, "INSERT INTO contact VALUES  (NULL,'$nom', '$email', '$message')");
    header("location:index.php?submit=<?=$submit?>");
?>