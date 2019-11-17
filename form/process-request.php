<?php

	$to = "youremail here";  // Your email here
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$headers = "From: $from";
	$date = $_REQUEST['date'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	$time = $_REQUEST['time'];
	$service = $_REQUEST['service'];
	$subject = "Request Form from Child Website";

	$fields = array();
	$fields{"name"} = "First name";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
	$fields{"date"} = "Date";
	$fields{"time"} = "Time";
	$fields{"subject"} = "Subject";
	$fields{"message"} = "message";
	$fields{"service"} = "Service";

	$body = "Here is what was sent:\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>
