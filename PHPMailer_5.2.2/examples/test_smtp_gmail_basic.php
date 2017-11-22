
<?php

function sendEmail($emailSubject, $emailBody, $emailReplyTo)
{

	//print("<h1>test_smtp_gmail_basic.php</h1>");
	//print("subject: " . $emailSubject . "<br />" .  "body: " . $emailBody . "<br />" . "replyto: " . $emailReplyTo);


	//error_reporting(E_ALL);
	error_reporting(E_STRICT);

	date_default_timezone_set('Europe/London');

	//print("<p> pwd: " . getcwd() . "</p>");

	require_once('phpmailer/class.phpmailer.php');
	//include("phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

	$mail             = new PHPMailer();

	/***********
	$body             = file_get_contents('contents.html');
	$body             = preg_replace('/[\]/','',$body);
	******************/
	$body = $emailBody; // "email body";

	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.yourdomain.com"; // SMTP server
	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
											// 1 = errors and messages
											// 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "chris.newey@gmail.com";  // GMAIL username
	$mail->Password   = "GreerVenetiaHill191057";            // GMAIL password

	//$mail->SetFrom('name@yourdomain.com', 'First Last');
	$mail->SetFrom('cdnewey@hotmail.co.uk', 'Chris Newey');

	//$mail->AddReplyTo("Sender@cdnDomain","Sender Name");
	//$mail->AddReplyTo($emailReplyTo);

	$mail->Subject    = $emailSubject; // "PHPMailer Test Subject via smtp (Gmail), basic";

	$mail->AltBody    = $emailBody; // "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	$mail->MsgHTML($body);

	$mail->AddAddress($emailReplyTo, "");

	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

	if(!$mail->Send())
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
		return false;
	}
	else
	{
		//echo "Message sent!";
		return true;
	}

}

?>

