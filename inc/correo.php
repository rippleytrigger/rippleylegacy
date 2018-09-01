
 <?php
	//Avoiding Warnings - Uncomment if this script does not work properly
	//error_reporting(E_ERROR | E_PARSE);

	extract($_POST);

	// Only process POST reqeusts.
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$nombre = strip_tags(trim($nombre));
		$nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);

		$asunto = strip_tags(trim($asunto));
		$asunto = str_replace(array("\r","\n"),array(" "," "),$asunto);

		$correo = filter_var(trim($correo, FILTER_SANITIZE_EMAIL));
		$mensaje = trim($mensaje);


		// Check that data was sent to the mailer.
		if ( empty($nombre) OR empty($mensaje) OR !filter_var($correo, FILTER_VALIDATE_EMAIL)) 
		{
			http_response_code(400);
			echo "Hubo un problema con la solicitud de tu formulario. Intenta de nuevo";
			exit;
		}	 

		
		$mensaje_correo = "Nombre:".$nombre."\n"."\n";
		$mensaje_correo .= "Correo:"." ".$correo."\n"."\n";
		$mensaje_correo .= "Número:".$numero."\n"."\n";
		$mensaje_correo .= "Mensaje:".$mensaje."\n"."\n";

		$email_principal = "info@rippleylegacy.com.ve";
	
		if(mail($email_principal,$asunto,$mensaje_correo))
		{ 
			http_response_code(200);
			echo "Se pudo enviar el correo!!!";
			exit();
		}
		else
		{ 
			http_response_code(400);
			echo "No se pudo enviar su correo. Inténtelo más tarde";
			exit();
		} 
	}
	else
	{
		header('Location: ' . "https://localhost/rippleylegacy/", true, 303);
		exit();
	}
?>