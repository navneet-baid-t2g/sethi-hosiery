<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false]);
        exit;
    }

    $to = 'info@sethihosiery.com'; 
    $subject = 'New Newsletter Subscription';
    $message = "New subscription:\nEmail: $email";
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n";

    $success = mail($to, $subject, $message, $headers);

    // Also send confirmation to user
    if ($success) {
        $userSubject = 'Subscription Confirmation';
        $userMessage = 'Thank you for subscribing to our newsletter!';
        mail($email, $userSubject, $userMessage, $headers);
    }

    echo json_encode(['success' => $success]);
}
?>
