<?php
/**
 * Project portfolio
 * request.php
 * 2016.06.06 10:53
 * 
 * @author Domas <sungaila.d@gmail.com>
 */

ini_set('log_errors', TRUE);
ini_set('error_log', dirname(__FILE__) . '/log.txt');
error_reporting(E_ERROR);

include 'functions.php';

$primary_email = "info@upsony.com";
//$stringg_email = Constants::EMAIL;

//data_log($_POST);

$email = isset($_POST['email']) ? trim($_POST['email']) : null;
$name = isset($_POST['name']) ? trim($_POST['name']) : null;
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;
$message = isset($_POST['message']) ? trim($_POST['message']) : null;

$valid = true;
$success = false;
$alerts = array();

if (empty($email)) {
    $valid = false;
    $alerts[] = 'Please insert a valid email address!';
}

if (empty($message)) {
    $valid = false;
    $alerts[] = 'Please insert a message!';
}

if ($valid) {
    $headers = "From: $email\r\n" .
        "Reply-To: $email\r\n" .
        "X-Mailer: PHP/" . phpversion();
    $text = "El. paštas: $email\r\nVardas: $name\r\nTelefonas: $phone\r\nKlausimas:\r\n$message";
    if (mail($primary_email, "Question for Upsony", $text, $headers)) {
        $success = true;
        $alerts[] = 'Thank you for the question. We will contact you soon.';
    } else {
        $success = false;
        $alerts[] = "Unable to send your question. Please contact us by email <a href='mailto:$primary_email'>$primary_email</a>.";
    }
}

//data_log($success);
//data_log($alerts);

sleep(1);

$response = new stdClass();
$response->status = $success ? 'success' : 'failed';
$response->message = implode(' ', $alerts);
echo json_encode($response);