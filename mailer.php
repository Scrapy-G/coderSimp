<?php
//ini_set( 'display_errors', 1 );
//error_reporting( E_ALL );

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!isset($name) || !isset($email) || !isset($message)){
    header("HTTP/1.1 400 BAD REQUEST");
    echo("All fields are required: name, email, message");
    exit(1);
}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
header('Access-Control-Allow-Methods:  POST, PUT, GET');

$from = "chad@codersimp.com";
$to = "98scrapyg@gmail.com,wh3nitsdark0ut@gmail.com,chad@codersimp.com";
$subject = "New Message - coderSimp (from: " . $name . ")";
$body = $message . "\n\n" . "Email: " . $email;
$headers = "From:" . $from;
if(mail($to, $subject, $body, $headers)) {
    echo "The email message was sent.";
} else {
    echo "The email message was not sent.";
}
?>