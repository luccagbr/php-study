<?php
    $filename = "images.jpeg";

    if(file_exists($filename)) {
        $base64 = base64_encode(file_get_contents($filename));

        $fileinfo = new finfo(FILEINFO_MIME_TYPE);

        $mimetype = $fileinfo->file($filename);

        $base64 = "data:" . $mimetype . ";base64," . $base64; 
    }
?>

<a href="<?=$base64?>">Clique aqui</a>
<img src="<?=$base64?>" />