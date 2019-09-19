<?php
    try {
        $conn = new PDO("sqlsrv:server = tcp:azuresandec.database.windows.net,1433; Database = azuresandec", "azuresandec", "Salamsandec31juli2016");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }
?>
