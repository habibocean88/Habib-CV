<?php
// =====================================================
// Contact form handler
// বাংলা নির্দেশনা:
// 1) নিচের $to ইমেইল ঠিকানা আপনার নিজের receiving email দিন।
// 2) Hosting-এ PHP mail() সঠিকভাবে configured থাকতে হবে।
// 3) Local XAMPP-এ mail configuration না থাকলে form email পাঠাবে না।
// =====================================================
$to = 'habibkbd@gmail.com';

function showMessage(string $title, string $message, bool $success = false): void {
    $color = $success ? '#087443' : '#b42318';
    echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>' .
         htmlspecialchars($title, ENT_QUOTES, 'UTF-8') .
         '</title><style>body{font-family:Arial,sans-serif;background:#f3f7fd;margin:0;min-height:100vh;display:grid;place-items:center;color:#15243d}.box{width:min(520px,88%);padding:32px;background:#fff;border-radius:14px;box-shadow:0 12px 35px #12345618}.box h1{color:' . $color . ';font-size:24px}.box p{line-height:1.7;color:#526178}.box a{display:inline-block;margin-top:12px;padding:11px 17px;border-radius:8px;background:#0757d5;color:#fff;text-decoration:none}</style></head><body><main class="box"><h1>' .
         htmlspecialchars($title, ENT_QUOTES, 'UTF-8') .
         '</h1><p>' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') .
         '</p><a href="index.php#contact">Return to Portfolio</a></main></body></html>';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

// Honeypot spam field: real users should leave it empty
if (!empty($_POST['website'] ?? '')) {
    showMessage('Message received', 'Thank you for contacting me.', true);
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? 'Website portfolio enquiry'));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    showMessage('Please check your details', 'Enter your name, a valid email address, and your message.');
}
if (mb_strlen($name) > 100 || mb_strlen($email) > 150 || mb_strlen($subject) > 150 || mb_strlen($message) > 5000) {
    showMessage('Message too long', 'Please shorten your message and try again.');
}

// Prevent header injection
$subject = str_replace(["\r", "\n"], ' ', $subject);
$nameSafe = str_replace(["\r", "\n"], ' ', $name);
$mailSubject = 'Portfolio enquiry: ' . $subject;
$mailBody = "Name: {$nameSafe}\nEmail: {$email}\nSubject: {$subject}\n\nMessage:\n{$message}";
$headers = "From: Portfolio Website <no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ">\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (function_exists('mail') && mail($to, $mailSubject, $mailBody, $headers)) {
    showMessage('Thank you!', 'Your message has been sent successfully. I will get back to you as soon as possible.', true);
}
showMessage('Email could not be sent', 'The website received your form, but server email is not configured or delivery failed. Please contact me directly at ' . $to . '.');
