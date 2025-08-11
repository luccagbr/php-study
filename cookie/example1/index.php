<?php
    var_dump($_COOKIE);
    echo "<br><br>";
    
    $user = array(
        array(
            "name" => "Lucca Gabriel",
            "age" => 24,
            "birthday_date" => date("Y-m-d")
        ),
        array(
            "name" => "Fulano da Silva",
            "age" => 45,
            "birthday_date" => date("Y-m-d")
         ),
        array(
            "name" => "Ciclano Pereira",
            "age" => 32,
            "birthday_date" => date("Y-m-d")
        )
    );

    setCookie("user_info", json_encode($user));
?>