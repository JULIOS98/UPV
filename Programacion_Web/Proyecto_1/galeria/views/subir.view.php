<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel ='stylesheet' type= 'text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
 
    
    <title>Productos</title>
</head>
<body>
   <header>
      <div class ="contenedor">
        <h1 class="titulo">Subir Productos</h1>
     </div>
  </header>
  
  <div clas="contenedor">
      <form class="formulario" method="post" enctype ="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona producto</label>
            <input type="file" id="foto" name="foto">
    
            <label for="titulo">Titulo de producto</label>
            <input type="text" id="titulo" name="titulo">
    
            <label for="texto">Descripción:</label>
            <textarea name="texto" id="texto" placeholder="Ingrese una descripción"></textarea>
        
        
        
        
            <?php if(isset($error)):?>
              <p class="error"><?php echo $error; ?></p>
            <?php endif?>
    
            <input type="submit" class="submit" value="Subir Producto">
        <div class = "contenedor">
            <a href="../index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Inicio</a> <br> <br>
            <!--<a href="../tabla.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Tabla</a>-->

        </div>
            
       
    </form>
  </div>
   
  <footer>
    <p class="copyright">Productos hechos por la empresa Rosa de Sharon</p>
  </footer>
</body>
</html>