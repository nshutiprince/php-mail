<?php
// Recipient email address
$to = "recipient@example.com";

// Subject of the email
$subject = "Hello, World!";

// Message content
$message = "This is a test email sent from PHP.";

// Additional headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";

// Attempt to send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email delivery failed. Please check your configuration.";
}
