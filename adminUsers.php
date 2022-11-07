<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Users</h2>
        <a class="btn btn-primary" href="/AfricanDream/create.php" role="button">New User</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "african";


                //creating connection
                $connection = new mysqli($servername,$username,$password,$database);

                //check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class='btn btn-primary btn sm' href='/AfricanDream/editUser.php'>Edit</a>
                        <a class='btn btn-danger btn sm' href='/AfricanDream/deleteUser.php'>Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>