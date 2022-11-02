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

if($result = mysqli_query($mysqli,"SHOW TABLES FROM order_online LIKE '%order_online%'")){
    if(mysqli_num_rows($result) == 1){
        echo nl2br("Table order_online exists\r\n");
    }
}else{
    echo nl2br("Table order_online does not exist\r\n");
}

$query = 'DROP TABLE IF EXISTS `order_online`';
if(mysqli_query($mysqli,$query)){
    echo nl2br("Table order_online has been deleted.\r\n");
}else{
    echo nl2br("Table order_online has not been deleted.\r\n");
}

$query = "CREATE TABLE order_online(
    order_id int NOT NULL AUTO_INCREMENT,
    equip_name VARCHAR(100) NOT NULL,
    equip_price INT(10)  NOT NULL,
    equip_quantity INT(10) NOT NULL,
    function_type VARCHAR(100) NOT NULL,
    extras VARCHAR(100) NOT NULL,
    specification VARCHAR(100) NOT NULL,
    CONSTRAINT PK_order_id PRIMARY KEY(order_id)  
)";

if(mysqli_query($mysqli,$query)){
    echo nl2br("Table order_online created successfully\r\n");

}else{
    echo nl2br("Error creating table order_online: \r\n"). @mysqli_error($mysqli);
} 

//Closing the connection
mysqli_close($mysqli)
?>