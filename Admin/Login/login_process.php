<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "soslan" && $password === "soslan") {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: ../admin.php");
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

