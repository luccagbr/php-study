<?php
    $dir1 = "directory1";
    $dir2 = "directory2";

    if(!is_dir($dir1)) {
        mkdir($dir1);
    }

    if(!is_dir($dir2)) {
        mkdir($dir2);
    }  

    $filename1 = "readme.txt";

    if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename1)) {
        $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename1, "w+");

        fwrite($file, date("d-m-y H:i:s"));

        fclose($file);
    }

    $filename2 = "readme2.txt";

    if(!file_exists($dir2 . DIRECTORY_SEPARATOR . $filename2)) {
        $file = fopen($dir2 . DIRECTORY_SEPARATOR . $filename2, "w+");

        fwrite($file, date("d-m-y H:i:s"));

        fclose($file);
    }

    rename(
        $dir1 . DIRECTORY_SEPARATOR . $filename1,
        $dir2 . DIRECTORY_SEPARATOR . $filename1
    );
?>