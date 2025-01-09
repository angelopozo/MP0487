<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tamañoMax = htmlspecialchars($_POST['tamaño']);
        $tipoArchivo = htmlspecialchars($_POST['tipo']);
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $_FILES["fileToUpload"]["size"] < $tamañoMax && $imageFileType == $tipoArchivo) {
            echo "El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " ha sido subido.";
        } elseif ($imageFileType != "$tipoArchivo") {
            echo "Lo siento, hubo un error al subir tu archivo. Solo se aceptan archivos $tipoArchivo";
        } elseif ($_FILES["fileToUpload"]["size"] > $tamañoMax) {
            echo "Lo siento, hubo un error al subir tu archivo. Solo se aceptan archivos de " . ($tamañoMax/1000) . "KB o inferior.";
        }
    }

    ?>

    <form method="POST" enctype="multipart/form-data">
        <label for="file">Archivo</label>
        <input type="file" name="fileToUpload" id="file"><br>

        <label for="browser">Extensión</label>
        <select name="tipo" id="tipo">
            <option value="jpg">jpg</option>
            <option value="png">png</option>
            <option value="pdf">pdf</option>
        </select><br>

        <label for="tamaño">Tamaño MAX</label>
        <input type="number" name="tamaño" id="tamaño"><br>

        <input type="submit" value="Enviar">
    </form>


</body>

</html>