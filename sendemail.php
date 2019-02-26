<?php
$fname       = @trim(stripslashes($_POST['fname'])); 
$lname       = @trim(stripslashes($_POST['lname']));
$from       = @trim(stripslashes($_POST['email'])); 
// $subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'sac.founder@gmail.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$fname, $lname} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
// $headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;