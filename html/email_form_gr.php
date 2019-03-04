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
          'Όνομα : '.$name."\r\n". 
          'Τηλέφωνο : '.$tel."\r\n". 
          'My Email is : '.$email."\r\n";




  mail($to, $subject, $message);
  

  


  echo ("<script>" . "window.self.location='thank_gr.html';" . "</script>");
  exit; 
 }
 

  //if "email" variable is not filled out, display the form

?>
</body>
</html>