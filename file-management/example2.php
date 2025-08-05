<?php
    $images = scandir("./images");

    var_dump($images);

    $customizeFile = array();

    foreach($images as $image) {
        if(!in_array($image, array(".", ".."))) {

            $filename = "images" . DIRECTORY_SEPARATOR . $image;

            $info = pathinfo($filename);

            $info["size"] = filesize($filename);
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            $info["url"] = "http://localhost/DIR/" . str_replace("\\", "/", $filename);

            array_push(
                $customizeFile,
                $info
            );
        }
    }

    echo json_encode($customizeFile, JSON_UNESCAPED_SLASHES);
?>