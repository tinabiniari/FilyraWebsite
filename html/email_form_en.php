<?php

$name = $_REQUEST['name'];
$surname = $_POST['surname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "info@pensionfilyra.gr";
$subject = "Contact Form PensionFilyra.gr";
$from  =  $_POST['email'];

$x = "\nfrom  " . $from . "\nfirst name " . $name . "\nsurname " . $surname . "\ntelephone "  . $telephone. "\nemail " . $email . "\n"  .$message. "\n";
$send_contact = mail ($to, $subject, $x);

if (send_contact){
	echo ("<script>" . "window.self.location='thanks_en.html';" . "</script>");
}
else {
	echo "ERROR! YOUR MESSAGE HAS NOT BEEN SENT - сжакла! то EMAIL дем естакеи!!";
 }
exit;
?>


