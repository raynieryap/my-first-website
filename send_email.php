<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "raynieryap@gmail.com";

    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from $name ($email):\n\n$message";

    $headers = "From: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        // Email sent successfully
        echo json_encode(array('status' => 'success', 'message' => 'Email has been sent.'));
    } else {
        // Failed to send email
        echo json_encode(array('status' => 'error', 'message' => 'Failed to send email.'));
    }
}
?>
