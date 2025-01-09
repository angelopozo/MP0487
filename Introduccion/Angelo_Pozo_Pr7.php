<!DOCTYPE html>
<html>

<body>
    <?php
    $x = 200;
    $y = 300;
    $resultado = 0;

    for ($i = 0; $resultado < $y; $i++) {
        echo "$resultado, ";
        $resultado = $x + 4 ** $i;
    }



    ?>
</body>

</html>