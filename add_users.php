<?php
    include_once('env.php');
    if(isset($_POST['name']) || isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $uid = md5($name.$phone);
        $created = date('Y-m-d h:i:s');
    
        $query = $conn->prepare("INSERT INTO users (name, email, address, phone, user_id, created_at) VALUES (:name, :email, :address, :phone, :uid, :created)");
        $query->bindparam(':name', $name);
        $query->bindparam(':email', $email);
        $query->bindparam(':address', $address);
        $query->bindparam(':phone', $phone);
        $query->bindparam(':uid', $uid);
        $query->bindparam(':created', $created);        

        $query->execute();
        
        header("Location: index.php");
    }
?>
