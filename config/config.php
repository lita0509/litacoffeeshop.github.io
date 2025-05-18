<?php

    try{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coffee_shop";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $Exception){
        echo $Exception->getMessage() ;

    }

?>
