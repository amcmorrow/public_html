<!DOCTYPE html>
<h1>Test Email Sending</h1>
<p>please wait..</p>
<br>

<?php
  $mail_to_send_to = "andrew.michael.mcmorrow@gmail.com";
  $from_email = "gmail@amcmorrow.com";
  $sendflag = $_REQUEST['sendflag'];    
  $name=$_REQUEST['name'];
  $subject=$_REQUEST['subject'];

  if ( $sendflag == "send" ) {
    $email = $_REQUEST['email'] ;
    $message = "\r\n" . "Name: $name" . " Email: $email" . "\r\n"; //get recipient name in contact form
    $message .= "\r\n" . "Subject: $subject" . "\r\n"; //get subject in contact form
    $message .= $_REQUEST['message'] . "\r\n"; //add message from the contact form to existing message(name of the client)
    $headers = "From: $from_email" . "\r\n" . "Reply-To: $email";
    $sent = mail($mail_to_send_to, $subject, $message, $headers);
    if ($sent) {
      print("Message was sent, you can send another one");
    } else {
      print("Message wasn't sent, please check that you have changed emails in the bottom");
    }
  }

  header("refresh:14;url=index.php");
?>
