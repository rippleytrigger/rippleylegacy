
 <?php

 	extract($_POST);
 	 $mensaje_correo = "Nombre:".$nombre."\n"."\n";
 	 $mensaje_correo .= "Correo:"." ".$correo."\n"."\n";
 	 $mensaje_correo .= "Número:".$numero."\n"."\n";
 	 $mensaje_correo .= "Mensaje:".$mensaje."\n"."\n";

 	 $email_principal = "info@rippleylegacy.com.ve";
 
	if(mail($email_principal,$asunto,$mensaje_correo))
	{ 
?>
		<p id="server"><?php echo $_SERVER['HTTP_HOST']; ?></p>
	
		<script type="text/javascript">

			var server = document.getElementById('server').innerHTML;
			window.location = "http://" + server + "?s=1#contacto";
		</script>

<?php
	}else{ 
?>
	<script type="text/javascript">
		var server = document.getElementById('server').innerHTML;
		window.location = "http://" + server + "?s=2#contacto";
	</script>
<?php
	} 
?>