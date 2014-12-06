<?php  	
	$return = array();
	require_once('recaptchalib.php');
	$privatekey = "6LcW--MSAAAAAEdmWws1tFkIODHtGV5-8PMfW0_J";
	$resp = recaptcha_check_answer ($privatekey,
	                            $_SERVER["REMOTE_ADDR"],
	                            $_POST["recaptcha_challenge_field"],
	                            $_POST["recaptcha_response_field"]);
	//if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
	//	header("Location: contact.php"); exit;  
	//}
	if (!$resp->is_valid) {
		$error = "The CAPTCHA was not entered correctly. Please try again";
		$return['e'] = $error;
		echo json_encode($return);
		//header("Location: contact.php?e=".urlencode($error));
		exit;  
	}
	session_start();
	// Your code here to handle a successful verification
	// check for form submission - if it doesn't exist then send back to contact form  
	  
	// get the posted data  
	$name = ucfirst($_POST["contact_name"]);  
	$email_address = $_POST["contact_email"]; 
	$school = $_POST["contact_school"] ;
	$message = $_POST["contact_message"];  
	//$checkbox = $_POST["updateCheckbox"];
	// check that a name was entered  
	if (empty ($name)) 
	    $error = "You must enter your name.";  
	// check that an email address was entered  
	elseif (empty ($email_address))   
	    $error = "You must enter your email address.";  
	elseif (empty ($school))
		$school = "";
	// check for a valid email address  
	elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))  
	    $error = "You must enter a valid email address.";  
	// check that a message was entered  
	elseif (empty ($message)) {
		$message = "";
	}
	/*elseif (! empty ($checkbox))  {
		$message = $message."\nPlease send me updates about UCBMUN XVIII registration";
	}*/
	// check if an error was found - if there was, send the user back to the form  
	if (isset($error)) {  
		$return['e'] = $error;
		echo json_encode($return);
	    //header("Location: contact.php?e=".urlencode($error)); 
	    exit;  
	}  
         
	// write the email content  
	$email_body = $message;  
	$from = "From: ". $email_address;
	$subject = $name."(".$school.")";
	$sg = "sg@ucbmun.org";
	$dsg = "dsg@ucbmun.org";
	$test = "ramit@berkeley.edu";
	// send the email  
	mail ($sg, $subject, $email_body,$from);
	mail ($dsg, $subject, $email_body,$from);
	mail ($test,$subject,$email_body,$from);

	      
	// send the user back to the form
	$return['s'] = "Thank you for your message, ".$name.". We will get back to you ASAP!";
	echo json_encode($return);  
	//header("Location: contact.php?s=".urlencode("Thank you for your message, ".$name.". We will get back to you ASAP!")); 
	exit;	
  
?>  