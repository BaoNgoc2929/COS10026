<?php 
session_start();

$username = $_POST ["username"];
$password = $_POST ["password"];
$token = $_POST ["token"];
if ($username == "Tran Bao Ngoc" && $password == "T106390804") {
    $_SESSION ["user"] = $username;
    $_SESSION["token"] = $token;
    header ("Location: welcome.php");
    exit;}
else {
    echo "Invalid login. <a href = 'login.php'> Try again </a>";
}
?>