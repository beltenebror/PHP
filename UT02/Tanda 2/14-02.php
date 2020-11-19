<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 14</title>
</head>
<body>
    <?php
    $a = $_POST['a'];
    $resultado;
    if($a%2==0)
    {
        $resultado = "Es par y ";
    }
    else
    {
        $resultado = "Es impar y ";
    }

    if($a%5==0)
    {
        $resultado = $resultado . "divisible por 5.";
    }
    else
    {
        $resultado = $resultado . "no es divisible por 5.";
    }
    echo "<p>".$a."</p>";

    echo "<p>".$resultado."</p>";

    ?>
    
</body>
</html>