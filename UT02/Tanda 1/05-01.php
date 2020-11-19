<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <p>Calcular el área de un rectángulo, meta los datos en centímetros</p>
    <form action="05-01.php" method="post">
    <label>
    Altura: <input type="text" name="altura">
    </label> <br>
    <label>
    Base: <input type="text" name="base">
    </label> <br>
    <input type="submit" value="Calcular">
    </form>

    <?php

    echo "<p> El área del rectángulo con " .$_POST[altura] ."cm de altura y "
     .$_POST[base] ."cm de base es igual a --> " .($_POST[altura]*$_POST[base])."cm²</p>";

    ?>


</body>
</html>