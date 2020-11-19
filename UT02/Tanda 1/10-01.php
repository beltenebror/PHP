<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Mb a Kb</p>
    <form action="10-01.php" method="post">
        <label>
            Mb <input type="text" name="mb"> <br>
        </label>
        <input type="submit" value="Calcular">
    </form>
    <?php
        echo "<p>" .$_POST[mb] ." Mb son igual a " .($_POST[mb]*1024) ." Kb </p>";


    ?>
</body>
</html>
