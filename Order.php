<?php

 include 'db.php';
  
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

    <div class="order-container" style="margin:20px; background-color:#f3faf8;">
      <h1>Order Online</h1>

      <hr>
      <form method="POST" action="">
      <table class="table table-bordered" style="background-color: white; margin:10px;">
        <thead>
          <tr>
            <th class="col-1"></th>
            <th class="col-2">Equipment Name</th>
            <th class="col-2">Equipment Price</th>
            <th class="col-2">Equipment Quantity</th>
            
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
      <br>
      <section>
      <fieldset>
              <legend>Fuction Type:</legend> 
            <select name="function">
              <option value="choose" >--Select Function Size--</option>
              <option value="small">Small</option>
              <option value="large">Large</option>
            </select>
      </section>
      <br>
      <section>
      <fieldset>
          <legend>Special Prerequisities:</legend>
          <p><span class="notice">*</span>Each special requsities are charged at a fee subject to VAT.</p>
          <input  type="checkbox" name="other" value="Exhibition Stands">Exhibition Stands<br>      
          <input type="checkbox" name="other" value="Flower Arrangements">Flower Arrangements<br>      
          <input type="checkbox" name="other" value="Other Logistics">Other Logistics for Event<br>
          <textarea id="txtOther" name="txtOther" rows="5" cols="50" placeholder="Specify other logistics for event..."></textarea>
          </textarea>
        </fieldset> 
      </section>
      <div class="text-center">
        <input type="submit" name="submit" class="btn btn-success" value="Submit">
        
        <button class="btn btn-success"><a href="Homepage.html" style="color:white;">Home</button>
      </div>
      </form>
    </div> 
    
</body>
</html>

<?php 

   if(isset($_POST['submit'])){
    $checked_array = $_POST['equipid'];
    foreach($_POST['equipname'] as $key => $value){
       if(in_array($_POST['equipname'][$key],$checked_array)){
        $equipname = $_POST['equipname'][$key];
        
        $equip_price = $_POST['equip_price'][$key];
        $equip_quantity = $_POST['equip_qty'][$key];

        $insertqry = "INSERT INTO `order_online`(`order_id`, `equip_name`, `equip_price`, `equip_quantity`) VALUES ('$equipname','$equip_price','$equip_quantity')";
        $query_run = mysqli_query($mysqli,$insertqry);
    }
    }
    if($query_run){
      echo '<script type="text/javascript"> alert("Data inserted") </script>';
      //header("location:Order.php");
     }else{
      echo '<script type="text/javascript"> alert("Data not inserted") </script>';
     }
  
}
?>



