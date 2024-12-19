<!DOCTYPE html>
<html>

<body>
    <?php

    $memoria = 0;
    $total = 0;
    $par = 0;
    $impar = 0;

    while ($total < 100) {
        $x = rand(0, 20);
        $memoria = $x;

        echo "$memoria, ";
        $total += $x;

        if ($memoria % 2 == 0) {
            $par++;
        } else {
            $impar++;
        }
    }
    echo "<br>";

    echo "The sum total is $total <br>";
    echo "There were $par numbers <br>";
    echo "There were $impar numbers <br>";
    ?>
</body>

</html>