<!DOCTYPE html>
<html lang="es">

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $personaje1 = htmlspecialchars($_POST['character1']);
        $personaje2 = htmlspecialchars($_POST['character2']);
        $objeto1 = htmlspecialchars($_POST['object1']);
        $objeto2 = htmlspecialchars($_POST['object2']);
        $rondas = htmlspecialchars($_POST['round']);
        $victoriaPersonaje1 = 0;
        $victoriaPersonaje2 = 0;

        for ($i = 0; $i < $rondas; $i++) {
            if ($objeto1 == "Sartén") {
                $x = rand(1, 8);
            } else {
                $x = rand(1, 4);
            }

            if ($objeto2 == "Sartén") {
                $y = rand(1, 8);
            } else {
                $y = rand(1, 4);
            }

            echo "El personaje nº 1: $personaje1, ha elegido el objeto $objeto1 y ha obtenido un valor de $x <br>";
            echo "El personaje nº 2: $personaje2, ha elegido el objeto $objeto2 y ha obtenido un valor de $y <br>";                        # code...

            if ($x < $y) {
                echo "La victoria de esta ronda es para el personaje nº 2: $personaje2 <br><br>";
                $victoriaPersonaje2++;
            } else if ($x > $y) {
                echo "La victoria de esta ronda es para el personaje nº 1: $personaje1 <br><br>";
                $victoriaPersonaje1++;
            } else {
                echo "Ha habido un empate en esta ronda, no suma puntos para ningún personaje. <br><br>";
            }
        }
        echo "<img src='Practicas Forms PHP/picturesEjercicio7/$personaje1.png' alt='$personaje1' width='175' height='185'> <br>";
        echo "El personaje nº 1: $personaje1 ⮕ Número de victorias: $victoriaPersonaje1 <br><br>";

        echo "<img src='picturesEjercicio7/$personaje2.png' alt='$personaje2' width='175' height='185'> <br>";
        echo "El personaje nº 2: $personaje2 ⮕ Número de victorias: $victoriaPersonaje2 <br><br>";

        if ($victoriaPersonaje1 > $victoriaPersonaje2) {
            echo "El ganador final por ganar $victoriaPersonaje1 ronda/s es $personaje1. <br><br>";
        } else if ($victoriaPersonaje1 == $victoriaPersonaje2) {
            echo "No hay un ganador final. ¡Ha habido un empate! <br><br>";
        } else {
            echo "El ganador final por ganar $victoriaPersonaje2 ronda/s es $personaje2. <br><br>";
        }
    }
    ?>

    <form method="POST" enctype="multipart/form-data">

        <label for="select1">Personaje nº 1</label>
        <select name="character1" id="personaje1">
            <option value="Doraemon">Doraemon</option>
            <option value="Nobita">Nobita</option>
        </select> <br>

        <label for="select2">Personaje nº 2</label>
        <select name="character2" id="personaje2">
            <option value="Doraemon">Doraemon</option>
            <option value="Nobita">Nobita</option>
        </select> <br><br>

        <label for="select3">Objeto del Personaje 1</label>
        <select name="object1" id="objeto1">
            <option value="Sartén">Sartén 1d8</option>
            <option value="Dorayaki">Dorayaki 24d</option>
        </select> <br>

        <label for="select4">Objeto del Personaje 2</label>
        <select name="object2" id="objeto2">
            <option value="Sartén">Sartén 1d8</option>
            <option value="Dorayaki">Dorayaki 24d</option>
        </select> <br><br>

        <label for="rondas">Rondas:</label>
        <input type="number" id="ronda" name="round" min="1" required><br><br>

        <input type="submit" value="Enfrentar">
    </form>
</body>

</html>