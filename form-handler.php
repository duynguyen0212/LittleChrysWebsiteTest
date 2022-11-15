<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'nguyenduy200318@gmail.com';

$email_subject = 'Idea Star New Form Submission';

$email_body = "Costumer's Name: $name.\n".
					"Email: $visitor_email\n".
					"Subject: $subject.\n".
					"Message: $message.\n";

$to = 'alexandre.potvin@ideastar.ca';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location:index.html");
?>