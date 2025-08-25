<?php
// Contact Form Handler
// Simple PHP script to handle contact form submissions

// Set headers for JSON response
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Configuration - Update these with your details
$to_email = 'connerpangia@gmail.com'; // Your email address
$subject_prefix = 'Website Contact Form: ';

// Function to sanitize input
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

try {
    // Get and sanitize form data
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? sanitize_input($_POST['subject']) : '';
    $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';

    // Validation
    $errors = [];

    if (empty($name)) {
        $errors[] = 'Name is required';
    }

    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!validate_email($email)) {
        $errors[] = 'Valid email is required';
    }

    if (empty($message)) {
        $errors[] = 'Message is required';
    }

    // If there are validation errors, return them
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(['error' => 'Validation failed', 'details' => $errors]);
        exit;
    }

    // Prepare email content
    $email_subject = $subject_prefix . ($subject ? $subject : 'New Message');
    
    $email_body = "New contact form submission from your website:\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Subject: " . ($subject ? $subject : 'No subject') . "\n";
    $email_body .= "Message:\n" . $message . "\n\n";
    $email_body .= "---\n";
    $email_body .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
    $email_body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

    // Email headers
    $headers = [
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/plain; charset=UTF-8'
    ];

    // Attempt to send email
    $mail_sent = mail($to_email, $email_subject, $email_body, implode("\r\n", $headers));

    if ($mail_sent) {
        // Success response
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your message! I\'ll get back to you soon.'
        ]);
    } else {
        // Email sending failed
        http_response_code(500);
        echo json_encode([
            'error' => 'Failed to send message. Please try again or email me directly.'
        ]);
    }

} catch (Exception $e) {
    // Handle any unexpected errors
    http_response_code(500);
    echo json_encode([
        'error' => 'An unexpected error occurred. Please try again later.'
    ]);
    
    // Log the error (in production, you'd want proper logging)
    error_log('Contact form error: ' . $e->getMessage());
}
?>