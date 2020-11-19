<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 2</title>
</head>
<body>
    <?php 
    $hora = $_POST[hora];
    $saludo;
    if(($hora>5)&&($hora<13))
    {
        $saludo = "Buenos días";
    }
    elseif(($hora >12)&&($hora<21))
    {
        $saludo = "Buenas tardes";
    }
    else{
        $saludo = "Buenas noches";
    }
    echo $saludo;
    ?>
</body>
</html>