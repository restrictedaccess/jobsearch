<?php
/******************************************

Chris Newey

04 - June - 2008

Completely rewrite:

ISP has rebuilt PHP to disable various system functions which breaks
the phpMailer class which was previously used to generate mail.

Quick and dirty fix to use the PHP mail function instead.

03/12/08 CDN HTML code to build a link
         NOTE: EVERYTHING in lower case
<form action="index.php?displaypage=mailform.php" method="post">
<input type="hidden" name="emailrecipient"
value="office@christchurchlye.org.uk">
<input type="submit" value="Email">
</form>

25/01/2013	CDN		Change to use gmail via updated phpmailer class


*******************************************/
?>



<?php
require_once("genlib.php");
require_once("dbparms.php");
require_once("phpmailer/examples/test_smtp_gmail_basic.php");
?>




<br />

<?php

	// Program Entry Point - Designed to be embedded in index.php

	// If $_POST['sendemail']) is set then this page is being
	// called by itself after an email form has been filled in

	// Ensure email vars exist
	if (! isset($_POST['emailreplyto1']))
	{
		$_POST['emailreplyto1'] = '';
	}
	if (! isset($_POST['emailreplyto1']))
	{
		$_POST['emailreplyto1'] = '';
	}
	if (! isset($_POST['emailreplyto2']))
	{
		$_POST['emailreplyto2'] = '';
	}
	if (! isset($_POST['emailsubject']))
	{
		$_POST['emailsubject'] = '';
	}
	if (! isset($_POST['emailtext']))
	{
		$_POST['emailtext'] = '';
	}




	if (isset($_POST['sendemail']))
	{
		sendEmailFromUser($_POST['emailrecipient']);
	}
	else
	{
		// if $_POST['emailrecipient'] isn't present then look to see if
		// $_GET['mailTo'] is set and use that
		$_POST['emailrecipient'] = "chris.newey@gmail.com";
		if (isset($_POST['emailrecipient']))
		{
			displayEmailForm($_POST['emailrecipient']);
		}
		else
		{
			if (isset($_GET['mailTo']))
			{
				displayEmailForm($_GET['mailTo']);
			}
			else
			{
				if (isset($_GET['emailrecipient']))
				{
					$_GET['emailrecipient'] = str_ireplace ( 'mailto:', '', $_GET['emailrecipient']);
					displayEmailForm($_GET['emailrecipient']);
				}
				else
				{
					die("XX No Email Recipient Provided to send email to<br />\n");
				}
			}
		}
	}
	return;
?>

<?php

function sendEmailFromUser($recipient)
{

	if (isset($_POST['sendemail']))
	{
		if (! ($isValidEmail = validateEmailForm()) )
		{
			// Validation Failed - redisplay form with error messages
			displayEmailForm($_POST['emailrecipient']);
		}
		else
		{

			$headers = 'From: ' . $_POST['emailreplyto1']  . "\r\n" .
                 'Reply-To: ' . $_POST['emailreplyto1'] . "\r\n";

			/*************************
			if (mail(	$_POST['emailrecipient'],
							  $_POST['emailsubject'],
								$_POST['emailtext'],
								$headers))
			**************************************/
			if (sendEmail($_POST['emailsubject'], $_POST['emailtext'], $_POST['emailreplyto1']))
			{
				echo "<h2>Mail Sent ok</h2> \n";
				echo "<br /> \n";
				echo "<br /> \n";
				/*********
				echo "<p>";
				echo "To: " . $_POST['emailrecipient'];
				echo "</p>\n";
				*****************/
				echo "<p>";
				echo "Reply To: " . $_POST['emailreplyto1'];
				echo "</p>\n";
				echo "<p>";
				echo "Subject: " . $_POST['emailsubject'];
				echo "</p>\n";
				echo "<p>";
				echo "Message: <br /> " . $_POST['emailtext'];
				echo "</p>\n";

				/**************
				echo "<br />";
				echo "<br />";
				echo "<p>";
				echo "<a href='". getServer()  . "' >Home</a>";
				echo "</p>\n";
				*********************/

			}
			else
			{
				echo "<h2>Message was not sent</h2>\n";
				echo "<p>";
				echo "Mailer Error: " . $oMail->ErrorInfo;
				echo "</p> \n";
				echo "<p>";
				echo "To " . $_POST['emailrecipient'];
				echo "</p> \n";
				echo "<p>";
				echo "Subject " . $_POST['emailsubject'];
				echo "</p> \n";
				echo "<p>";
				echo "message " . $_POST['emailtext'];
				echo "</p> \n";
				echo "<p>";
				echo "Headers " . $headers;
				echo "</p> \n";
				echo "<br /> \n";

				/*****************
				echo "<br />";
				echo "<br />";
				echo "<p>";
				echo "<a href='". getServer()  . "' >Home</a>";
				echo "</p>\n";
				**************************/
			}



			$_POST = array();

			return;
		}

	}


	return;

}

