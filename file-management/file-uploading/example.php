<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file_test"/>

    <button type="submit">Enviar</button>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $file = $_FILES["file_test"];

        if($file["error"]) {
            throw new Exception("Error: " . $file["error"]);
        }

        $dirTmp = "upload";

        if(!is_dir($dirTmp)) {
            mkdir($dirTmp);
        }

        if(move_uploaded_file($file["tmp_name"], $dirTmp . DIRECTORY_SEPARATOR . $file["name"])) {
            echo "<br>Upload realizado com sucesso!";
        } else {
            throw new Exception("<br>ão foi possível salvar o arquivo!");
        }
    }
?>