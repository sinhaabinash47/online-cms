<?php
//data Base connection and login session

include("db_connect.php");

session_start();
?>
<html>
<head>
    <title>Online Courier Management System</title>
	
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="icon" href="./images/" type="image/icon type">
    </head>
    <body style="background:url('./images/backtheme.jpg'); background-size: 100%; background-repeat: no-repeat;">

        <div class="loginbox">
            <img src="./images/profile.jpg" class="avatar">
            <h1 class="log1">Login</h1>
            <form action="home.php" method="get">
                <p>Username</p>
                <input type="text" name="email" placeholder="Enter Email">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Log in"><br>
                
                <a href="forget.php">Forget your password?</a><br>
                <a href="signup.php">Don't have an account?</a>
            </form>
        </div>
    


    <?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $query = "select * from system_settings where Email='$email' && password='$pwd'";
    $data = mysqli_query($connection, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);

    if ($result['Email'] == $email && $result['password']== $pwd) {
        echo "string";
        header("location: home.php");
    } else {
        echo " <script>document.getElementById('message').innerHTML='Wrong Email or Password'</script>";
    }
}
?>
<div class="footer">
  <p>Courier Management System</p>
</div>

</body>
</html>

