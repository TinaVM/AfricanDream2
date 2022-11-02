<?php

 include 'db.php'
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-main.css">
  </head>
<body>
  <!--Sidebarr-->
	
	<!--<div class="sidebar">
		<a class="active" href="Homepage.html">Home</a>
		<a href="order.html">Order Online</a>
		<a href="Meeting.html">Book Meeting</a>
		<a href="Events.html">Major Events</a>
		<a href="#celeb">Celebrations</a>
		<a href="#wedding">Weddings</a>
		<a href="#about">About Us</a>
		<a href="#contact">Contact Us</a>
		<a href="#reviews">Reviews</a>
	  </div>-->

    <div class="order-container">
      <h1>Order Online</h1>

      <hr>
      <form method="POST" action="order-db.php">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>Equipment Name</th>
            <th>Equipment Price</th>
            <th>Equipment Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" name="equipid[]" value="Tents"></td>
            <td>Tents
              <input type="hidden" name="equipname[]" value="Tents">
            </td>
            <td><input type="number" name="equip_price[]" class="form-control"></td>
            <td><input type="number" name="equip_qty[]" class="form-control"></td>
          </tr>
          <tr>
          <td><input type="checkbox" name="equipid[]" value="Tables"></td>
            <td>Tables
            <input type="hidden" name="equipname[]" value="Tables">
            </td>
            <td><input type="number" name="equip_price[]" class="form-control"></td>
            <td><input type="number" name="equip_qty[]" class="form-control"></td>
          </tr>
          <tr>
          <td><input type="checkbox" name="equipid[]" value="Chairs"></td>
            <td>Chairs
            <input type="hidden" name="equipname[]" value="Chairs">
            </td>
            <td><input type="number" name="equip_price[]" class="form-control"></td>
            <td><input type="number" name="equip_qty[]" class="form-control"></td>
          </tr>
          <tr>
          <td><input type="checkbox" name="equipid[]" value="Cutlery & Crockery (set)"></td>
            <td>Cutlery & Crockery (Set)
            <input type="hidden" name="equipname[]" value="Cutlery & Crockery (set)">
            </td>
            <td><input type="number" name="equip_price[]" class="form-control"></td>
            <td><input type="number" name="equip_qty[]" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center">
        <input type="submit" name="submit" class="btn btn-success" value="Submit">
      </div>
      </form>
      
    
</body>
</html>



