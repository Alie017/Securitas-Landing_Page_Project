<?php
$isim= isset ($_POST['isim']);
$sirket=isset  ($_POST['sirket']);
$tel_no=isset  ($_POST['tel_no']);
$email=isset  ($_POST['email']);
$adres=isset  ( $_POST['adres']);
$hizmet=isset  ($_POST['hizmet']);
$mesaj= isset  ($_POST['mesaj']);

$email_from='https://alie017.github.io/landingtest/';
$email_subject ="Landing Page Deneme Form";
$email_body="Ýsim Soyisim: $isim.\n".
			"Þirketi:$sirket.\n".
			"Telefon:$tel_no.\n".
			"E-posta:$email.\n".
			"Adresi:$adres.\n".
			"Bilgil almak istenilen hizmet:$hizmet.\n".
			"Mesajý:$mesaj.\n";


$to ="aemreaygun@hotmail.com";

$headers="Kimden: $email_from \r\n";

$headers .= "Yanýtla: $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header ("location: index.html");

?>