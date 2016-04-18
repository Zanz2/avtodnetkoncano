<?php
include 'pdo-connect.php';
$subject = $_POST['subject1'];
$message = $_POST['message1'];

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$stavek = $baza->prepare("SELECT * FROM users WHERE news NOT NULL");
$stavek->execute();

$row = $stavek->fetchall();

foreach ($row as $value) 
{
    if(mail($value['email'], $subject, $message, $headers))
    {
        echo "Novice poslane";
    }
    else
    {
        echo 'Novice niso poslane';
    }
}

