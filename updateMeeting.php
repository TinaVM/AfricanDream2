<?php include 'db.php';
$id=$_GET['updateid'];
$query = "SELECT * FROM `meeting` WHERE meeting_id=$id";
$query_run = mysqli_query($mysqli,$query);
$row=mysqli_fetch_assoc($query_run);
$email = $row['email'];
    $number = $row['phone']; 
    $person = $row['person'];
    $location = $row['location'];
    $platform = $row['platform'];
    $meet = date('Y-m-d',strtotime($row['meetDate']));

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $number = $_POST['phone']; 
    $person = $_POST['person'];
    $location = $_POST['location'];
    $platform = $_POST['platform'];
    $meet = date('Y-m-d',strtotime($_POST['meetDate']));
  
    $query = "UPDATE `meeting` SET meeting_id=$id,email='$email',phone='$number',contact='$person',location='$location',platform='$platform',meetDate='$meet'
    WHERE meeting_id=$id";
    
     $query_run = mysqli_query($mysqli,$query);
  
     if($query_run){
      //echo '<script type="text/javascript"> alert("Data inserted") </script>';
      header("location:addMeeting.php");
     }else{
      echo '<script type="text/javascript"> alert("Data not updated") </script>';
     }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Meeting</title>
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <!--Sidebarr-->
	
	<div class="sidebar">
		<a class="active" href="Homepage.html">Home</a>
		<a href="order.html">Order Online</a>
		<a href="Meeting.html">Book Meeting</a>
		<a href="Events.html">Major Events</a>
		<a href="#celeb">Celebrations</a>
		<a href="#wedding">Weddings</a>
		<a href="#about">About Us</a>
		<a href="#contact">Contact Us</a>
		<a href="#reviews">Reviews</a>
	  </div>

    <div class="meet-container">
        <h1>Update Meeting</h1>
        <section class="form-sec">
            <form action="" method="POST">
                <div class="form-group">
                  <label for="emailAddress">Email address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value=<?php echo $email;?>>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number" value=<?php echo $number;?>>
                </div>
                <div class="form-group">
                  <label for="contact">Contact Person</label>
                  <input type="text" class="form-control" name="person" placeholder="Add Attendee" value=<?php echo $person;?>>
                </div>
                <div class="form-group">
                  <label for="place">Location</label>
                  <select name="location" class="form-control" value=<?php echo $location;?>>
                    <option value="" selected >--Select A Location--</option>
                    <option value="African Dream Offices">African Dream Offices</option>
                    <option value="Online">Online</option>
                    <option value="Other">Other</option>
                  </select>
                  <small id="platform" class="form-text text-muted">If 'Online' selected, please pick platform:</small>
                  <input type="radio" id="zoom" name="platform" value="Zoom" >
                  <label for="zoom">Zoom</label><br>
                  <input type="radio" id="teams" name="platform" value="Microsoft Teams">
                  <label for="teams">Teams</label><br>
                  <input type="radio" id="google" name="platform" value="Google Meets">
                  <label for="google">Google Meets</label><br>
                </div>
                <div class="form--group">
                  <label for="pickDate">Pick A Date</label>
                  <input type="date" id="meetDate" name="meetDate" min="2022-01-01" value=<?php echo $meet;?>>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="confirm">
                  <label class="form-check-label" for="confirm">I hereby confirm that the information presented is correct.</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update Meeting</button>
              </form>
        </section>
    </div>
    
</body>
</html>