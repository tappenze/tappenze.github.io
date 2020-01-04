<?php

  $to_email = 'tomapp3@gmail.com';

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];

  $total_message = "Name: " . $name . ", email: " . $email . ", message: " . $message;

  mail($to_email, $subject, $total_message);

  

  header('Location: /');