?>



<?php
// ==================================================
function validateEmailForm()
{
	$isValidEmail = true;
	$msg = "";


	if ( empty($_POST['emailrecipient']) )
	{
		$isValidEmail = false;
		$msg .= dispError("Email Recipient Required <br /> \n", true, false);
	}

	if ( empty($_POST['emailsubject']) )
	{
		$isValidEmail = false;
		$msg .= dispError("Email Subject Required <br /> \n", true, false);
	}

	if ( empty($_POST['emailreplyto1']) )
	{
		$isValidEmail = false;
		$msg .= dispError("Email Reply Address Required <br /> \n", true, false);
	}

	if ( empty($_POST['emailreplyto2']) )
	{
		$isValidEmail = false;
		$msg .= dispError("Confirmation of Email Reply Address Required <br /> \n", true, false);
	}


	if ( $isValidEmail && ! ($_POST['emailreplyto1'] == $_POST['emailreplyto2']) )
	{
		$isValidEmail = false;
		$msg .= dispError("Email Reply Address and confirmation are different<br /> \n", true, false);
	}


	$_POST['emailtext'] = trim($_POST['emailtext']);
	if ( empty($_POST['emailtext']) )
	{
		$isValidEmail = false;
		$msg .= dispError("Email Text Required <br /> \n", true, false);
	}

	if (! $isValidEmail)
	{
		print("<br />\n");
		print("<br />\n");
		print($msg);
		print("<br />\n");
	}

	return $isValidEmail;
}

// ==================================================
?>



<?php
// ==================================================
function displayEmailForm($recipient)
{
?>


<p>
  	  <span class="error">*</span>
  	  = Required
</p>

 <form action="sendemail.php" method="post" class="emailForm" >

  <input type="hidden" name="sendemail" value="sendemail" >
  <input type="hidden" name="emailrecipient" value="<?php print($recipient); ?>" >

	<table>

	<!-- ===================================
 	<tr>
	    <td>
		To &nbsp;
		<span class="error">*</span>
		</td>

		<td>
		<span class="emailFormRecipient" >
		<input class="emailrecipient" type="text" size="50" name="emailrecipient" value="<?php print($recipient); ?>"
			   readonly >
		</span>
		</td>
	</tr>
	========================================== -->
	<!--  ======================
	NOTE !!!!!! PHP Commented out - need to uncomment if line made active
	NOTE See hidden emailrecipient input field above
	<input class="emailrecipient" type="hidden" size="50" name="emailrecipient" value="<?php //print($recipient); ?>"
			   readonly >
	============================ -->


    <tr>
	    <td>
	    Subject &nbsp;
		<span class="error">*</span>
		</td>
	    <td>
			<input placeholder="Subject of Email" type="text" size="50" name="emailsubject"
				autofocus
				value="<?php print($_POST['emailsubject']); ?>">
		</td>
	</tr>

    <tr>
	    <td>
	    Your email &nbsp;
		<span class="error">*</span>
	    </td>
			<td>
				<input placeholder="Email address to reply to" type="text" size="50" name="emailreplyto1"
					value="<?php print($_POST['emailreplyto1']); ?>" >
			</td>
		</tr>


    <tr>
	    <td>
	    Confirm email &nbsp;
		<span class="error">*</span>
	    </td>
			<td>
				<input placeholder="Confirm Email address to reply to" type="text" size="50" name="emailreplyto2"
					value="<?php print($_POST['emailreplyto2']); ?>" >
			</td>
		</tr>

 		<tr>
	 		<td colspan="2">
	 			Message Content (1000 Characters Maximum) &nbsp;
				<span class="error">*</span>
				<br />
				<br />
				<textarea name="emailtext" rows="20" cols="75" maxlength="1000" >
					<?php print($_POST['emailtext']); ?>
				</textarea>
			</td>
		</tr>

	 <tr>
	   <td>
		 <input type="submit" value="Send">
		</td>
		<td>
		<input type="reset">
		</td>
	</tr>

<!--
	<tr>
		<td>
			<br />
		</td>
	</tr>
-->

 	</table>

 </form>

<br />
<br />


<?php
return;
}

// ==================================================
?>


