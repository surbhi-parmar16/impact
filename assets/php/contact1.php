<?php

ini_set("SMTP","smtp.google.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'surbhiparmar65@gmail.com');
$to = "surbhiparmar65@gmail.com";
$subject = "This is a test HTML email";

$message = "
<html>
<head>
<title>This is a test HTML email</title>
</head>
<body>
<p>Test email. Please ignore.</p>
</body>
</html>
";

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: <surbhiparmar65@gmail.com>' . "\r\n";
// $headers .= 'Cc: sales@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>