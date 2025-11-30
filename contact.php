<?php
// contact.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic sanitization
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];

    if ($name === '') {
        $errors[] = 'Name is required.';
    }

    if ($email === '') {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if ($message === '') {
        $errors[] = 'Message is required.';
    }

    // If there are errors, show them instead of redirecting
    if (!empty($errors)) {
        echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Form Error</title>';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1"></head><body>';
        echo '<h1>There were problems with your submission:</h1><ul>';
        foreach ($errors as $error) {
            echo '<li>' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</li>';
        }
        echo '</ul><p><a href="index.php#contact">Go back to the contact form</a></p>';
        echo '</body></html>';
        exit;
    }

    // Simulate success (no real email sending)
    header('Location: thank-you.html');
    exit;
}

// If accessed directly, just go back to home
header('Location: index.php');
exit;
