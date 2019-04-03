<?php
 header( 'Location: www.buswaybarnetteconsulting.com' );
    $from = $name;
    $to = "Busway@barnetteconsulting.com";
    $subject = "New Message via Buswaybarnetteconsulting.com!";
    $name = Trim($_POST['name']);
    $number = Trim($_POST['number']);
    $email = Trim($_POST['email']);
    $message = Trim($_POST['message']);
    
    $body ="";
    $body .="Name: ";
    $body .=$name;
    $body .="\n";

    $body .="Telephone Number: ";
    $body .=$number;
    $body .="\n";

    $body .="Email: ";
    $body .=$email;
    $body .="\n";

    $body .="Message: ";
    $body .=$message;
    $body .="\n";

    $send = mail($to, $subject, $body, "From: <$from>");
    

    if($send) {
        print("Thank you for your submission! We will be getting back to you shortly.");
    }
    else {
        print("Unable to send!");
    }
?>