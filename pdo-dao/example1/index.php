<?php
    require_once("config.php");

    try {
        $person = new People("Lucca Gabriel", new DateTime(), "teste@lucca.com");
    
        $person->findPeopleById(2);

        echo $person;
    } catch(Exception $error) {
        throw new Exception($error->getMessage());
    }
?>