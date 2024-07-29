<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Configuration de l'email (remplacez par vos propres paramètres)
    $to = "your-email@example.com";
    $subject = "Feedback de $name";
    $message = "Nom: $name\nEmail: $email\nCommentaires: $feedback";
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Merci pour votre retour !";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
