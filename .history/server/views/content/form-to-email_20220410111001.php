<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>


<?php
if (!isset($_POST[' submit' ]))
{
//This page should not be accessed directly. Need to submit the form
echo"error: you need to submit the firs!"
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'oksanka8888@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
                            
?>