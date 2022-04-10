<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>


<?php
if (lisset(S POST[' submit' ]))
//This page should not be accessed directly. Need to submit the form
echo
"error: you need to submit the fors!":
visitor email
Collect
//Validate first
if(empty (Sname) | |empty (Svisitor email))
eeno
and email are mandatory!:
•Validate
*tom@amazing-designs.com';//<-m Put your email address here
Sema1l subject - New Form submission
Somail hodv
You have received a new message from the user Sname. In
email address: Svisitor
emailin"
"Here 1s the message: \n Smessage"
"tondamazing-designs.com
;//<*- Put your email address here
Sheaders
Sp-211
/send the email
mail(Sto, Semail_ subject, Semail_body, Sheaders);