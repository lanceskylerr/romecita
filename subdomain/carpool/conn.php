<?php

        $server = "localhost";
        $username ="u235219407_lance_cao"
        $password ="Lance@15"
        $database = "u235219407_carpool_lance"
        $home = "https://carpool.romecitagardenresort.online";

    $connection = mysqli_connect('$server', '$username','$password','database');
    if(mysqli_connect_errno()){
        echo "Failed to connect to MYSQL:" .mysqli_connect_error();
        exit();
}
?>