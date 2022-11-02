<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Book Meeting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="Meeting.php" class="text-light">Add Meeting</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Meeting ID</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Contact Person</th>
      <th scope="col">Location</th>
      <th scope="col">Platform</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
     $query = "SELECT * FROM `meeting`";
     $query_run = mysqli_query($mysqli,$query);

     if($query_run){
        
        while($row = mysqli_fetch_assoc($query_run)){
            $id = $row['meeting_id'];
            $email = $row['email'];
            $phone = $row['phone'];
            $person = $row['person'];
            $location = $row['location'];
            $platform = $row['platform'];
            $date = $row['meetDate'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$person.'</td>
            <td>'.$location.'</td>
            <td>'.$platform.'</td>
            <td>'.$date.'</td>
            <td>
        <button class="btn btn-primary><a href="updateMeeting.php" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deleteMeeting.php" class="text-light">Delete</a></button>
    </td>
          </tr>';
        }
     }
    ?>
    
  </tbody>
</table>
    
    </div>
</body>
</html>