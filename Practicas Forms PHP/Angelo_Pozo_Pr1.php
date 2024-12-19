<!DOCTYPE html>
<html>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(string: $_POST['name']);
        $surname = htmlspecialchars(string: $_POST['surname']);

        echo "Nombre: $name <br>";
        echo "Apellido: $surname";
    }
    ?>
    <h2>Introduce tu nombre y tu apellido</h2>
    <form action="Angelo_Pozo_Pr1.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="surname" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>