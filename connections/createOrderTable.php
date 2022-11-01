<?php 

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

if($result = mysqli_query($mysqli,"SHOW TABLES FROM order LIKE '%order%'")){
    if(mysqli_num_rows($result) == 1){
        echo nl2br("Table order exists\r\n");
    }
}else{
    echo nl2br("Table order does not exist\r\n");
}

$query = 'DROP TABLE IF EXISTS `order`';
if(mysqli_query($mysqli,$query)){
    echo nl2br("Table order has been deleted.\r\n");
}else{
    echo nl2br("Table order has not been deleted.\r\n");
}

$query = "CREATE TABLE order_online(
    order_id int NOT NULL AUTO_INCREMENT,
    equipment VARCHAR(100) NOT NULL,
    function_type VARCHAR(100) NOT NULL, 
    extras VARCHAR(100) NOT NULL,
    specification varchar(100) not null,
    CONSTRAINT PK_order_id PRIMARY KEY(order_id)  
)";

if(mysqli_query($mysqli,$query)){
    echo nl2br("Table order created successfully\r\n");

}else{
    echo nl2br("Error creating table order: \r\n"). @mysqli_error($mysqli);
} 

//Closing the connection
mysqli_close($mysqli)
?>