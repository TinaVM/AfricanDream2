<?php
include 'db.php';

    if(isset($_POST['submit'])){
        $checked_array = $_POST['equipid'];
        foreach($_POST['equipname'] as $key => $value){
           if(in_array($_POST['equipname'][$key],$checked_array)){
            $equipname = $_POST['equipname'][$key];
            
            $equip_price = $_POST['equip_price'][$key];
            $equip_quantity = $_POST['equip_qty'][$key];

            $insertqry = "INSERT INTO `order_online`(`order_id`, `equip_name`, `equip_price`, `equip_quantity`) VALUES ('$equipname','$equip_price','$equip_quantity')";
            mysqli_query($mysqli,$insertqry);
        }
        }
    }
    //header('Location:Order.php');
?>