<?php	
	if (empty($_POST['name_11524']) && strlen($_POST['name_11524']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0)
	{
		return false;
	}
	
	$name_11524 = $_POST['name_11524'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message_11524 = $_POST['message_11524'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_11524: $name_11524 \nEmail: $email \nSubject: $subject \nMessage_11524: $message_11524 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>