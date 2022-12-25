<?php
if (isset($_POST['Enviar']))
{
	if(!empty($_POST['name]) && !empty($_POST['message']) && ! empty($_POST['email']))
	{
	
		$name=$_POST['name'];
		$asunto='DEMO';
		$msg=$_POST['message'];
		$email=$_POST['email'];
		$header="From:iosorio@kzsolution.com.mx" ."\r\n";
		$header.="Reply-TO:quejas@kzsolution.com.mx" ."\r\n";
		$header.="x-Mailer:PHP/".phpversion();
		$mail=@mail($email,$asunto,$msg,$header);
		
		if ($email)
		{
			echo "<h4> ¡Mail enviado exitosamente! </h4>";
		}
}

							