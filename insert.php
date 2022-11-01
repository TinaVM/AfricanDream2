<?php 
//database connection file
//include 'db.php';
session_start();
$db = mysqli_connect("localhost", "root","","african");

if(isset($_POst['submit'])){
    //getting the post values
    $email = $_POST['emailAddress'];
    $number = $_POST['phoneNumber']; 
    $person = $_POST['contact'];
    $location = $_POST['dropLocation'];
    $platform = $_POST['platform'];
    $meet = date('Y-m-d',strtotime($_POST['meet']));

    //query for data insertion
    $query =  "INSERT INTO `meeting`(emailAddress,phoneNumber,contact,dropLocation,platform,meet)
    VALUES ('$email','$number','$person','$location','$platform','$meet')";

    $query_run = mysqli_query($db,$query);

    if($query_run){
      $_SESSION['status'] = "inserted successfully";
      header("location: Meeting.php");
    }
    else{
      $_SESSION['status'] = "Not inserted";
      header("Location: Meeting.php");
    }

    /*if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
      }
      else
        {
          echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }*/

}

?>