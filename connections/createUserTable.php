<?php 
    //include 'db.php';

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

if($result = mysqli_query($mysqli,"SHOW TABLES FROM user LIKE '%us%'")){
    if(mysqli_num_rows($result) == 1){
        echo nl2br("Table user exists\r\n");
    }
}else{
    echo nl2br("Table user does not exist\r\n");
}

$query = 'DROP TABLE IF EXISTS `login`';
if(mysqli_query($mysqli,$query)){
    echo nl2br("Table user has been deleted.\r\n");
}else{
    echo nl2br("Table user has not been deleted.\r\n");
}

$query = "CREATE TABLE user(
    user_id VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(200) NOT NULL,
    password VARCHAR(100) NOT NULL, 
    CONSTRAINT PK_user_id PRIMARY KEY(user_id)
)";

if(mysqli_query($mysqli,$query)){
    echo nl2br("Table user created successfully\r\n");

}else{
    echo nl2br("Error creating table user: \r\n"). @mysqli_error($mysqli);
} 

//Closing the connection
mysqli_close($mysqli)
?>