<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 || Tanda 4</title>
</head>

<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    <h1>Diccionario español -> inglés</h1>

    <?php if(isset($_POST['palabra'])): ?>

        <?php
        $palabraEspañol = $_POST['palabra'];
        $palabraIngles = "";
        $diccionario = array(
            'ordenador' => 'computer',
            'mesa' => 'table',
            'gato' => 'cat',
            'rojo' => 'red',
            'sol' => 'sun',
            'aguate' => 'avocado',
            'cuerpo' => 'body'
        );
        $palabraEspañol = strtolower($palabraEspañol);
        if(isset($diccionario[$palabraEspañol])){
            echo $palabraEspañol . " = " . $diccionario[$palabraEspañol];
        }
        else{
            echo "No tenemos esa palabra en el diccionario";
        }

        ?>

    <?php else: ?>

        <form action="11.php" method="post">
            <label>Palabra en español:
                <input type="text" name="palabra">
            </label>
        </form>

    <?php endif; ?>

</body>

</html>