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

if($result = mysqli_query($mysqli,"SHOW TABLES FROM meeting LIKE '%meeting%'")){
    if(mysqli_num_rows($result) == 1){
        echo nl2br("Table meeting exists\r\n");
    }
}else{
    echo nl2br("Table meeting does not exist\r\n");
}

$query = 'DROP TABLE IF EXISTS `meeting`';
if(mysqli_query($mysqli,$query)){
    echo nl2br("Table meeting has been deleted.\r\n");
}else{
    echo nl2br("Table meeting has not been deleted.\r\n");
}

$query = "CREATE TABLE meeting(
    meeting_id VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone int(10) NOT NULL, 
    person VARCHAR(100) NOT NULL,
    location varchar(100) not null,
    platform VARCHAR(100) NOT NULL,
    meetDate date NOT NULL,
    login_id VARCHAR(50) NOT NULL,
    CONSTRAINT PK_meet_id PRIMARY KEY(meeting_id),
    CONSTRAINT FK_login_id FOREIGN KEY(login_id) REFERENCES login(login_id)
)";

if(mysqli_query($mysqli,$query)){
    echo nl2br("Table meeting created successfully\r\n");

}else{
    echo nl2br("Error creating table meeting: \r\n"). @mysqli_error($mysqli);
} 

//Closing the connection
mysqli_close($mysqli)
?>