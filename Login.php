<?php 
session_start();
include "db.php";

if(isset($_POST["submit"])){
    $id = $_POST['ID'];
    $password = $_POST['password'];
    $count = 0;
    if(empty($id) || empty($password)) //Form validations
        {
            $count++;
            $error = "Fill in all Fields!";
        }
        else{

    $password = md5($password); //Undoing the hashing for the password
    $query = "SELECT name, email FROM user WHERE user_id = '$id' and password = '$password'"; //Sql query to retrieve data from table        
    $result = mysqli_query($mysqli,$query);
    $count2 = 0; //Error counter
    if($result -> num_rows > 0) { //Validating data against data entered
        $row = mysqli_fetch_assoc($result);
        $_SESSION['Uid'] = $id;  
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        echo "<script>alert('Please wait, awaiting confirmation...')</script>";
        header("Location: Homepage.php"); //Takes user to next page
    }else {  
        $count2++;
        $error = "Incorrect User ID or Password, try again!";
    }
 }
}
?>