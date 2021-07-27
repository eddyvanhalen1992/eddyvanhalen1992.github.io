<?php	
	if (empty($_POST['name_36099']) && strlen($_POST['name_36099']) == 0 || empty($_POST['email2_36099']) && strlen($_POST['email2_36099']) == 0 || empty($_POST['email2_36099']) && strlen($_POST['email2_36099']) == 0 || empty($_POST['email2_36099']) && strlen($_POST['email2_36099']) == 0 || empty($_POST['message_36099']) && strlen($_POST['message_36099']) == 0)
	{
		return false;
	}
	
	$name_36099 = $_POST['name_36099'];
	$email2_36099 = $_POST['email2_36099'];
	$email2_36099 = $_POST['email2_36099'];
	$email2_36099 = $_POST['email2_36099'];
	$message_36099 = $_POST['message_36099'];
	$optin_36099 = $_POST['optin_36099'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_36099: $name_36099 \nEmail2_36099: $email2_36099 \nEmail2_36099: $email2_36099 \nEmail2_36099: $email2_36099 \nMessage_36099: $message_36099 \nOptin_36099: $optin_36099 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email2_36099";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>