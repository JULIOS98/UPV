<?php

session_start();

if(isset($_SESSION['usuario']))
{
  require 'index.php';
}
else
{
  header('Location: login.php');
}



?>