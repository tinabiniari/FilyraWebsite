<html>
<body>

		<?php
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $to = "pensionfilyra@gmail.com";
    $name = $_POST['name'];
$subject="Pension Filyra";
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $message = $_POST['message'];
  
  // //send email
  // $headers = 'From: '.$email."\r\n".
  //   'Reply-To: '.$email."\r\n" .
  //   'X-Mailer: PHP/' . phpversion();


$message .= "\r\n".
          'My Name is : '.$name."\r\n". 
          'My Telephone is : '.$tel."\r\n". 
          'My Email is : '.$email."\r\n";

     // 'X-Mailer: PHP/' . phpversion();



  mail($to, $subject, $message);
  
  

  echo ("<script>" . "window.self.location='thank_en.html';" . "</script>");
exit; 
 }
  

?>
</body>
</html>