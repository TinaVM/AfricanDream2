<?php 
//database connection file
include 'db.php';

if(isset($_POst['submit'])){
    //getting the post values
    $email = $_POST['emailAddress'];
    $number = $_POST['phoneNumber']; 
    $person = $_POST['contact'];
    $location = $_POST['dropLocation'];
    $platform = $_POST['platform'];
    $meet = $_POST['meet'];

    //query for data insertion
    $query = mysqli_query($db, "INSERT INTO meeting(emailAddress,phoneNumber,contact,dropLocation,platform,meet");

    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
      }
      else
        {
          echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }

}

?>