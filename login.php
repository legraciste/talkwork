<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once 'dbConnection.php';
$password = $_POST['password'];
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
$result = mysqli_query($con, "SELECT name FROM utilisateurs WHERE password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
    }
    $_SESSION["nom"]     = $nom;
    header("location:account.php?q=1");
} else
    header("location:$ref?w=Wrong Username or Password");


?>