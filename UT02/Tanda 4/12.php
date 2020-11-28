<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 || Tanda 4</title>
    <style>
        .correcto{
            color: green;
        }
        .cinorrecto{
            color: red;
        }
    </style>
</head>

<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    <?php
    $diccionario = array (
        "ordenador" => "computer",
        "gato" => "cat",
        "rojo" => "red",
        "árbol" => "tree",
        "pingüino" => "penguin",
        "sol" => "sun",
        "agua" => "water",
        "viento" => "wind",
        "siesta" => "nap",
        "arriba" => "up",
        "ratón" => "mouse",
        "estadio" => "arena",
        "calumnia" => "aspersion",
        "aguacate" => "avocado",
        "cuerpo" => "body",
        "concurso" => "contest",
        "cena" => "dinner",
        "salida" => "exit",
        "lenteja" => "lentil",
        "cacerola" => "pan",
        "pastel" => "pie",
        "membrillo" => "quince",
        "perro" => "dog",
        "mesa" => "table",
        "loro" => "parrot"
      );
    ?>
    <?php
        $palabrasEspañol = array();
        foreach($diccionario as $clave => $valor)
        {
            array_push($palabrasEspañol, $clave);
        }
        ?>

    <?php if(isset($_POST['si'])): ?>

        <?php 
            $palabraEspañol1 = $_POST['palabra1'];
            $palabraEspañol2 = $_POST['palabra2'];
            $palabraEspañol3 = $_POST['palabra3'];
            $palabraEspañol4 = $_POST['palabra4'];
            $palabraEspañol5 = $_POST['palabra5'];
            $resuesta1 = strtolower($_POST['palabra01']);
            $resuesta2 = strtolower($_POST['palabra02']);
            $resuesta3 = strtolower($_POST['palabra03']);
            $resuesta4 = strtolower($_POST['palabra04']);
            $resuesta5 = strtolower($_POST['palabra05']);

            $puntuacion = 0;
                    //11111111111111111111111111
            if($diccionario[$palabraEspañol1]==$resuesta1)
            {
                echo '<p>'. $palabraEspañol1.' = <span class="correcto">'.$resuesta1,'</span><p> ';
                $puntuacion++;
            }
            else
            {
                echo '<p>'. $palabraEspañol1.' = <span class="cinorrecto">'.$resuesta1,'</span><p> ';
            }
                    //2222222222222222222222222222
            if($diccionario[$palabraEspañol2]==$resuesta2)
            {
                echo '<p>'. $palabraEspañol2.' = <span class="correcto">'.$resuesta2,'</span><p> ';
                $puntuacion++;
            }
            else
            {
                echo '<p>'. $palabraEspañol2.' = <span class="cinorrecto">'.$resuesta2,'</span><p> ';
            }
                        //33333333333333333333
            if($diccionario[$palabraEspañol3]==$resuesta3)
            {
                echo '<p>'. $palabraEspañol3.' = <span class="correcto">'.$resuesta3,'</span><p> ';
                $puntuacion++;
            }
            else
            {
                echo '<p>'. $palabraEspañol3.' = <span class="cinorrecto">'.$resuesta3,'</span><p> ';
            }
                        //444444444444444444444
            if($diccionario[$palabraEspañol4]==$resuesta4)
            {
                echo '<p>'. $palabraEspañol4.' = <span class="correcto">'.$resuesta4,'</span><p> ';
                $puntuacion++;
            }
            else
            {
                echo '<p>'. $palabraEspañol4.' = <span class="cinorrecto">'.$resuesta4,'</span><p> ';
            }
                        //555555555555555555555
            if($diccionario[$palabraEspañol5]==$resuesta5)
            {
                echo '<p>'. $palabraEspañol5.' = <span class="correcto">'.$resuesta5,'</span><p> ';
                $puntuacion++;
            }
            else
            {
                echo '<p>'. $palabraEspañol5.' = <span class="cinorrecto">'.$resuesta5,'</span><p> ';
            }

            echo "<p><strong> Tu puntuación es $puntuacion/5</strong> </p>";

        ?>
        

    <?php else: ?>

    

        <form action="12.php" method="post">

        <?php $palabra =  $palabrasEspañol[rand(0,count($palabrasEspañol)-1)] ?>
        <label> <?php echo $palabra ?>:
        <input type="text" name="palabra01">
        </label>
        <input type="hidden" name="palabra1" value="<?= $palabra ?>">
        <br>

        <?php $palabra =  $palabrasEspañol[rand(0,count($palabrasEspañol)-1)] ?>
        <label> <?php echo $palabra ?>:
        <input type="text" name="palabra02">
        </label>
        <input type="hidden" name="palabra2" value="<?= $palabra ?>">
        <br>

        <?php $palabra =  $palabrasEspañol[rand(0,count($palabrasEspañol)-1)] ?>
        <label> <?php echo $palabra ?>:
        <input type="text" name="palabra03">
        </label>
        <input type="hidden" name="palabra3" value="<?= $palabra ?>">
        <br>

        <?php $palabra =  $palabrasEspañol[rand(0,count($palabrasEspañol)-1)] ?>
        <label> <?php echo $palabra ?>:
        <input type="text" name="palabra04">
        </label>
        <input type="hidden" name="palabra4" value="<?= $palabra ?>">
        <br>

        <?php $palabra =  $palabrasEspañol[rand(0,count($palabrasEspañol)-1)] ?>
        <label> <?php echo $palabra ?>:
        <input type="text" name="palabra05">
        </label>
        <input type="hidden" name="palabra5" value="<?= $palabra ?>">
        <br>
        
        <input type="hidden" name="si">
        <input type="submit" value="Enviar">
        </form>

    <?php endif; ?>



</body>

</html>