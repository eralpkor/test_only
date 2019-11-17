<?php

	$to = "youremail here";  // Your email here
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$headers = "From: $from";
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];

	$subject = "Question Form from Child Website";

	$fields = array();
	$fields{"name"} = "First name";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
	$fields{"subject"} = "Subject";
	$fields{"message"} = "message";

	$body = "Here is what was sent:\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>
