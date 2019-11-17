<?php

	$to = "youremail here";  // Your email here
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$headers = "From: $from";
	$date = $_REQUEST['date'];
	$time = $_REQUEST['time'];
	$subject = "Booking Form from Child Website";
	$fields = array();
	$fields{"name"} = "First name";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
	$fields{"date"} = "Date";
	$fields{"time"} = "Time";

	$fields{"monday"} = "monday";
	$fields{"thursday"} = "thursday";
	$fields{"thursday"} = "thursday";
	$fields{"tuesday"} = "tuesday";
	$fields{"friday"} = "friday";
	$fields{"wednesday"} = "wednesday";
	$fields{"saturday"} = "saturday";


	$body = "Here is what was sent:\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	};
	foreach($message as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	}

	$send = mail($to, $subject, $body, $headers);

?>
