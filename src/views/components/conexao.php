<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "videos_db";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

?>