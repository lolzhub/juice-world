<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'pwnxd@pm.me';

$email_subject = 'New submission form';

$email_body = "User name: $name.\n".
                "User email: $visitor.\n".
                "User subject: $subject.\n".
                "User message: $message.\n";

$to = 'pwnxd@pm.me';

$headers = "From: $email_from \r\n";

$headers .="Reply to: $visitor \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")


?>