<?php

  // Catch Data from POST Body
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Settings for sending email
  $mailToArray = array("jackie247s@gmail.com");
  $subject = "FutureLeap Contact";
  $arrayLength = count($mailToArray);

  // Construct Mail Message
  $mailMessage = "Name: ".$name."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nMessage: ";
  $mailMessage .= $message;

  // Send E-Mail to each address in mailToArray
  for ($i=0; $i < $arrayLength ; $i++) {
    mail($mailToArray[$i], $subject, $mailMessage);
  }
 ?>
