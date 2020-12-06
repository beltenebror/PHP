<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 || Tanda 5</title>
</head>
<body>
    <?php
    include "biblioteca1.php";
    echo "<p>";
    for($i=1;$i<100000;$i++)
    {
        if(esCapicua($i))
        {
            echo " $i ";
        }
    }
    echo "</p>";

    ?>
</body>
</html>