<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>Login</h2>
        <form action="signup-inc.php" method="POST">
        <input type="text" name="uid" placeholder="User ID...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="name" placeholder="Name/Organisation...">
            <input type="text" name="address" placeholder="Address...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder=" Confirm Password...">
            <button type="submit" name="submit">SignUp</button>
        </form>
    </section>
</body>
</html>