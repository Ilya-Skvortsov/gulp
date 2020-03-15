<?php

	require("class.phpmailer.php");

	$mail = new PHPMailer;

	$body="";
	$subject = "Заявка с сайта " . $_SERVER['SERVER_NAME'];
	$body = "Поступила заявка :<br/>";
	$body .= "<b>Имя:</b> ".$_POST["name"]."<br/>";
	$body .= "<b>Телефон:</b> ".$_POST["phone"]."<br/>";

	$mail->IsSendmail();
	$mail->IsHTML(true); 
	$mail->FromName = 'К НАМ';
	$mail->AddAddress('smirnov@dadcan.ru');
	$mail->CharSet = 'utf-8';
	$mail->Subject = $subject;
	$mail->Body    = $body;

	if(!$mail->Send()) {
	   
	}
	
?>