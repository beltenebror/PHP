<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 || Tanda 4</title>
</head>

<body>
    <p>Lee 15 números y los almacena en un array y luego muestralos rotandolos</p>
    <?php //mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>

    <?php if (isset($_POST['numero'])) : ?>
        
        <?php
        $array = explode(",",$_POST['array']);
        $numero = $_POST['numero'];
        $contador = $_POST['contador'];
        $array[$contador-1] = $numero;
        ?>


    <?php else : ?>

        <?php
        $contador = 0;
        $array = array(null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
        ?>

    <?php endif; ?>

    <?php if($contador < 15): ?>

        <?php $contador++ ?>
        <form action="03.php" method="post">
        <input type="number" name="numero" autofocus required>
        <input type="hidden" name="contador" value="<?php echo $contador ?>">
        <input type="hidden" name="array" value="<?php echo implode(",",$array) ?>">
        <input type="submit" value="enviar">
        </form>


    <?php else: ?>
        
        <?php

        $temporal = $array[14];
        for($i=count($array)-1; $i>0; $i--)
        {
            
            $array[$i] = $array[$i-1];
            
        }
        $array[0] = $temporal;

        echo "<p>";
        for($i=0;$i<15;$i++)
        {
            echo " ".$array[$i]." ";
        }
        echo "</p>";

        ?>

    <?php endif; ?>

</body>

</html>