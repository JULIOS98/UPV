
<!DOCTYPE html>
<html>
<head>
	<title>Fomulario Web</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<form action="pagina3.php" method="POST">

		<fieldset>
			<legend>Datos personales</legend>
			<div>
			<label for="Nombre">Nombre</label>
			<input type="text" name="Nombre" id="Nombre" placeholder="Escribe tu Nombre"  required>
		</div>

		<div>
			<label for="Genero">Genero</label>
			<input type="radio" name="Genero" id="Genero" value="Masculino" checked disabled><label>Masculino</label>
			<input type="radio" name="Genero" id="Genero" value="Femenino" disabled><label>Femenino</label>
		</div>
	
		</fieldset>
		
		<div>
			<label for="pasatiempos">Pasatiempos</label>
			<input type="checkbox" name="pasatiempos" id="pasatiempos" value="leer" checked><label>Leer</label>
			<input type="checkbox" name="pasatiempos" id="pasatiempos" value="correr"><label>Correr</label>
			<input type="checkbox" name="pasatiempos" id="pasatiempos" value="musica"><label>Musica</label>
			<input type="checkbox" name="pasatiempos" id="pasatiempos" value="peliculas"><label>Peliculas</label>
		</div>


		<div>
			<label for="Edad">Edad</label>
			<input type="number" name="Edad" id="Edad" >
		</div>

		<div>
			<label for="contraseña">Contrseña</label>
			<input type="password" name="contraseña" id="contraseña" maxlength="10" required>
		</div>

		<div>
			<label for="correo">Correo</label>
			<input type="email" name="correo" id="correo" placeholder="Escribe tu correo" >
		</div>

		<div>
			<label for="telefono">Telefono</label>
			<input type="tel" name="telefono" id="telefono" placeholder="Escribe tu telefono" maxlength="9">
		</div>

		<div>
			<label for="fechaNac">Fecha de nacimiento</label>
			<input type="date" name="fechaNac" id="fechaNac">
		</div>

		<div>
			<label for="mi_color">Color Favorito</label>
			<input type="color" name="mi_color" id="mi_color">
		</div>

		<div>
			<label for="estado">Estado</label>
			<select name="estado">
				<option value="1">Tamaulipas</option>
				<option value="2">Nuevo leon</option>
				<option value="3">Coahuila</option>
			</select>
		</div>

		<div>
			<label>Datalist Estados</label>
			<input list="opciones" name="lista_estados">
			<datalist id="opciones">
				<option value="Tamaulipas">
				<option value="Coahuila">
				<option value="Nuevo leon">
			</datalist>
		</div>

		<div>
			<label for="acerca">Acerca de mi</label>
			<br>
			<textarea id="acerca" name="acerca" maxlength="300" rows="20" cols="60">
			</textarea>
		</div>

		<div>
			<button></button>
			<input type="submit" name="enviar" id="enviar" value="Enviar">
		</div>

	</form>
</body>
</html>