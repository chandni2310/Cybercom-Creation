<?php

$sender = 'harshilparikh1234@gmail.com';
$subject = 'Sending mail example';
$body = 'This is a example for sending email using php';
$header = 'From: harshilparikh1234@gmail.com';

if (mail($sender, $subject, $body, $header)){
	echo 'Email sent successfully';
} else {
	echo 'Error occured';
}

//Changes we need to make in php.ini and sendmail.ini file

/*
********
php.ini
********
[mail function]

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = harshilparikh1234@gmail.com
sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"

*****************
sendmail.ini
*****************
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile = error.log
debug_logfile = debug.log
auth_username= harshilparikh1234@gmail.com
auth_password= password of gmail account
force_sender= harshilparikh1234@gmail.com
hostname= localhost


*/

?>

