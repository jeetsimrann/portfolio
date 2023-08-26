<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email recipient
    $recipient = "s99chd@hotmail.com";
    $subject = "New Message from $name";
    $headers = "From: $email";

    // Sending the email
    mail($recipient, $subject, $message, $headers);

    // Redirect to a thank you page after sending
    header('Location: thankyou.html');
}
?>
