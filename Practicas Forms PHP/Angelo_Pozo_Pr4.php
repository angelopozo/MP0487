<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "El archivo ". htmlspecialchars(basename($_FILES["file"]["name"])). " ha sido subido.";
    } elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
        echo "Lo siento, hubo un error al subir tu archivo. Solo se acpetan archivos JPG, JPEG, PNG y GIF.";
    } elseif ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Lo siento, hubo un error al subir tu archivo. Solo se aceptan archivos de 500KB o inferior.";
    } 
}
?>
<form method="post" enctype="multipart/form-data">
    <label for="file">Archivo:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value = "Enviar" name = "submit">
</form>

</body>
</html>