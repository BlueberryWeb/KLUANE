
<?php
/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */


$name = trim($_POST['name']);
$Lname = trim($_POST['Lname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$country = trim($_POST['country']);
$city = trim($_POST['city']);
$position = trim($_POST['position']);
$mensaje = trim($_POST['mensaje']);


// Import PHPMailer classes into the global namespace.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require './vendor/autoload.php';

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender = 'noreply.blueberry@gmail.com';
$senderName = 'KLUANE PAGE';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
$recipient1 = 'benjamin1berry@gmail.com';
$recipient3 = 'benjamin1berry@gmail.com';

// Replace smtp_username with your Amazon SES SMTP user name.
$usernameSmtp = 'noreply.blueberry@gmail.com';

// Replace smtp_password with your Amazon SES SMTP password.
$passwordSmtp = 'Blueberry0707';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$host = 'smtp.gmail.com';
$port = 587;

// The subject line of the email
$subject = 'KLUANE PAGE';

// The plain-text body of the email
$bodyText =  "mAIL";

// The HTML-formatted body of the email
$bodyHtml = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <meta name="x-apple-disable-message-reformatting"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
  <title></title>
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff; font-family: sans-serif;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:0px solid #cccccc;border-spacing:0;text-align:left; font-family: sans-serif;">
          <tr>
            <td align="left" style="padding:10px 0 30px 0; font-family: sans-serif;">
              <img src="https://i.postimg.cc/jjTKt4LQ/Logo-KLUANE-azul.gif" alt="KLUANE DRILLING LTD." width="120" style="height:auto;display:block;" />
              <hr>
            </td>
          </tr>
          <tr>
            <td style="padding:0px 30px 42px 20px; font-family: sans-serif;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0; font-family: sans-serif;">
                <tr>
                  <td style="padding:0 0 36px 0;color:#153643; font-family: sans-serif;">
                    <center>
                      <h1 style="color: #122048; font-size: 4rem;">NEW CONTACT</h1>
                      <h4 style="margin:0 0 12px 0;font-size: 20px; text-align: center; font-family:, sans-serif;">A new lead has been captured in <b style="font-weight: 600; color: black;">KLUANE DRILLING LTD.</b></h4>
                      <ul style="color: #aba9a8; list-style: none; text-align: center;">
                        <li style="margin-bottom: 10px;">NAMES: ' . $name . '</li>
                        <li style="margin-bottom: 10px;">LAST NAME: ' . $Lname . '</li>
                        <li style="margin-bottom: 10px;">EMAIL: ' . $email . '</li>
                        <li style="margin-bottom: 10px;">PHONE: ' . $phone . '</li>
                        <li style="margin-bottom: 10px;">COUNTRY: ' . $country . '</li>
                        <li style="margin-bottom: 10px;">CITY: ' . $city . '</li>
                        <li style="margin-bottom: 10px;">POSITION OF INTEREST:' . $position . '</li>
                        <li style="margin-bottom: 10px;">COMMENTS: ' . $mensaje . '</li>
                      </ul>
                    </center>
                    </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:#000000; font-family: sans-serif;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px; font-family:  sans-serif;">
                <tr>
                  <td style="padding:0;width:50%; font-family: sans-serif;" align="right">
                    <img src="https://i.postimg.cc/4dpfLLNY/materialized-blueberry.gif" alt="MATERIALIZED BY Blueberry"/>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
    
    ';

$mail = new PHPMailer(true);

try {
  // Specify the SMTP settings.
  $mail->isSMTP();
  $mail->setFrom($sender, $senderName);
  $mail->Username   = $usernameSmtp;
  $mail->From   = $usernameSmtp;
  $mail->Password   = $passwordSmtp;
  $mail->Host       = $host;
  $mail->Port       = $port;
  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = 'tls';
  // $mail->SMTPDebug = true;
  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

  // Specify the message recipients.
  if($country == 'CANADA'){
    $mail->addAddress($recipient1);
  }elseif($country == 'AFRICA'){
    $mail->addAddress($recipient3);
  }
 
  // You can also add CC, BCC, and additional To recipients here.

  // Specify the content of the message.
  $mail->isHTML(true);
  $mail->Subject    = $subject;
  $mail->Body       = $bodyHtml;
  $mail->AltBody    = $bodyText;
  $mail->Send();
  sleep(5);
  header("Location: {$_SERVER['HTTP_REFERER']}");
} catch (phpmailerException $e) {
  echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
} catch (Exception $e) {
  echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
}

?>












