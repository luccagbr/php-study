<?php
    mkdir("images");

    foreach(scandir("images") as $item) {
        if(!in_array($item, array(".", ".."))) {
            unlink("images" . DIRECTORY_SEPARATOR . $item);
        }
    }
?>