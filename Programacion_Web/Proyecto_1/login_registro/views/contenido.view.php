<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap"> 
    <link href="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>CONTENIDO</title>
</head>
<body>
    <div class="contenedor">

        <h1 class="titulo"> Contenido del Sitio</h1>
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
        <hr class="border">
        <div class="contenido">
          
          <p> <?php echo $_SESSION['usuario']  ?></p>
        
          <article>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque in ut est doloremque. 
                Sunt animi dicta, nisi sapiente porro aut nobis soluta, 
                dolorem perspiciatis nemo veniam accusamus debitis saepe eius.
            </p>
          </article>

        </div>
     

    </div>

    
</body>
</html>