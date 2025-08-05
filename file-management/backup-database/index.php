<?php
    require_once("config.php");

    try {
        echo PHP_VERSION;
        echo "<br>";

        $database = new Database("users_control", "localhost", "root", "");
    
        $result = $database->customQuery("SELECT * FROM people", array())->fetchAll(PDO::FETCH_ASSOC);
    
        $headers = array();

        foreach($result[0] as $key => $value) {
            array_push($headers, ucfirst($key));
        }

        $file = fopen("people.csv", "w+");

        fwrite($file, implode(",", $headers) . "\r\n");

        foreach($result as $row) {
            $data = array();

            foreach($row as $key => $value) {
                array_push($data, $value);
            } 

            fwrite($file, implode(",", $data) . "\r\n");
        }

        fclose($file);
    } catch(Exception $error) {
        throw new Exception($error->getMessage());
    }

?>