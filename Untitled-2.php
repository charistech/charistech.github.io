<?php

$from="noreply@christech12.com";
$email="charistech12@gmail.com";
$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$comment=$_POST['Comment'];


form1  ( $email,  $Name,  $Email,  $Subject,  $Comment, "From:".$from);


Print "Your message has been Sent!";


?>