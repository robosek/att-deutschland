<?php 
if(isset($_POST['submit'])){
    $to = "info@att-deutschland.de";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $number = $_POST['phone'];
    $subject = "Formularübermittlung";
    $subject2 = "Kopie der Formularvorlage";
    $message = $first_name . " " . $number . " hat geschriben:" . "\n\n" . $_POST['message'];
    $message2 = "Kopie der Formularvorlage: " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "E-Mail gesendet. Vielen Dank" . $first_name . ", wir werden Sie in Kürze kontaktieren.";
    }
?>