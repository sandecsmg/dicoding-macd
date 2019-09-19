<?php
    include_once('env.php');
    try {
        if (isset($_POST['name']) || isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $uid = md5($name.$phone);
    
            $params = array($name, $email, $address, $phone, $uid);

            $query = sqlsrv_query($conn, "INSERT INTO users (name, email, address, phone, user_id) VALUES (?, ?, ?, ?, ?)", $params);
            sqlsrv_free_stmt($query);
            
            header("Location: index.php");
        }
        else {
            echo "Oopsie";
        }
    }
    catch(Exception $e) {
        echo $e;
    }
?>
