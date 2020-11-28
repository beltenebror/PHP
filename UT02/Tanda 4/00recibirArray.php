<!DOCTYPE html>
<html lang="ess">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
</head>
<body>
    <?php //mostrar errores
    ini_set('display_errors', 1);//mostrar errores
    ini_set('display_startup_errors', 1);//mostrar errores
    error_reporting(E_ALL);//mostrar errores
    ?>

    <?php
    echo "Esta es la que estoy recibiendo del array anterior: <br>----". $_POST['cadena'] . "----<br>";
    $array = explode(",",$_POST['cadena']); // explode pasa la cadena a array
    echo "Entonces el array sería: <br>";
    print_r ($array); //imprimir un array
    echo " <br>";
    for($i = 0; $i < count($array); $i++)   //
    {                                       //Uso esto solamente para imprimir y ver que funciona
        echo " $i ";                        //y lo hace
    }                                       //
    

    ?>

    

        

</body>
</html>