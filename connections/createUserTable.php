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

if($result = mysqli_query($mysqli,"SHOW TABLES FROM user LIKE '%user%'")){
    if(mysqli_num_rows($result) == 1){
        echo nl2br("Table user exists\r\n");
    }
}else{
    echo nl2br("Table user does not exist\r\n");
}

$query = 'DROP TABLE IF EXISTS `user`';
if(mysqli_query($mysqli,$query)){
    echo nl2br("Table user has been deleted.\r\n");
}else{
    echo nl2br("Table user has not been deleted.\r\n");
}

$query = "CREATE TABLE user(
    id INT NOT NULL AUTO_INCREMENT,
    user_id VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(200) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    CONSTRAINT PK_id PRIMARY KEY(id)
)";

if(mysqli_query($mysqli,$query)){
    echo nl2br("Table user created successfully\r\n");

}else{
    echo nl2br("Error creating table user: \r\n"). @mysqli_error($mysqli);
} 

//Reading text file and inserting data

//creating new instance of connection
//$mysqli = new mysqli('localhost','root','','african');
//opening file stream and reads it only 'r'
//$file = fopen("userData.txt","r");

/*while(!feof($file)){
    $content = fgets($file);
    //data was separated with ';' in text file
    $carray = explode(";", $content);
    //assingin varibales to table column heading to link data
    list($user_id,$email,$name,$address,$password) = $carray;
    $sql = "insert into `user`(`user_id`,`email`,`address`,`password`) values('$user_id','$email','$name','$address','$password')";
    //Displays/sorta file contents into array
    @mysqli_query($mysqli,$sql);
    //--REMOVING UNNECESSARY NOTICE ERROR DUE TO CODE PRODUCING DESIRED RESULTS
//SOURCE: https://phoenixnap.com/kb/php-error-reporting
error_reporting(0);
} 
fclose($file);*/

//Closing the connection
mysqli_close($mysqli)
?>