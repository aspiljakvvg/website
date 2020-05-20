<?php
if(!isset($_POST['submit']))
{
	echo "error; Potrebno je poslati mail!";
}
$name= $_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//validacija
if(empty($name)||empty ($email))
{
	echo "Ime i email su potrebni za slanje maila!";	
	exit;
}

$email = 'kontakt@multimedia.com';
$email_subject ="Upit iz web stranice";
$email_body ="dobili ste poruku od $name.\n"."email adresa : $email\n"."Poruka :\n $message".

$to ="kontakt@multimedia.com";
$headers = "From : $email \r\n";
mail($to,$email_subject,$email_body,$headers);

?>