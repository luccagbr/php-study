<?php
    $name_dir = "images";

    if(!is_dir($name_dir)) {
        mkdir($name_dir);

        echo "Diretório criado com sucesso!<br>";
    } else {
        echo "O diretório já está criado!<br>";
    }
?>