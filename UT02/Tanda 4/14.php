<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 || Tanda 4</title>
    <style>
    div{
        background-color: purple;
        padding: 3em;
        margin: auto;
    }
    .blanca{
        color: white;
    }
    .rojo{
        color:red;
    }
    </style>
</head>

<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>
    <p> el cuadradito para la casilla--> ▆ para la pieza -->♝</p>

    <?php if (isset($_POST['a'])) : ?>

        <?php
        $h = $_POST['h']-1;
        $a = $_POST['a']-1;
        $array = array(
            array('▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>'),
            array('<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆'),
            array('▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>'),
            array('<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆'),
            array('▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>'),
            array('<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆'),
            array('▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>'),
            array('<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆', '<span class="blanca">▆</span>', '▆')
        );


        $derecha = $a+1;
        $izquierda = $a-1;
            //para abajo
        for($i=$h+1; $i<8;$i++)
        {
            if($derecha<8)
            {
                $array[$i][$derecha]='<span class="rojo">▆</span>';
                $derecha++;
            }
            if($izquierda>-1)
            {
                $array[$i][$izquierda]='<span class="rojo">▆</span>';
                $izquierda--;
            }

        }
        $derecha = $a+1;
        $izquierda = $a-1;
            //para arriba
            for($i=$h-1; $i>-1;$i--)
        {
            if($derecha<8)
            {
                $array[$i][$derecha]='<span class="rojo">▆</span>';
                $derecha++;
            }
            if($izquierda>-1)
            {
                $array[$i][$izquierda]='<span class="rojo">▆</span>';
                $izquierda--;
            }

        }






            //pintar
        $array[$h][$a] = '♝';
        echo "<div>";
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {

                echo " " . $array[$i][$j] . " ";
            }
            echo "<br>";
        }
        echo "</div>";
        ?>

    <?php else : ?>

        <form action="14.php" method="post">
        <label>
        a: <input type="number" name="a" min="1" max="8">
        </label>
        <br>
        <label>
        h: <input type="number" name="h" min="1" max="8">
        </label>
        <br>
        <input type="submit" value="Dibujar tablero">
        </form>

    <?php endif; ?>


</body>

</html>