<?php
/**
 * Project portfolio
 * request.php
 * 2016.06.06 10:53
 * 
 * @author Domas  >
 */

ini_set('log_errors', TRUE);
ini_set('error_log', dirname(__FILE__) . '/log.txt');
error_reporting(E_ERROR);

include 'functions.php';

$primary_email = "info@ulu.lt";
//$stringg_email = Constants::EMAIL;

//data_log($_POST);

$email = isset($_POST['email']) ? trim($_POST['email']) : null;
$name = isset($_POST['name']) ? trim($_POST['name']) : null;
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;
$message = isset($_POST['message']) ? trim($_POST['message']) : null;

$valid = true;
$success = false;
$alerts = array();

// // ar ne rusai - tikrina ar teksta nera .ru  !!!minussas a.ruslanas@a.lt
// if (empty($email) || isEmailRUSIAN($email)) {
//     $valid = false; 
//     $alerts[] = 'Please insert a email address!  (email can\'t contain  ".ru" charakters. Sorry, we get a lot of spam from Russia)  ';  //  veikia  zinute
// }

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
    if (mail($primary_email, "Question for Ulu", $text, $headers)) {
        $success = true;
        $alerts[] = 'Thank you for the question. We will contact you soon.';
    } else {
        $success = false;
        $alerts[] = "Unable to send your question. Please contact us by email <a href='mailto:$primary_email'>$primary_email</a>.";
    }
}




// BANDOM APSIGINTI NUO RUSU!--------
// f-ja tikrina ar VISAME tekste nera .ru :/   Deja tikrina ne tik galune !!!minussas a.ruslanas@a.lt
// !sprendimas i HTML <input ideti:      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+[^'.ru|^'.RU]$"  title="Email can\'t  be registered in Russia. Sorry, we get a lot of spam from Russia"    [a-z0-9._%+-]+@[a-z0-9.-]+(.ru$)

function isEmailRUSIAN($email) {
    $email = strtolower($email);
    //    $temp = explode(".", $email) ;
    //    foreach($temp as $part) {
    //        if ( $part == ".ru"  ) {
    //            return true;
    //        }
    //    }
    //    return false;
    if (  strpos($email, '.ru')  > 0  ) {
        return true;
    }
    else {
        return false;
    }
}



//data_log($success);
//data_log($alerts);

sleep(1);

$response = new stdClass();
$response->status = $success ? 'success' : 'failed';
$response->message = implode(' ', $alerts);
echo json_encode($response);