<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABLES Y CONSTANTES</title>
</head>
<body>
<?php
    echo "<h2>VARIABLES Y CONSTANTES</h2>";

    # Definición de Constantes:
    define("dato","Un dato de ejemplo en una constante");  
    const dato2="Otro dato de ejemplo en una constante";
    echo "la constante dato es: ".dato;
    echo "<br>";
    echo "la constante dato2 es: ".dato2;
    echo "<br>";
    $numero=5;
    $numero++;
    echo "el numero es ".$numero;
    echo "<br>";
    echo "el número es ".$numero++;
    echo "<br>";
    echo "el número es ".++$numero;
    echo "<br>";

    echo "<h3>Operadores</h3>";
    $numero1=10;
    $numero2=15;
    if($numero1>=$numero2)
    {
        echo "<p>El primer número es mayor</p>";
    }
    else
    {
        echo"<p>El primer número es menor</p>";
    }
    
    $aprobado=True;
    if ($aprobado)
    {
        echo"<p>Has aprobado</p>";
    }
    else
    {
        echo"<p>NA: no apto</p>";
    }

    $nota="8";
    if ($nota==8)       # == --- Compara el valor, sin importar el tipo de dato
    {
        echo"<p>Tu nota es un 8</p>";
    }
    else
    {
        echo"<p>Tu nota no es un 8</p>";
    }

    if ($nota===8)      # === --- Compara el valor y el tipo de dato
    {
        echo"<p>Tu nota es un 8</p>";
    }
    else
    {
        echo"<p>Tu nota no es un 8</p>";
    }

    echo "<h3>Estructores de control</h3>";
    for($i=0;$i<=10;$i++)
    {
        echo $i;
    }

    echo "<br>";

    $a=0;
    while($a<=10)
    {
        echo $a++;
    }
?>



</body>
</html>