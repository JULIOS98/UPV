<?php


//Arreglo Indexado

$matriz = [];
$matriz[0] = [1,2,3];
$matriz[1] = [4,5,6];
$matriz[2] = [7,8,9];


var_dump($matriz);

echo '<br> Elemento: ' . $matriz[1][1];


//Arreglo Asociativo

$alumno1 = array(
                'matricula' => '1630368',
                'nombre' => 'julio',
                'promedio' => 10.0
                );


echo '<br> Promedio: ' .  $alumno1['promedio'];

$alumno2 = array(
    'matricula' => '1630368',
    'nombre' => 'Osmar',
    'promedio' => 6.0,
    'carrera' => 'Pymes',
    'cal_parciales' => [9,8,10]
    );


$grupo = array($alumno1,$alumno2);



var_dump($grupo);


echo '<br> Promedio: ' . $grupo[1]['promedio'];
echo '<br> Cal_Parcial: ' . $grupo[1]['cal_parciales'][2];


echo '<br>';

foreach($grupo as $elemento)
{
    var_dump($elemento);
    echo '<br>';
}

echo '<br>';

foreach($alumno2 as $llave => $valor )
{
    if(is_array($valor))
    {
        var_dump($valor);
    }
    else
    {
        echo" $llave = $valor <br>";
    }
}

?>