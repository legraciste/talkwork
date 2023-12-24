<?php
include_once 'dbConnection.php';
$ref      = @$_GET['q'];
$nom = $_POST['nom'];
$password = $_POST['password'];

$nom = stripslashes($nom);
$nom = addslashes($nom);
$password = stripslashes($password);
$password = addslashes($password);
$result = mysqli_query($con, "SELECT admin_nom FROM administrateur WHERE admin_nom = '$nom' and admin_password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    session_start();
    if (isset($_SESSION['nom'])) {
        session_unset();
    }
    $_SESSION["name"]     = 'Admin';
    $_SESSION["key"]      = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39';
    $_SESSION["nom"] = $nom;
    header("location:dash.php?q=0");
} else
    header("location:$ref?w=Warning : Access denied");
?>