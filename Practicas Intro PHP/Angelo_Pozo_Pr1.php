<!DOCTYPE html>
<html>

<body>
    <?php
    $numero1 = 4;
    $numero2 = 5;

    echo "the numbers are $numero1 and $numero2. <br>";

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $division = $numero1 / $numero2;

    echo "the sum of $numero1 + $numero2 = $suma <br>";
    echo "the substraction of $numero1 - $numero2 = $resta <br>";
    echo "the division of $numero1 / $numero2 = $division <br>";

    if ($numero1 > $numero2) {
        echo "the number $numero1 is the greatest. <br>";
    } elseif ($numero1 < $numero2) {
        echo "the number $numero2 is the greatest. <br>";
    } else {
        echo "both numbers are equal. <br>";
    }

    if ($numero1 > 1 && $numero2 > 1) {
        $triangulo = ($numero1 * $numero2) / 2;
        echo "the triangle area is $triangulo <br>";
    } else {
        echo "the area can't be calculated.";
    }
    ?>
</body>

</html>