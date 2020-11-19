<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 9</title>
</head>
<body>
<?php
    $cifras = 0;
    $numero = abs($_POST['numero']);
    do{
        $numero = floor($numero/10);
        $cifras = $cifras+1;
    }while($numero>0);
    echo "<p> El número de cifras es: ".$cifras."</p>";

    ?>
</body>
</html>