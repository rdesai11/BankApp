<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    
    
<?php
    require('dbconnect.php');
    // When form is submit, INSERT values into the database.
    if (isset($_REQUEST['User'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['User']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['Email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['Pass']);
        $password = mysqli_real_escape_string($con, $password);
   
        $query    = "INSERT into `customer` (User, Pass, Email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="user" placeholder="Username" required />
        <input type="text" class="login-input" name="phone" placeholder="Phone Number" required />
        <input type="text" class="login-input" name="address" placeholder="Address" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address" required />
        <input type="text" class="login-input" name="GovIDNum" placeholder="Government ID Number" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="CustomerSignIn.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>