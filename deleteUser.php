<?php 
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
$username = "root";
$password = "";
$database = "african";


//creating connection
$connection = new mysqli($servername,$username,$password,$database);

$sql = "DELETE FROM user WHERE id = '".$id."'";
$connection->query($sql);
}

header("location: /AfricanDream/adminUsers.php");
exit;
?>