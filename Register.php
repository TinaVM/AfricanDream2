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
    user

    //hashing password
    $password = md5($password);

    //Query to check if user id exists
    $query = "SELECT * FROM user WHERE user_id='$userid'";
    $result = mysqli_query($ysqli,$query);

}
?>