<?php

  $log_file_name = 'my_messages.log';

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];

  $total_message = "Name: " . $name . ", email: " . $email . ", Subject: " . $subject . ", message: " . $message;

  file_put_contents($log_file_name, $total_message, FILE_APPEND);

  

  header('Location: /');
