<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 3</title>
</head>
<body>
    <?php
    $dia;
    switch($_POST[dia])
    {
        case 1: $dia="Lunes"; break;
        case 2: $dia="Martes"; break;
        case 3: $dia="Miércoles"; break;
        case 4: $dia="Jueves"; break;
        case 5: $dia="Viernes"; break;
        case 6: $dia="Sábado"; break;
        case 7: $dia="Domingo"; break;
    }
    echo $dia;
    ?>
</body>
</html>