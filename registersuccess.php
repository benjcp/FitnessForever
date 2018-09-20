
<html>
<head>
<title>Welcome to Fit For All!</title>
</head>
<body>
  Thank you for registering with us!
</body>
</html>

<?php
//When a user successfully registers, send them an email.
$to = $_POST['email'];
$subject = "WELCOME TO FIT FOR ALL!";

$message = "
<html>
<head>
<title>Welcome to Fitness For AlL!</title>
</head>
<body>
<p>Thank you for Registering with us!</p>
<br>
<p>We hope you enjoy your time with us.</p>
<br>
<p>Fit For All.</p>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: FitForAll@FFA.com' . "\r\n";
try{
mail($to,$subject,$message,$headers);
};
catch{

};
 ?>
