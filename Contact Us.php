<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        <h1>E-mail Request</h1>
        <section class="form-sec">
            <form>
                <div class="form-group">
                  <label for="FN">Full Name:</label>
                  <input type="Full name" class="form-control" id="Fullname" placeholder="Enter name">
                </div>
				<div class="form-group">
					<label for="emailAddress">Email address:</label>
					<input type="email" class="form-control" id="emailAddress" placeholder="Enter email">
				  </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                  <label for="contact">Reason for Contact:</label>
                  <input type="text" class="form-control" id="contact" placeholder="Enter reason for contact">
                </div>
				<div class="form-group">
					<label for="DOF">Date of event:</label>
					<input type="text" class="form-control" id="DOF" placeholder="Enter date of event">
				  </div>
				  <div class="form--group">
					<label for="DOE">Date of Event</label>
					<input type="date" id="DOE" name="Date-of-event" min="2022-01-01" required>
				  </div>
                <div class="form-group">
                  <label for="place">Estimated number of guests</label>
                  <select name="NOG">
                    <option value="null" selected>--Estimated number of guests--</option>
                    <option value="0-50">0-50</option>
                    <option value="51-100">51-100</option>
                    <option value="101-150">101-150</option>
					<option value="151-200">151-200</option>
					<option value="+200">+200</option>
                  </select>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="confirm">
                  <label class="form-check-label" for="confirm">I hereby confirm that the information presented is correct.</label>
                </div>
                <button type="submit" class="btn btn-primary">Book Meeting</button>
              </form>
        </section>
    </div>
    
</body>
</html>