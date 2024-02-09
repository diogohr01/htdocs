<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Enviar</button>
</form>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $file = $_FILES["fileUpload"];

    if ($file["error"]) {
        throw new Exception("Error: " . $file["error"]);
    }
    $dirUploads = "uploads";

    if (!is_dir($dirUploads)) {

        mkdir($dirUploads, 0777, true);
    }
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {

     echo "arquivo enviado ao diretorio";
    } else {
        throw new Exception("não enviou o arquivo ao diretorio");
    }
}
?>  