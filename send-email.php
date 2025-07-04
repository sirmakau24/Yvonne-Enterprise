<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Your email
    $to = "kaveeyvonne@gmail.com";

    // Subject
    $subject = "New Contact Form Submission";

    // Compose the email body
    $body = "You received a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
