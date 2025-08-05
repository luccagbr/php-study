<?php
    $link = "https://www.php.net/images/php8/logo_php8_4.svg";
    $content = file_get_contents($link);

    $parse = parse_url($link);

    $basename = basename($parse["path"]);
    $file = fopen($basename, "w+");

    fwrite($file, $content);

    fclose($file);
?>
<div>
    <p>Imagem de teste</p>
    <img src="<?=$basename?>"/>
</div>