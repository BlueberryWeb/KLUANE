
<?php
$name = trim($_POST['name']);
$Lname = trim($_POST['Lname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$country = trim($_POST['country']);
$city = trim($_POST['city']);
$position = trim($_POST['position']);
$mensaje = trim($_POST['mensaje']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

$sender = 'noreply.kluane@gmail.com';
$senderName = 'Nuevo contacto de kluane.ca';
$recipientcanada = 'info@kluanedrilling.ca';
$recipientmexico = 'victoria@kluanedrilling.ca';
$recipientcentro ='info@kluanedrilling.ca';
$recipientcolombia ='jhon.puerta@kluanecolombia.com';
$recipientecuador = 'carlos.vaca@kluane-ecuador.ec';
$recipientchile = 'victoria@kluanedrilling.ca';
$recipientperu = 'jhon.puerta@kluanecolombia.com';
$recipientnicaragua = 'juan.zapata@kluanedrilling.ca';


$usernameSmtp = 'noreply.kluane@gmail.com';
$passwordSmtp = 'drosgglnbdfhmxye';
$configurationSet = 'ConfigSet';
$host = 'smtp.gmail.com';
$port = 587;
$subject = 'Mensaje de textilo en la web';
$bodyText =  "Correo de la web";
$bodyHtml = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <meta name="x-apple-disable-message-reformatting"/>
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:0px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <td align="left" style="padding:10px 0 30px 0; ">
              <img src="https://i.postimg.cc/vHX6QB70/Bueberrypostivo.jpg" alt=":Logo Blueberry" width="200" style="height:auto;display:block;" />
              <hr>
            </td>
          </tr>
          <tr>
            <td style="padding:0px 30px 42px 20px; ">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0; ">
                <tr>
                  <td style="padding:0 0 36px 0;color:#153643;">
                    <img src="https://i.postimg.cc/k4Jn15MD/Nuevo-Contacto.png" alt="NUEVO CONTACTO" style="max-width: 500px; margin-left: 50px; margin-bottom: 60px; margin-top: 20px;"/>
                      <ul style="color: #808080; list-style: none;">
                        <li><h4 style="margin:0 0 12px 0;font-size: 20px;  margin-bottom: 50px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">Se ha capturado un nuevo lead :</h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"><h4><b style="color: #666666;">Name: </b>  ' . $name . ' </h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"><h4><b style="color: #666666;">Last Name: </b>  ' . $Lname . ' </h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"> <h4><b style="color: #666666;">Email: </b>  ' . $email . '</h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"> <h4><b style="color: #666666;">Phone:</b>  ' . $phone . '</h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"> <h4><b style="color: #666666;">Country:</b>  ' . $country . '</h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"> <h4><b style="color: #666666;">City:</b>  ' . $city . '</h4></li>
                        <li style=" font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"> <h4><b style="color: #666666;">Position:</b>  ' . $position . '</h4></li>
                        <li style="font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;"> <h4><b style="color: #666666;">Message:</b>   ' . $mensaje . '</h4>.</li>
                      </ul>
                    
                    </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:#000000;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px; font-family:  sans-serif;">
                <tr>
                  <td style="padding:0;width:50%;" align="right">
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


// Ingresa tu clave secreta.....
define("RECAPTCHA_V3_SECRET_KEY", '6Lc_knsgAAAAAMXU2ML6ZEl6li9UsSiGRiEy7gLn');
$token = $_POST['token'];
$action = $_POST['action'];

// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

// verificar la respuesta
if ($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    // Si entra aqui, es un humano, puedes procesar el formulario
    try {

        $mail->isSMTP();
        $mail->setFrom($sender, $senderName);
        $mail->Username   = $usernameSmtp;
        $mail->From   = $usernameSmtp;
        $mail->Password   = $passwordSmtp;
        $mail->Host       = $host;
        $mail->Port       = $port;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = 'tls';
        $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);
          // Specify the message recipients.
        if($country == 'CANADA'){
          $mail->addAddress($recipientcanada);
        }elseif($country == 'MEXICO'){
          $mail->addAddress($recipientmexico);
        }elseif($country == 'AFRICA'){
          $mail->addAddress($recipientcentro);
        }elseif($country == 'GUATEMALA'){
          $mail->addAddress($recipientcentro);
        }elseif($country == 'PANAMA'){
          $mail->addAddress($recipientcentro);
        }elseif($country == 'DOMINICAN REPUBLIC'){
          $mail->addAddress($recipientcentro);
        }elseif($country == 'COLOMBIA'){
          $mail->addAddress($recipientcolombia);
        }elseif($country == 'ECUADOR'){
          $mail->addAddress($recipientecuador);
        }elseif($country == 'CHILE'){
          $mail->addAddress($recipientchile);
        }elseif($country == 'PERU'){
          $mail->addAddress($recipientperu);
        }elseif($country == 'NICARAGUA'){
          $mail->addAddress($recipientnicaragua);
        }
        $mail->isHTML(true);
        $mail->Subject    = $subject;
        $mail->Body       = $bodyHtml;
        $mail->AltBody    = $bodyText;
        $mail->Send();
        sleep(4);

        header("Location: {$_SERVER['HTTP_REFERER']}");
    } catch (phpmailerException $e) {
        echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
    } catch (Exception $e) {
        echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
    }
} else {
    // Si entra aqui, es un robot....
    echo "Lo siento, parece que eres un Robot";
}











?>