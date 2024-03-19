<?php
// Récupérer les informations de la commande depuis le formulaire ou la base de données
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$service = $_POST['service'];

// Construire le contenu de l'e-mail
$message = "Nouvelle commande reçue :\n";
$message .= "Nom : " . $nom . "\n";
$message .= "Adresse : " . $adresse . "\n";
$message .= "Téléphone : " . $telephone . "\n";
$message .= "Service choisi : " . $service . "\n";

// Envoyer l'e-mail
$destinataire = "robensonmerdelus07@gmail.com"; // Remplacez par votre adresse e-mail
$sujet = "Nouvelle commande sur votre site";
$headers = "From: robensonmerdelus07@gmail.com"; // Remplacez par votre adresse e-mail

// Utilisation de la fonction mail() pour envoyer l'e-mail
mail($destinataire, $sujet, $message, $headers);

// Redirection vers une page de confirmation ou autre
header("Location: confirmation.html");
?>
