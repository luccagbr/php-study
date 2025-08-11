<?php
    $file = fopen("test.txt", "a+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);

    echo "Arquivo criado com sucesso!";
?>