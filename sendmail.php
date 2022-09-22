$to = "subject@mail.com";  //This is where you place the receptors mail
$subject = "Mail testing"; //Title of your mail
$body = "Body of your message here you can use HTML too. e.g. <br> <b> Bold </b>";
$headers = "From: Fredd\r\n";
$headers .= "Reply-To: info@yoursite.com\r\n";
$headers .= "Return-Path: info@yoursite.com\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($to,$subject,$body,$headers);
?> 
