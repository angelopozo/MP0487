<!DOCTYPE html>
<html lang="en">

<body>
    <h1>Ejercicio 1</h1>
    <?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "Barcelona");
    $incremento = 1;
    foreach ($datos as $key => $value) {
        echo "dato $incremento: $value <br>";
        $incremento++;
    }
    ?>

    <h1>Ejercicio 2</h1>
    <?php
    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>

    <h1>Ejercicio 3</h1>
    <?php
    $datos["edad"] = 24;
    $incremento = 1;
    foreach ($datos as $key => $value) {
        echo "dato $incremento: $value <br>";
        $incremento++;
    }
    ?>

    <h1>Ejercicio 4</h1>
    <?php
    unset($datos["ciudad"]);
    var_dump($datos);
    ?>

    <h1>Ejercicio 5</h1>
    <?php
    $letters = "a, b, c, d, e , f";
    $letras = explode(",", $letters);
    for ($i = (count($letras) - 1); $i >= 0; $i--) {
        echo "letter " . ($i + 1) . " º: " . $letras[$i] . "<br>";
    }
    ?>

    <h1>Ejercicio 6</h1>
    <?php
    $notasAlumno = array("Miguel" => 2, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($notasAlumno);
    echo "Notas de los estudiantes: ";
    foreach ($notasAlumno as $key => $value) {
        echo "$key: $value ";
    }
    ?>

    <h1>Ejercicio 7</h1>
    <?php
    $suma = 0;
    foreach ($notasAlumno as $key => $value) {
        $suma += $value;
    }
    $media = $suma / 6;
    echo "Media de las notas: " . round($media, 2) . "<br>";
    echo "Alumnos con nota por encima de la media: <br>";

    foreach ($notasAlumno as $key => $value) {
        if ($value > $media) {
            echo "$key <br>";
        }
    }
    ?>

    <h1>Ejercicio 8</h1>
    <?php
    foreach ($notasAlumno as $key => $value) {
        if ($value == max($notasAlumno)) {
            echo "La nota más alta es $value y el mejor alumno es $key <br>";
        }
    }
    ?>
</body>

</html>