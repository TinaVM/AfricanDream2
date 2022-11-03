<?php include 'db.php';
/*$result="";
if (isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;

  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='tina.testing4tinaDev@gmail.com';
  $mail->Password='vlok92#!';

  $mail->setFrom($_POST['email']);
  $mail->addAddress('testing4tinaDev@gmail.com');
  $mail->addReplyTo($_POST['email']);

  $mail->isHTML(true);
  $mail->Subject= 'Book Meeting Form: ' .$_POST['location'];
  $mail->Body='<h1 align=center>Book Meeting For: '.$_POST['meetDate'].'<br>Email: '.$_POST['email'].'<br>
  Message: '.$_POST['contact'].'</h1>';

  if(!$mail->send()){
    $result="Something went wrong, Pleas try again.";
  }else{
    $result="Thanks ".$_POST['email']." for booking your meeting. Your meeting will be scheduled soon!";
  }

}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Meeting</title>
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <!--Sidebarr-->
	
   <div class="sidebar">
	<a class="active" href="Homepage.php">Home</a>
	<a href="Order.php">Order Online</a>
	<a href="Meeting.php">Book Meeting</a>
	<a href="Events.php">Major Events</a>
	<a href="Celebrations.php">Celebrations</a>
	<a href="Weddings.php">Weddings</a>
	<a href="About Us.php">About Us</a>
	<a href="Contact Us.php">Contact Us</a>
	<a href="#reviews">Reviews</a>
  </div>

    <div class="meet-container">
        <h1>Book Meeting</h1>
        <section class="form-sec">
          <h5 class="text-center text-success"></h5>
            <form action="" method="POST">
                <div class="form-group">
                  <label for="emailAddress">Email address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                </div>
                <div class="form-group">
                  <label for="contact">Contact Person</label>
                  <input type="text" class="form-control" name="contact" placeholder="Add Attendee" required>
                </div>
                <div class="form-group">
                  <label for="place">Location</label>
                  <select name="location" class="form-control" required>
                    <option value="" selected >--Select A Location--</option>
                    <option value="African Dream Offices">African Dream Offices</option>
                    <option value="Online">Online</option>
                    <option value="Other">Other</option>
                  </select>
                  <small id="platform" class="form-text text-muted">If 'Online' selected, please pick platform:</small>
                  <input type="radio" id="zoom" name="platform" value="Zoom">
                  <label for="zoom">Zoom</label><br>
                  <input type="radio" id="teams" name="platform" value="Microsoft Teams">
                  <label for="teams">Teams</label><br>
                  <input type="radio" id="google" name="platform" value="Google Meets">
                  <label for="google">Google Meets</label><br>
                </div>
                <div class="form--group">
                  <label for="pickDate">Pick A Date</label>
                  <input type="date" id="meetDate" name="meetDate" min="2022-01-01" required>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="confirm" required>
                  <label class="form-check-label" for="confirm">I hereby confirm that the information presented is correct.</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Book Meeting</button>
              </form>
        </section>
    </div>
    
</body>
</html>

<?php 


if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $number = $_POST['phone']; 
  $person = $_POST['contact'];
  $location = $_POST['location'];
  $platform = $_POST['platform'];
  $meet = date('Y-m-d',strtotime($_POST['meetDate']));

  $query = "INSERT INTO `meeting`(`email`,`phone`,`person`,`location`,`platform`,`meetDate`)
   VALUES ('$email','$number','$person','$location','$platform','$meet')";
   $query_run = mysqli_query($mysqli,$query);

   if($query_run){
    echo '<script type="text/javascript"> alert("Data inserted") </script>';
   // header("location:addMeeting.php");
   }else{
    echo '<script type="text/javascript"> alert("Data not inserted") </script>';
   }
}
?>
