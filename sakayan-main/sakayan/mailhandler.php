<?php
if(isset($_POST['submit'])){
    $name=$$_POST['name'];
    $email=$$_POST['email'];
    $phone=$$_POST['phone'];
    $msg=$$_POST['msg'];

    $to='cefgilig@gmail.com';
    $subject='From Submission';
    $message="Name: ".$name, "\n" ."Phone:" .$phone."\n". "Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $heders)){
        echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
    }
    else{
        echo "Something went wrong!";
    }
}
?>