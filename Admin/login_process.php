<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupère les données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Vérifie les informations d'identification (exemple)
    if ($username === "admin" && $password === "motdepasse") {
        // Authentification réussie, redirige vers la page d'administration
        header("Location: admin.php");
        exit;
    } else {
        // Authentification échouée, affiche un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
