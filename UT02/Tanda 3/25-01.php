<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>

<body>
    <p>Añade un número y luego se muestra al revés</p>
    <?php if (isset($_POST['num'])) : ?>

        <?php
        $n = $_POST['num'];
        $volteado = 0;

        $numero = abs($n);
        while ($numero > 0) {
          $volteado = ($volteado * 10) + ($numero % 10);
          $numero = floor($numero / 10);
        }
        if($n>=0)
        {
            echo "Si le damos la vuelta al $n tenemos el $volteado";
        }
        else
        {
            echo "Si le damos la vuelta al $n tenemos el $volteado-";

        }
      
        ?>

    <?php else : ?>

        <form action="25-01.php" method="post">
            <input type="number" name="num">
            <input type="submit" value="Enviar">
        </form>

    <?php endif; ?>
</body>

</html>