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
            try {
                $query = sqlsrv_query($conn, "INSERT INTO users (name, email, address, phone, user_id) VALUES (?, ?, ?, ?, ?)", $params);
            } catch (Exception $e) {
                echo $e;
            }
            sqlsrv_free_stmt($query);
            header("Location: index.php");
        }
    }
catch(Exception $e) {
    echo $e;
}
?>
