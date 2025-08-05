<?php
    $filename = "people.csv";

    if(file_exists($filename)) {
        $file = fopen($filename, "r");

        $headers = explode(",", fgets($file));

        $data = array();

        while($row = fgets($file)) {
            $rowData = explode(",", $row);
            $peopleData = array();

            for($i = 0; $i < count($headers); $i++) {
                $peopleData[$headers[$i]] = $rowData[$i];
            }

            array_push($data, $peopleData);
        }

        fclose($file);

        var_dump($data);
    }

?>