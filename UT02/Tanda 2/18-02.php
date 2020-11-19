<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 18</title>
</head>
<body>
    <?php
    $numero = $_POST['numero'];
    $numero = abs($numero);
    $cifras = 0;

    do{
        $numero = floor($numero / 10);
        $cifras = $cifras + 1;
    } while ($numero > 0) ;
    
    echo "El número de cifras de ". $_POST['numero'] . " es: " . $cifras;

    ?>
</body>
</html>