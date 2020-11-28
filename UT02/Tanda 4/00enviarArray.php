<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $array = array(1,2,3,4,5,6,7,8,9,10); //creo el array
    ?>
    <form action="recibirArray.php" method="post">
    <input type="hidden" name="cadena" size="0" value="<?php echo implode(",",$array) ?>">
    <input type="submit" value="vamos">       <!-- implode transforma en string"1,2,3,4,5,6,7,8,9" -->
    </form>                                  <!-- Ojo al enviar un array vacio que se genera la posicion 0 vacia-->
                                            <!-- y si intentamos rellenar con un push sigue a partir de la 1-->
</body>
</html>