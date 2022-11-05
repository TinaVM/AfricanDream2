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

//checkinbg if user id entered is valid or not
/*function userIDvalidation($userid)
    {
        global $userid;
        $flag = true;
        if(empty($userid)){
        echo "";
        }else{
        if(!preg_match("/NWU1011/", $userid) || strlen($userid) !== 10){
            echo "<script>alert('You have entered an invalid student ID, try again!')</script>";
            global $count;
            $count++;
        }
        else{
            $flag = false;
        }
    }
        return $flag;
    } 
*/
//password validation - checking if valid or not
function passwordValidation($password) 
    {
        global $password;
        $flag = true;
        if(empty($password)){
            echo "";
        }else{
        if(strlen(trim($password)) < 6){
            echo "<script>alert('You have entered an invalid password, must be longer than 6 characters, try again!')</script>";
            global $count;
            $count++;
        }
        else{
            $flag = false;
        }
        return $flag;
    }
}

//email * checking if valid or not
function emailValidation($email) 
    
        {
        global $email;
        $flag = true;
        if(empty($email)){
            echo "";
        }else{
            if(!preg_match("/@/", $email)){
                echo "<script>alert('You have entered an invalid email address, try again!')</script>";
                global $count;
                $count++;
            }
            else{
                $flag = false;
            }
        }
            return $flag;
        }

    //Checking if the user ID entered is valid or not
    function userIDvalidation($userid){
        global $userid;
        $flag = true;
        if(empty($userid)){
            echo "";
        }else{
        if(!preg_match("/AD00/", $userid) || strlen($userid) !== 7){
            echo "<script>alert('You have entered an invalid user ID, try again!')</script>";
            global $count;
            $count++;
        }else{
            $flag = false;
        }
        }
        return $flag;
    }

        function userIDexists($userid) //Checking if the user id already exists or not
    {
        global $result;
        $flag = true;
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('You have entered a student number that already exists, try again!')</script>";
            global $count;
            $count++;
        }
        else{
            $flag = false;
        }
        return $flag;
    } 
?>