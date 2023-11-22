<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $destinataire = "votre_email@example.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message de $nom";

    // En-têtes de l'e-mail
    $headers = "De: $email\r\n";
    $headers .= "Répondre à: $email\r\n";

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $message, $headers);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
} else {
    // Redirection en cas d'accès direct au script
    header("Location: index.html");
}
?>