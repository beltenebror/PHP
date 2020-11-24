<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php if(!isset($_POST['numero'])){
        $contador = 0;
        $negativos = 0;
        $positivos = 0;
    }
    else{
        $contador = $_POST['contador'];
        $negativos = $_POST['negativos'];
        $positivos = $_POST['positivos'];
        if($_POST['numero']>=0)
        {
            $positivos = $positivos + 1;
        }
        else{
            $negativos = $negativos + 1;
        }

    }

    if($contador==10)
    {
        echo $positivos . " son los números positivos y " . $negativos . " son los negativos";
    }
    else{//el html 
    $contador=$contador+1?>
    <p>Cuantos números son positivos y cuantos negativos</p>
    <p>Introduzca diez números este es el: <?php echo $contador ?></p>
    <form action="13-01.php" method="post">
    <input type="number" name="numero" autofocus>
    <input type="hidden" name="contador" value="<?php echo $contador ?>">
    <input type="hidden" name="positivos" value="<?php echo $positivos ?>">
    <input type="hidden" name="negativos" value="<?php echo $negativos ?>">


    <input type="submit" value="Enviar">
    </form>

    <?php } ?>
</body>
</html>