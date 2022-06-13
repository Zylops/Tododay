<?php
    $config = [
        "hostname" => "localhost",
        "username"=> "root",
        "password"=> "",
        "name"=> "tododb"
    ];

    $conn = mysqli_connect($config['hostname'], $config['username'], $config['password'], $config['name']);

    if ($conn) {
        //conn established
    } else {
        echo 'Error' . mysqli_connect_error($conn);
    }
?>