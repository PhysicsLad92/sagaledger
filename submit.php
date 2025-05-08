<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = "you@example.com";  // Replace with your email
    $subject = "New Contact Submission from SagaLedger";
    $body = "Name: $name\nContact: $email\n\nMessage:\n$message";
    $headers = "From: contact@sagaledger.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us.";
    } else {
        echo "There was a problem sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
