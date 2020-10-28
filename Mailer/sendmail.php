<?php

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	require '../HTML/connect.php';

$id=$_GET["id"];
$sql= "SELECT *FROM information where id=".$id;

$result=mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "vothinhi2410@gmail.com";
//Set gmail password
	$mail->Password = "vothinhi";
//Email subject
	$mail->Subject = "KMS VIET NAM";
//Set sender email
	$mail->setFrom('vothinhi2410@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<p>Hi".$row['name']."</p><p> Someone use this email to add in my web if you don't do that please don't touch them.<br>
	Thank you for your information. we will consider
	</p><p> ".$row['message']."</p>";
//Add recipient
	$mail->addAddress($row['email']);
//Finally send email
	if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
//Closing smtp connection
	$mail->smtpClose();
