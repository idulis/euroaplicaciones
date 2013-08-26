<?php
	$from = disraelligua@gmail.com
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];

	mail($email, $nombre, $comentario, "From: ".$from);
	print("Gracias por su interes, pronto nos pondremos en contacto con usted !!!");
?>