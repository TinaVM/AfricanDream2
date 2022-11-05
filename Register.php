<?php 
session_start();
include "db.php";
include "functions.php";

$count = 0;

if(isset($_POST['submit'])){
    // Data sent from form 
    $userid = $_POST['user_id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    //Calling the validating functions from functions php file
    emptyValidation($userid,$email,$name,$address,$password);
    emailValidation($email);
    passwordValidation($password);
    

    //hashing password
    $password = md5($password);

    //Query to check if user id exists
    $query = "SELECT * FROM user WHERE user_id='$userid'";
    $result = mysqli_query($ysqli,$query);
    userIDexists($userid); //calling function tp check if user id exists or not

    if($count == 0){
        //writing to database and confirming info
        $query2 = "INSERT INTO user(user_id,email,name,address,password)";
        $result2 = mysqli_query($mysqli,$query);
        echo "<script>alert('Please wait, awaiting confirmation...')</script>";
			echo "<script>alert('You have successfully registered, click login to login.')</script>";
	
    }else{
        echo "";
    }

}else{
    echo "";
}
?>