<?php 
if(isset($_POST['submit'])){
    $to = "abitech4real@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = "Uvact Contact Form";
    $subject2 = "Copy of Uvact Contact Form";
    $message = "Name: ". $name . "\n\n" ."Company Name: ". $company_name  . "\n\n" ."Message: ". $_POST['message'];
    $message2 ="Name: ". $name . "\n\n" ."Company Name: ". $company_name  . "\n\n" ."Message: ". $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

    // header("Location:thank_you.php"); 
    echo 'Thank you, we will get back to you shortly.';
    }
?>