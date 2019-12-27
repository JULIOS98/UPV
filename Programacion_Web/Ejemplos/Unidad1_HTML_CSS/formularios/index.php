


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Document</title>

</head>

<body
>
    <form action="pagina_2.php" method="POST">

        <fieldset>

            <legend>Datos Personales</legend>

       

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" required>
        </div
        >
        <div>
            <label for="genero">Genero</label>
            <input type="radio" name="genero" id="genero" value="Masculino">Masculino
            <input type="radio" name="genero" id="genero" value="Femenino">Femenino
        </div>

        <div>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
        </div>

        <div>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="Escribe tu correo" maxlength="10">
        </div>

    </fieldset>

        <div>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" required>
        </div>

        <div>
            <label for="telefono">Telefono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu telefono" maxlength="10">
        </div>

        <div>
            <label for="fechaNac">Fecha de nacimiento</label>
            <input type="date" name="fechaNac" id="fechaNac">
        </div>

        <div>
            <label for="color">Color Favorito</label>
            <input type="color" name="color" id="color">
        </div>

        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="1">Tamaulipas</option>
                <option value="2">Nuevo León</option>
                <option value="3">Coahuila</option>
            </select>
        </div>

        <div>
                <label >Datalist Estados</label>
                <input list="opciones" name="lista_estados">
                <datalist id="opciones">
                    <option value="Tamaulipas"></option>
                    <option value="Nuevo Leon"></option>
                    <option value="Aguascalientes"></option>
                </datalist>

        </div>

        <div>
            <label for="pasatiempos">Pasatiempos</label>
            <input type="checkbox" name="pasatiempos" id="pasatiempos" value="leer" checked> Leer
            <input type="checkbox" name="pasatiempos" id="pasatiempos" value="correr"> Correr
            <input type="checkbox" name="pasatiempos" id="pasatiempos" value="musica"> Musica
            <input type="checkbox" name="pasatiempos" id="pasatiempos" value="peliculas"> Peliculas
                
        </div>

        <div>
            <label for="acerca">Acerca De Mi</label> <br>
            <textarea name="acerca" id="acerca" maxlength="300"></textarea>

        </div>
        
        <div>
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </div>

    </form>

</body>
</html>