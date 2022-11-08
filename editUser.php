<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "african";


//creating connection
$connection = new mysqli($servername,$username,$password,$database);

$id = "";
$uid = "";
$email = "";
$name = "";
$address = "";
$password = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // get method: show the data of the user
    if(!isset($_GET["id"])){
        header("location: /AfricanDream/adminUsers.php");
        exit;
    }
    $id = $_GET["id"];

    //read the row of the selected user from the database table
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: /AfricanDream/adminUsers.php");
        exit;
    }

    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $password = $_POST["password"];
}else{
    //post method : update the data of the user
    $id = $_POST["id"];
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    do{
        if(empty($id) || empty($uid) || empty($email) || empty($name) || empty($address) || empty($password)){
            $errorMessage = "All the fields are required";
            break;
        }

        //update new user to database
        $sql = "UPDATE  user" . 
        "SET user_id = '$uid', email = '$email', name = '$name', address = '$address', password = '$password'" . 
        "WHERE id = $id";
        $result = $connection->query($sql);
        


        if(!$result){
            $errorMessage = "Invalid query: ". $connection->error;
            break;
        }

        $successMessage = "Client updated correctly";

        header("location: /AfricanDream/adminUsers.php");
        exit;
    }while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Edit User</h2>

        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>    
                ";
            }
        ?>
        <form method="POST">
            <input type="hidden" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">User ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="uid" value="<?php echo $uid; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>

            <?php 
            if(!empty($successMessage)){
                echo"
                <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                </div>
                </div>    
                ";
                
            }
            ?>

            <div class="row mb-3">
                <div  class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3  d-grid">
                    <a class="btn btn-outline-primary" href="/AfricanDream/adminUsers.php" role="button">Cancel</a>
                </div>

            </div>
        </form>
    </div>
</body>
</html>