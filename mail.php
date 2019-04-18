<?php
if(isset($_POST["submit"])) {
$recipient = "kolawole4mercy@gmail.com"; //my email
echo $subject = 'Email message from Point Plumbing';
echo $name = $_POST ["yourName"];
echo $phone = $_POST["yourPhone"];
echo $email = $_POST["yourEmail"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>