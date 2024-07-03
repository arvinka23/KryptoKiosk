<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "A.KasipourAzbari.inf23@stud.bbbaden.ch";
    $subject = "Kontakt von $name";
    $body = "Name: $name\nEmail: $email\n\nNachricht:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Ihre Nachricht wurde gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
