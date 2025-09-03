<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "luis.s.fernandes27@hotmail.com"; // <-- change this to your email
    $subject = "New contact from website";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your message has been sent successfully.</h2>";
    } else {
        echo "<h2>Sorry, there was an error sending your message. Please try again later.</h2>";
    }
}
?>
