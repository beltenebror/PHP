<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>
    <?php
    if (isset($_POST['number'])) {
        $n = $_POST['number'];
        $result = false;
        for ($i = 2; $i <= $n/2; $i++) {
            if ($n % $i == 0) {
                $result = true;
            }
        }
        if ($result) {
            echo "<p>
                El número ".$n." <strong>NO</strong> es primo
            </p>";
        } else {
            echo "<p> 
                El número ".$n." <strong>SI</strong>  es primo
            </p>";
        }
    } else { ?>
        <p>
            Introduce un número al que comprobar si es primo:
        </p>
        <form action="16-01.php" method="post">
            <label>Número:
                <input type="number" name="number" min="0">
            </label>
            <input type="submit" value="Ver">

        </form>

    <?php } ?>

</body>

</html>