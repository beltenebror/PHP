<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>

<body>
    <p>Un número en el que iremos a buscar un dígito</p>
    <?php if (isset($_POST['numero'])) : ?>
        <?php
        $numero = strval($_POST['numero']);
        $digito = strval($_POST['digito']);
        $lugar;
        
        for($i=0; $i< strlen($numero); $i++)
        {
            if($numero[$i] == $digito)
            {
                $lugar = $i + 1;
            }
        }
        echo "La posicion es " . $lugar;

        ?>
    <?php else : ?>
        <form action="26-01.php" method="post">
            <label> Número:
                <input type="number" name="numero">
            </label>
            <br>
            <label> Digito a buscar:
                <input type="number" name="digito" min="0" max="9">
            </label>
            <br>
            <input type="submit" value="Buscar">
        </form>
    <?php endif; ?>
</body>

</html>