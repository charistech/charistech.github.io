<?php

$from="noreply@christech12.com";
$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$comment=$_POST['Comment'];
$to = "charistech12@gmail.com";


mail  ( $email,  $Name,  $Email,  $Subject,  $Comment, "From:".$from);


echo "Your message has been Sent!"

?>