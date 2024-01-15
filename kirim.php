<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "library/PHPMailer.php";
require "library/Exception.php";
require "library/OAuth.php";
require "library/POP3.php";
require "library/SMTP.php";
 
	$mail = new PHPMailer (true);
 
	//Enable SMTP debugging. 
	// $mail->SMTPDebug = 3;                               
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "smtp.gmail.com"; //host mail server
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = "mlpisang9@gmail.com";   //nama-email smtp          
	$mail->Password = "xlflcykyrhyqzfld";           //password email smtp
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   
 
	$mail->From = "kdhudaya@gmail.com"; //email pengirim
	$mail->FromName = "Ini adalah PHPmailer"; //nama pengirim
 
	$mail->addAddress($_POST['email'], $_POST['nama']);
 
	$mail->isHTML(true);
 
	$mail->Subject = $_POST['subjek']; //subject
    $mail->Body    = $_POST['pesan']; //isi email
        $mail->AltBody = "PHP mailer"; //body email (optional)
 
	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
	    echo "Message has been sent successfully";
	}

?>
