<?php



$to      = "245384525@qq.com";
$subject = "Please validate your email from cash2money";
$message   = "test message";
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

ini_set('SMTP', "relay-hosting.secureserver.net");
ini_set('smtp_port', "25");


if(mail($to, $subject, $message, $Header))









?>