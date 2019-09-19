<?php
    $host = 'tcp:azuresandec.database.windows.net';
    $db = 'azuresandec';
    $username = 'sandechebat';
    $pass = 'Salamsandec123';
    $port = '1433';

    $env = mysqli_connect($host, $username, $pass, $db, $port);
?>
