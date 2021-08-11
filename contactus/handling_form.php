<?php

// use PHPMailer\PHPMailer\PHPMailer;

// require_once 'PHPMailer/Exception.php';
// require_once 'PHPMailer/PHPMailer.php';
// require_once 'PHPMailer/SMTP.php';

// $mail = new PHPMailer(true);
// $mail->CharSet = 'UTF-8';
// $mail->setLanguage('ru', 'phpmailer/language/');
// $result = '';

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];



//     $mail->isSMTP();
//     $mail->Host = 'mail.alyans.kz';
//     $mail->SMTPDebug  = 3;
//     $mail->SMTPAuth = true;
//     $mail->SMTPOptions;
//     $mail->Username = 'alyansSk@alyans.kz';
//     $mail->Password = 'Koleni123!';
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = '465';
//     $mail->setFrom($_POST['email']);
//     $mail->addAddress('alyansSk@alyans.kz');
//     $mail->SMTPOptions = array(
//         'ssl' => array(
//             'verify_peer'  => false,
//             'verify_peer_name'  => false,
//             'allow_self_signed' => true
//         )
//     );

//     $mail->isHTML(true);
//     $mail->Subject = 'Message Received (Contact Page)';
//     $mail->Body = "<h3>Name : $name <br>Email: $email <br>Telephon: $tel  <br>Service: $service</h3>";

//     if (!$mail->send()) {
//         $result = "Something Went Wrong";
//     } else {
//         echo "<script>alert('Спасибо за то, что обратились к нам. В течении 2 часов наши сотрудники свяжуться с вами.');
//                    window.location='index.php';</script>";
//     }
// }
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';



$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$result = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tema = $_POST['tema'];
    $message = $_POST['message'];



    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPOptions;
    $mail->Username = 'timurulysultan@gmail.com';
    $mail->Password = 'koleni123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';
    $mail->setFrom($_POST['email']);
    $mail->addAddress('timurulysultan@gmail.com');
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer'  => false,
    //         'verify_peer_name'  => false,
    //         'allow_self_signed' => true
    //     )
    // );

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Telephon: $tema  <br>Service: $message</h3>";

    if (!$mail->send()) {
        $result = "Something Went Wrong";
    } else {
        echo "<script>alert('Спасибо за то, что обратились к нам. В течении 2 часов наши сотрудники свяжуться с вами.');
                   window.location='contact.php';</script>";
                  
    }
}
