<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email
    $to = "your_email@example.com"; // Replace with your actual email address

    // Email subject
    $subject = "New Contact Form Submission";

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Name: $name\nEmail: $email\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email"; 

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your message! We'll get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>