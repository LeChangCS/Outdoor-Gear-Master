<?php

$to='lechangcs@gmail.com';//need to select the owner's email from database
$subject='This is an email from a renter of your item';

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$body=<<<EMAIL
Hi My name is $name.
$message
From  $name
My email is $email

EMAIL;

$header = "From: $email";
if($_POST){
    if($name=='' || $email=='' || $message==''){
        $feedback = 'fill out all the fields';
        echo "<script>
        alert('$feedback');
        window.location.href='confirmation.html';
        </script>";
    }else{
        mail($to,$subject,$body,$header);
        $feedback='Thanks for the email';
        echo "<script>
        alert('$feedback');
        window.location.href='mainsite.html';
        </script>";
    }
    
}

?>