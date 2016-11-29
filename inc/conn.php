<?php
$servername = "localhost";
$username = "chimerablack";
$password = "Mangaisking666@";
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$msg = $_POST["msg"];
$msg = wordwrap($msg, 70);
$headers = 'From: '.$name." ".$email;


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// send email
try {
    mail('christopherparke@zoho.com', $subject, $msg, $headers);
    echo 'mail sent';
} catch (Exception $e) {
    echo 'failed to send email because '.$e;
}
    

?>