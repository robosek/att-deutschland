<?php 
if(isset($_POST['btn-submit'])){
    $to = "info@att-deutschland.de";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $number = $_POST['phone'];
    $subject = "Formularübermittlung";
    $subject2 = "Kopie der Formularvorlage";
    $message = $first_name . " " . $number . " hat geschriben:" . "\n\n" . $_POST['message'];
    $message2 = "Kopie der Formularvorlage: ". $first_name . " " . $number . " " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $success = mail($to,$subject,$message,$headers2);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>
<body>
    <?php if (isset($success) && $success) { ?>
        <script>
            window.location.href = "https://att-deutschland.de";
            alert('E-Mail gesendet. Vielen Dank, wir werden Sie in Kürze kontaktieren.');
        </script>
    <?} else { ?>
        <script>
            window.history.back(-1);
            alert('Error');
        </script>
    <?} ?>
</body>



