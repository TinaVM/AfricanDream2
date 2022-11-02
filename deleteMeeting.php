<?php 
include 'db.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "DELETE FROM `meeting` WHERE meeting_id=$id";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run){
header("location:adminMeeting.php");
    }else{
        echo '<script type="text/javascript"> alert("Data not inserted") </script>';
    }
}
?>