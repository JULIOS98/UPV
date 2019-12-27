
<?php
//Codigo Php
    if(isset($_POST['enviar']))
    {
        echo 'Formulario recibido <br>';
        //print_r($_POST);

        echo 'Nombre: ' . $_POST['nombre'] . '<br>' .
        'Edad:' . $_POST['edad'] . '<br>'.
        'Telefono:' . $_POST['telefono'] . '<br>' . 
        'Correp:' .$_POST['correo'] . '<br>';
    }


?>