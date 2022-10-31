<?php 
    include 'db.php';

    //declaring database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "african";

//Creating the connection;
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

//Checking the connection
if(@mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ". @mysqli_connect_error();
    exit();
}

if($result = mysqli_query($mysqli,"SHOW TABLES FROM login LIKE '%login%'")){
    if(mysqli_num_rows($result) == 1){
        echo nl2br("Table login exists\r\n");
    }
}else{
    echo nl2br("Table login does not exist\r\n");
}

$query = 'DROP TABLE IF EXISTS `login`';
if(mysqli_query($mysqli,$query)){
    echo nl2br("Table login has been deleted.\r\n");
}else{
    echo nl2br("Table login has not been deleted.\r\n");
}

$query = "CREATE TABLE login(
    login_id VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL, 
    CONSTRAINT PK_log_id PRIMARY KEY(login_id),
)";
?>