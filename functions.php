<?php 
//form validation
function emptyValidation($userid,$email,$name,$address,$password){
     $flag = true;
     if(empty($userid) || empty($email) || empty($name) || empty($address) || empty($password)){
        echo "<script>alert('Please fill in all fields!')</script>";
        global $count;
     }else{
        $flag = false;

     }
     return $flag;
}
?>