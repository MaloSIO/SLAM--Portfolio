<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validez l'adresse e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Adresse e-mail de destination
        $destinataire = "malo.devic@sts-sio-caen.info";

        // Sujet de l'e-mail
        $sujet = "Vous avez une demande d'ami de $nom";

        // Adresse e-mail de l'expéditeur
        $expediteur = "malo.devic@sts-sio-caen.info"; // Remplacez par votre propre adresse e-mail

        // En-têtes de l'e-mail
        $headers = "From: $expediteur\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Envoi de l'e-mail et gestion des erreurs
        $envoi = mail($destinataire, $sujet, $message, $headers);
        
        if ($envoi) {
            echo "Tada, c'est fait ! Maintenant, tu auras une réponse dans 30 ans, 6 mois, 4 jours et 30 secondes.";
        } else {
            echo "Ah mince, j'ai pas pu te l'envoyer. La bonne nouvelle, c'est que t'as tout perdu !";
        }
    } else {
        echo "Tu t'es gourré sur ton mail. Essaye encore !";
    }
}
?>