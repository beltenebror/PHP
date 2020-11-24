<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>

<body>
    <p>Los primos entre 2 y 100</p>
    <?php
    echo "<p>";
    for ($i = 2; $i < 101; $i++) {
        $result = true;
        for ($j = 2; $j <= $i/2; $j++) {
            if (($i % $j == 0)) {
                $result = false;
                break;
            }
        }
        if ($result) {
            echo " " . $i . " ";
        }
    }
    echo "</p>";
    ?>

</body>

</html>