<?php
	if(isset($_POST['enviar'])){
		echo 'Formulario recibido';
		//print_r($_POST);

		echo '<br>' .'Nombre: ' . $_POST['Nombre'] . '<br>' . 'Edad: ' . $_POST['Edad'] . '<br>' . 'Telefono: ' . $_POST['telefono'] . '<br>' . 'Correo: ' . $_POST['correo'];
	}
?>

