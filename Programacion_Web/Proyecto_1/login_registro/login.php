<?php
  
session_start();

$errores = '';

if(isset($_SESSION['usuario']))
{
  header('Location: index.php');  
}


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password = hash('sha512',$password);
  
  
  try
  {
    $conexion = new PDO('mysql:host=localhost; dbname=rosa_sharon','root','Oswaldo96');
  }
  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
    
  }
  
  $statement= $conexion->prepare('SELECT * FROM user WHERE usuario = :usuario AND pass = :password');
  $statement2 = $conexion->prepare("SELECT idRol FROM user WHERE usuario = 'admin'");
  
  $statement->execute(array(':usuario' => $usuario, ':password' => $password ));
  $statement2->execute();
  
  $res = $statement->fetch();
  var_dump($res);
  
  $rol = $statement2;
  
  if($res != false)
  {
    $_SESSION['usuario'] = $usuario;
    
    if($rol == 1)
    {
       header('Location: index.php');
      
    }
    else{
      header('Location: ../pagina2.html');
    }
   
  }
  else
  {
    $errores .= "<li> DATOS INCORRECTOS </li>";
  }
  
}

require 'views/login.view.php';


?>