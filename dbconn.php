<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "phpdemo";
    //create the connection.
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        echo "error connecting to database";
    }else{
        echo "connected na po boss";
    }
?>