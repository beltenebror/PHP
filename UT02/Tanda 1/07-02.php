<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php7</title>
</head>
<body>
    <?php
    $base = $_POST[base];
    echo "<h1> Factura </h1>";
    echo "<pre>";
    echo "Base Imponible      ".$base ."<br>"; 
    echo "21% de IVA          ".$base*0.21."<br>"; 
    echo "---------------------------------<br>";
    echo "Total               ".$base*1.21;
    echo "</pre>"
    ?>
</body>
</html>
