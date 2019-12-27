<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="css/estilos.css">
    <title>Proyecto Web</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo-nav">
               <a href="https://web.facebook.com/Drago-Sabi-Jaumave-1051573401659847/?ref=br_rs"https://web.facebook.com/Drago-Sabi-Jaumave-1051573401659847/?ref=br_rs target="_blank"><i class="fa fa-facebook-official"></i></a>
                <a href="index.php" class="logo"><h5>Rosa de Sharon</h5></a>
             
              
                <p><?php  echo $_SESSION['usuario'];?></p> 
                
              <nav class="nav-inicio">
                    <ul>
                       <!-- <li><a href="pagina2.html">Inicio</a></li>
                        <li><a href="pagina3.html">Productos</a></li>-->
                        <li><a href="pagina4.html">¿Quienes somos?</a></li>
                        <li><a href="login_registro/login.php">Login</a></li>
                        <li><a href="cerrar_sesion.php">Logout</a></li>           
                    </ul>
                </nav>
            </div>
        </header>
      
        <section class="banner">
            <div class="banner-container">
                <!--<a href="#">Ver más</a>-->
            </div>
        </section>
      
        <main class="main-info">
            <nav class="main-nav-info">
                <ul>
                    <?php 
                        if($_SESSION['usuario'] == 'admin'){
                          echo "<li><a href=\"galeria/subir.php\">Para Admin </a></li>";
                        }else{
                          echo "<li><a href=\"galeria/index.php\">Para Usuario </a></li>";
                        }
                        
                    ?>
                    
                   <!-- <li><a href="galeria/index.php">Para Usuario</a></li>   prueba sin estilo-->
                 </ul>
            </nav>
        </main>

        <!--<footer>
            <div class="footer-div">
                <ul>
                    <li><a href="" target="_blank">Facebook</a> <a href="" target="_blank">Instagram</a> </li>
                    <li></li>
                </ul>
            </div>            
        </footer>
      -->
    </div>
</body>
</html>