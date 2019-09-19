<?php
    include('env.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-8">
                <form action="add_users.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto">Submit</button>
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Address</th>
                        <th>User ID</th>
                        <th>Phone</th>
                    </thead>
                    <tbody>
                        <?php
                            $query = $conn->query('SELECT * FROM users');
                            while($data = $query->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>".$data['name']."</td>";
                                echo "<td>".$data['email']."</td>";
                                echo "<td>".$data['address']."</td>";
                                echo "<td>".$data['user_id']."</td>";
                                echo "<td>".$data['phone']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
