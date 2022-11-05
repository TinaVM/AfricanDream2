<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration | AFRICANDREAM</title>
      <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
   
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left, #a445b2, rgba(0, 255, 255, 0.5));
  font-family: 'Oswald', sans-serif;
}
::selection{
  background: #fa4299;
  color: #fff;
  font-family: 'Oswald', sans-serif;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  font-family: 'Oswald', sans-serif;
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  font-family: 'Oswald', sans-serif;
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
  font-family: 'Oswald', sans-serif;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
  font-family: 'Oswald', sans-serif;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, rgba(0, 255, 255, 0.5));
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  font-family: 'Oswald', sans-serif;
}
input[type="radio"]{
  display: none;
  font-family: 'Oswald', sans-serif;
}
#signup:checked ~ .slider-tab{
  left: 50%;
  font-family: 'Oswald', sans-serif;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
  font-family: 'Oswald', sans-serif;
}
#signup:checked ~ label.login{
  color: #000;
  font-family: 'Oswald', sans-serif;
}
#login:checked ~ label.signup{
  color: #000;
  font-family: 'Oswald', sans-serif;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
  font-family: 'Oswald', sans-serif;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
  font-family: 'Oswald', sans-serif;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
  font-family: 'Oswald', sans-serif;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  font-family: 'Oswald', sans-serif;
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  font-family: 'Oswald', sans-serif;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
  font-family: 'Oswald', sans-serif;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;
  font-family: 'Oswald', sans-serif;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
  font-family: 'Oswald', sans-serif;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
  font-family: 'Oswald', sans-serif;
}
.form-inner form .pass-link{
  margin-top: 5px;
  font-family: 'Oswald', sans-serif;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
  font-family: 'Oswald', sans-serif;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
  font-family: 'Oswald', sans-serif;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
  font-family: 'Oswald', sans-serif;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
  font-family: 'Oswald', sans-serif;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #a445b2, rgba(0, 255, 255, 0.5));
  border-radius: 5px;
  transition: all 0.4s ease;;
  font-family: 'Oswald', sans-serif;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  font-family: 'Oswald', sans-serif;
}
</style>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login 
            </div>
            <div class="title signup">
               Signup 
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="Login.php" class="login">
               <?php global $count, $count2; if($count > 0 || $count2 > 0) {?>
                <h3 class ="error"><?php echo $error; ?></h3> <!--Displaying error messages -->
                <?php } ?>
               <div class="field">
                     <input type="text" name="user_id" placeholder="User ID" value="<?php if (!empty($id)){ echo $id; }?>">
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" value="<?php if (!empty($password)){ echo $password; }?>">
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="Register.php" class="signup">
               <div class="field">
                     <input type="text" name="user_id" placeholder="User ID" value="<?php if(isset($_POST['user_id'])) echo $_POST['user_id']; ?>">
                  </div>
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                  </div>
                  <div class="field">
                     <input type="text" name="name" placeholder="Name/Organisation" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
                  </div>
                  <div class="field">
                     <input type="text" name="address" placeholder="Address" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>">
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
                  </div>
                  <!--<div class="field">
                     <input type="password" name="password" placeholder="Confirm password" value="">
                  </div>-->
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>