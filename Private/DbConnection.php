<?php
    $serverName = "localhost";
    $serverPath = "root";
    $dbPassword = "";
    $dbName = "";

    $DbConnection = mysqli_connect($serverName, $serverPath, $dbPassword, $dbName);

    if(!$DbConnection){
        die("Something went wrong");
    }
?>