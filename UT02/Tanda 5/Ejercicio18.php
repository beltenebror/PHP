<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 || Tanda 5</title>
</head>

<body>
    <h1>Número decimal a binario</h1>
    <form action="Ejercicio18.php" method="get">
        <label>
            Número:
            <input type="number" name="numero" min="0">
        </label>
        <input type="submit" value="Enviar">
    </form>

    <?php if(isset($_GET['numero'])): ?>

        <?php
        $decimal = $_GET['numero'];
        $binario = decbin($decimal);
        echo "<strong>$decimal</strong> a binario es igual a $binario";
        ?>

    <?php endif; ?>

</body>

</html>