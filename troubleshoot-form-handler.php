<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $issue_type = $_POST['issue_type'];
  $description = $_POST['description'];
  $attachment = $_FILES['attachment'];

  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Issue Type: $issue_type<br>";
  echo "Description: $description<br>";

  if ($attachment['error'] == 0) {
    $file_name = $attachment['name'];
    $file_tmp_name = $attachment['tmp_name'];
    $file_size = $attachment['size'];
    $file_type = $attachment['type'];
    echo "Attachment: $file_name ($file_type, $file_size bytes)<br>";
  }

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp of your email, e.g. smtp-mail.outlook.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'EMAIL THAT WILL RECIEVE FORM';
  $mail->Password = 'EMAIL PASSWORD';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->setFrom('EMAIL THAT WILL RECIEVE FORM');
  $mail->addAddress('EMAIL THAT WILL RECIEVE FORM');
  $mail->Subject = 'Troubleshoot Form Submission';
  $mail->Body = "Name: $name \n Email: $email \n Issue Type: $issue_type \n Description: $description";
  if ($attachment['error'] == 0) {
    $mail->addAttachment($file_tmp_name, $file_name);
  }
  $mail->send();
}
