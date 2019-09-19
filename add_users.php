<?php
    include_once('env.php');
    if(isset($_POST['name']) || isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $uid = md5($name.$phone);
        $created = date('Y-m-d h:i:s');
    
        mysqli_query($env, "INSERT INTO users (name, email, address, phone, user_id, created_at) VALUES ('$name', '$email', '$address', '$phone', '$uid', '$created')");
        
        header("Location: index.php");
    }
?>