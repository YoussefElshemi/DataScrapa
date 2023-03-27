<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'your-email@example.com';

    // Set the email subject
    $subject = 'New contact form submission';

    // Build the email message
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'OK';
    } else {
        http_response_code(500);
        echo 'Unable to send email';
    }
}

?>
