<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel ='stylesheet' type= 'text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
 
    
    <title>Productos</title>
</head>
<body>
   <header>
      <div class ="contenedor">
        <h1 class="titulo">Excelentes productos Rosa de Sharon</h1>
     </div>
  </header>
     <section class="fotos">
      <div class ="contenedor">
      <?php  foreach($fotos as $foto):?>   
        <div class="thumb">
          <a href="foto.php?id=<?php echo  $foto['id']; ?>">
            <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
          </a>
        </div>
        
      <?php  endforeach;?>
     
        
        <div class ="paginacion">
          
          <?php if($pagina_actual > 1) : ?>
          
          <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
          <?php endif ?>
          
          <?php if($total_paginas != $pagina_actual) : ?>
          
          <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente<i class="fa fa-long-arrow-right"></i></a>
          <?php endif ?>
        <!--<a href="subir.php" class="izquierda"><i class="fa fa-long-arrow-left"></i> Inicio</a>-->
          <a href="../index.php">Inicio</a>
       
        </div>
     </div>
      
  </section>
  <footer>
    <p class="copyright">Productos hechos por la empresa Rosa de Sharon</p>
  </footer>
</body>
</html>