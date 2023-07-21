<?php

$name = $_POST['name'];
$gmail = $_POST['gmail'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$to = "pradnyadesai72578@gmail.com";

$subject = "mail from Portfolio";
$txt = "Name = " , $name ,  "\r\n Email = ", $gmail , "\r\n Contact = ", $contact , "\r\n Message = ", $message ;

$headers = "From: noreply@https://pradnya-desai-15.github.io/portfolio/ " ," \r\n" ,

if($gmail!=NULL){
    mail($to, $subject , $txt ,$headers);

}
