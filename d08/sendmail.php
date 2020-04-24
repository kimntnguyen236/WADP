<?php
$to = 'nguyenngocthienkim.2015.91@gmail.com';
$subject = 'Testing sendmail.exe';
$message = 'Hi, you just received an email using sendmail!';
$headers = 'From: sophianguyen.236@gmail.com';
if(mail($to, $subject, $message, $headers))
echo "Email sent";
else
echo "Email sending failed";
?>