<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 || Tanda 4</title>
</head>
<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>


    <!--Programa escoger 10 cartas baraja española y sumar la puntuacion en la brisca-->
    <?php
    $palo = array('oros','bastos','espadas','copas');
    $numero = array('As','Dos','Tres','Cuatro','Cinco','Seis','Siete','Sota','Caballo','Rey');
    $valores = array('As' => 11, 'Dos' => 0, 'Tres' => 10, 'Cuatro' => 0, 'Cinco' => 0, 'Seis' => 0, 'Siete' => 0,
                    'Sota' => 2, 'Caballo' => 3, 'Rey' => 4);
    
    $cartasSacadas = array();
    $numeroSacado = $numero[rand(0,9)];
    $paloSacado =  $palo[rand(0,3)];
    $valor = $valores[$numeroSacado];
    $cartasSacadas[0] = $numeroSacado . " de " . $paloSacado;

    for($i=1; $i<4;$i++)
    {
        $numeroSacado = $numero[rand(0,9)];
        $paloSacado =  $palo[rand(0,3)];
        $repetido = false;
        for($j=0 ; $j<$i ;$j++)
        {
            if(  ($cartasSacadas[$j]) == ($numeroSacado . " de " . $paloSacado)  )
            {
                $repetido = true;
            }
        }
        if($repetido)
        {
            $i--;
        }
        else{
            $cartasSacadas[$i] = $numeroSacado . " de " . $paloSacado;
            $valor += $valores[$numeroSacado];
        }
    }

    echo "<p> Tus cartas son: </p>";

   // for($i=0; $i<4; $i++)
   // {
   //     echo "<p>" . $cartasSacadas[$i] . "</p>";
   //}
    foreach($cartasSacadas as $carta)
    {
        echo "<p>---" . $carta . "</p>";
    }
    echo "<p> Y el valor es: " . $valor . "</p>";
    ?>

</body>
</html>