<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "palcoprint@gmail.com";
    $subject = "Email palcoprint";
    $body = "Nume si Prenume: $name\nEmail-ul dvs.: $email\nMesajul: $message";
    
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Error: Email not sent.";
    }
}
?>
