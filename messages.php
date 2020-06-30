<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "tappenze@purdue.edu";
  $headers = "Message from website: ".$mailFrom;

  $txt = "You have received an email from ".$name."."\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");
}
