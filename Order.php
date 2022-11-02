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

    <div class="order-container">
      <h1>Order Online</h1>

      <hr>
      <form>
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
            <td><input type="checkbox" name=""></td>
            <td>Tents</td>
            <td><input type="number" name="" class="form-control"></td>
            <td><input type="number" name="" class="form-control"></td>
          </tr>
          <tr>
          <td><input type="checkbox" name=""></td>
            <td>Tables</td>
            <td><input type="number" name="" class="form-control"></td>
            <td><input type="number" name="" class="form-control"></td>
          </tr>
          <tr>
          <td><input type="checkbox" name=""></td>
            <td>Chairs</td>
            <td><input type="number" name="" class="form-control"></td>
            <td><input type="number" name="" class="form-control"></td>
          </tr>
          <tr>
          <td><input type="checkbox" name=""></td>
            <td>Cutlery & Crockery (Set)</td>
            <td><input type="number" name="" class="form-control"></td>
            <td><input type="number" name="" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      </form>
      
    <!--<section class="form-sec">
      <form method="post" action="">      
        <fieldset>      
            <legend class="equip">Choose Equipment To Hire:</legend>      
            <input class="checkbox" type="checkbox" name="equipment" value="e1">Tents (Alpine Marquees 40m x 30m) X
            <input type="number" id="tentItems" name="tentItems1"><br>
            <input class="checkbox" type="checkbox" name="equipment1" value="tents(30m x 30m)">Tents (Alpine Marquees 30m x 30m) X
            <input type="number" id="tentItems" name="tentItems2"><br>
            <input class="checkbox" type="checkbox" name="equipment2" value="tents(30m x 20m)">Tents (Alpine Marquees 30m x 20m) X
            <input type="number" id="tentItems" name="tentItems3"><br>
            <input class="checkbox" type="checkbox" name="equipment3" value="tents(24m x 15m)">Tents (Alpine Marquees 24m x 15m) X
            <input type="number" id="tentItems" name="tentItems4"><br>
            <input class="checkbox" type="checkbox" name="equipment4" value="tents(18m x 9m)">Tents ( 18m x 9m) X
            <input type="number" id="tentItems" name="tentItems5"><br>        
            <input type="checkbox" name="equipment" value="tables">Tables X
            <input type="number" id="tableItems" name="tableItems"><br>      
            <input type="checkbox" name="equipment" value="chairs">Chairs X
            <input type="number" id="chairItems" name="chairItems"><br>
            <input type="checkbox" name="equipment" value="cutlery">Crockery & Cutlery (Set) X
            <input type="number" id="cutleryItems" name="cutleryItems"><br>   
            <br>
            </fieldset>
            <fieldset>
              <legend>Fuction Type:</legend> 
            <select name="function">
              <option value="choose" >--Select Function Size--</option>
              <option value="small">Small</option>
              <option value="large">Large</option>
            </select>   
                 
        </fieldset> 
        <fieldset>
          <legend>Special Prerequisities:</legend>
          <p><span class="notice">*</span>Each special requsities are charged at a fee subject to VAT.</p>
          <input  type="checkbox" name="other" value="Exhibition Stands">Exhibition Stands<br>      
          <input type="checkbox" name="other" value="Flower Arrangements">Flower Arrangements<br>      
          <input type="checkbox" name="other" value="Other Logistics">Other Logistics for Event<br>
          <textarea id="txtOther" name="txtOther" rows="5" cols="50" placeholder="Specify other logistics for event..."></textarea>
          </textarea>
        </fieldset> 
        <br>
        <fieldset>
          <legend>Total Cost:</legend>
          <input type="text" id="cost" name="cost" value="<?php
          /*$num = 0;
          $total = 0;
          if (isset($_POST['equipment']) && ($_POST['tentItems1']))
            $num1 = $_POST['tentItems1'];
            $total = ($num * 500) + ($num2 * 600) + ($num3 * 700);
            echo $total;?>">
           
          
         
          
        </fieldset>
        <br>
        <input type="submit" value="Submit now" class="btn btn-primary"/>     
    </form>
    <?php 
    if(isset($_POST['submit'])){
      $equip = $_POST['tentItems1'];
      $function = $_POST['function'];
      $other = $_POST['other'];
      $description = $_POST['txtOther'];
      
      foreach($equip as $item){
        $query = "INSERT INTO `order_online`(`equipment`,`function_type`,`extras`,`specifications`) VALUES ('$item','$function','$other','$description')";
        $query_run = mysqli_query($mysqli,$query);
      }

      if($query_run){
        echo '<script type="text/javascript"> alert("Data inserted") </script>';
       }else{
        echo '<script type="text/javascript"> alert("Data not inserted") </script>';
       }
    }

?>
    </section>
    
    </div>-->*/

</body>
</html>



