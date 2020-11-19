<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 1</title>
</head>
<body>
    <?php
    $dia = $_POST[dia];
    $dia = strtolower($dia);
    $decir;
    switch($dia){
        case "lunes": $decir = "Desarrollo Web Entorno Cliente";break;
        case "martes": $decir = "Empresa e Iniciativa Emprendedora";break;
        case "miercoles": $decir = "Desarrollo Web Entorno Servidor";break;
        case "miércoles": $decir = "Desarrollo Web Entorno Servidor";break;
        case "jueves": $decir = "Despliege de Aplicaciones Web";break;
        case "viernes": $decir = "Diseño de interfaces web";break;
        default : $decir = "No hay clase este día o te has equicovado";break;
    }
    echo "El día '" . $_POST[dia] . "' : " . $decir;

    ?>
</body>
</html>