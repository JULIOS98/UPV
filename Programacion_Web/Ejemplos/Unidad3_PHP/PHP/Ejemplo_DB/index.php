
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo Formulario</title>
</head>
<body>

    <div class="contenedor_universal">
    
    
 

    <div id="contenedor_form1">

        <form action="accesoBD.php" method='GET'>


        <div>
            <label for=""> Matricula: </label>
            <input type="text" name="matricula" required>
        </div>

        <br>

        <div>
            <label for=""> Nombre: </label>
            <input type="text" name="nombre" required>
        </div>

        <br>

        <div>
            <label for=""> Carrera: </label>
            <input type="text" name="carrera" required>
        </div>
     
        <br>

        <div>
            <input type="Submit" value="INSERT" name="guardar">
        </div>
     
        
        </form>

        <div id="boton_select">

            <button >
                <a href="select.php"> Visualizar</a>
            </button>
        </div> <!---Termino de boton_select-->
    
    
    </div> <!--Termino de Contenedor form1--->
    
    </div> <!--Termino de Contenedor_Universal--->
    
</body>
</html>
