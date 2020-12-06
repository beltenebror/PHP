<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 || Tanda 5</title>
</head>
<body>
    <h1>Número binario a decimal</h1>
    <form action="Ejercicio17.php" method="post">
    <label>
    Número decimal:
    <input type="text" name="numero" >
    <input type="submit" value="Enviar">
    </label>
    </form>
    
    <?php if(isset($_POST['numero'])): ?>

    <?php
    $binario = $_POST['numero'];
    $decimal = bindec($binario);
    $correcto = true;

    for($i=0; $i<strlen($binario);$i++)
    {
        if($binario[$i]!="1")
        {
            if($binario[$i]!="0")
            {
                $correcto=false;
                break;
            }
        }
    }

    if($correcto)
    {
        echo "<strong>$binario</strong> a decimal es igual a $decimal";
    }
    else
    {
        echo "<strong>$binario</strong> no es un número binario válido";
    }
    ?>

    <?php endif; ?>
</body>
</html>