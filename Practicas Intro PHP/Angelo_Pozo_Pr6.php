<!DOCTYPE html>
<html>

<body>
    <?php
    $multiplo = 3;
    $numero = 1;
    $par = 0;
    $impar = 0;

    while ($numero <= 50) {
        if (($numero % 2 == 0) && ($numero % $multiplo == 0 && $multiplo <= $numero)) {
            echo "$numero, ";
            $numero++;
        } else {
            $numero++;
        }
    }
    ?>
</body>

</html>