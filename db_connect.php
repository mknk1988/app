<?php
    $mysqli = new mysqli("localhost", "root", "", "db_app");
    if ($mysqli->connect_errno) {
        echo "Подключить не удалось.";
    } else {
        echo "Подключение удачно \n";
    }
    echo $mysqli->host_info . "\n";
?>