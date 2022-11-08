<?php 
$uid = "";
$email = "";
$name = "";
$address = "";
$password = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $password = $_POST["password"];
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
</head>
<body>
    <div class="container my-5">
        <h2>New User</h2>
        <form method="POST">
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