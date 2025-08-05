<?php
    var_dump($_COOKIE);
    echo "<br>";

    if(isset($_COOKIE["user_info"])) {
        $userList = json_decode($_COOKIE["user_info"], true);

        echo "<br>";
        var_dump($userList);
        echo "<br>";

        foreach($userList AS $user) {
            echo "<br>USER: $user";

            foreach($user as $key => $obj) {
                echo "<br>VALUE: " . $obj[$key];
            }

            echo "<br><br>";
        }
    }
?>