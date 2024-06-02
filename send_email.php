<?php
// Check if the form fields are set and not empty
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) &&
    !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    // Sanitize form data to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "admin@topg.eu.org";

    // Set the email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Attempt to send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "success";
    } else {
        // Error sending email
        echo "error";
    }
} else {
    // Form fields are not set or empty
    echo "error";
}
?>