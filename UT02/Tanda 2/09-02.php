<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 9</title>
</head>
<body>
    <?php
        $a = $_POST[a];
        $b = $_POST[b];
        $c = $_POST[c];
        $raiz = ($b*$b)-(4*$a*$b);
        $arriba = $b*-1;
        $abajo = $a*2;
        $raizresuelta = sqrt($raiz);
        if($a!=0 && $raiz >= 0)
        {
            echo "<p>" . $a ."x<sup>2</sup> + " .$b ."x + ".$c ." = 0" . "</p>";
            echo "<pre>
            -$b+-sqr($b<sup>2</sup>-4*$a*$c)
     x = -------------------------
                  2*$a
        </pre>";
           
            echo "<pre>
             -$b+-sqr($raiz)
     x = -------------------------
                  2*$a
        </pre>";
       
            echo "<pre>
               $arriba+-$raizresuelta
     x = -------------------------
                   $abajo
        </pre>";   
        echo "<p> x = " . ($arriba+$raizresuelta)/2 . " // x = " . ($arriba-$raizresuelta)/2  . "</p" ;
    

        }
        elseif($a==0)
        {
            echo "<p>" . $a ."x<sup>2</sup> + " .$b ."x + ".$c ." = 0" . "</p>";
            echo "<pre>
            -$b+-sqr($b<sup>2</sup>-4*$a*$c)
     x = -------------------------
                  2*$a
        </pre>";
            echo "<p> Error al no poder dividirse por 0 </p>";
        }
        else{
            echo "<p>" . $a ."x<sup>2</sup> + " .$b ."x + ".$c ." = 0" . "</p>";
            echo "<pre>
            -$b+-sqr($raiz)
     x = -------------------------
                  2*$a
        </pre>";
            echo "<p> No se puede hacer raiz de un número negativo</p>";
        }

       
      
    ?>
    
</body>
</html>