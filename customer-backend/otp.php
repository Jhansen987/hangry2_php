<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jhansenreinier.ocado.cics@ust.edu.ph';
$mail->Password = 'ilduzxdvdiafcqco';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('jhansenreinier.ocado.cics@ust.edu.ph');

$mail->addAddress('leancristine.bugay.cics@ust.edu.ph');

$mail->isHTML(true);

$mail->Subject = 'Hi from Hangry';

$message= "
<p style='color: red; font-size: 32px;'>12345 Is your Access Code from Hangry!</p>
<br>
<div style='height:30px;width:30px;background-color:green;'></div>
";

$mail->Body = $message;
$mail->send();

echo 
"
<script>
alert('Sent Successfully');
</script>
";
?>