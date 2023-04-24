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
        $User = stripslashes($_REQUEST['User']);
        //escapes special characters in a string
        $User = mysqli_real_escape_string($conn, $User);
        $Email    = stripslashes($_REQUEST['Email']);
        $Email    = mysqli_real_escape_string($conn, $Email);
        $Pass = stripslashes($_REQUEST['Pass']);
        $Pass = mysqli_real_escape_string($conn, $Pass);
   
        $Name = stripslashes($_REQUEST['Name']);
        $Name = mysqli_real_escape_string($conn, $Name);
        
        $Phone = $_REQUEST['Phone'];
        $Phone = mysqli_real_escape_string($conn, $Phone);
        
        $Address = stripslashes($_REQUEST['Address']);
        $Address = mysqli_real_escape_string($conn, $Address);
        
        $GovIDNum = $_REQUEST['GovIDNum'];
        $GovIDNum = mysqli_real_escape_string($conn, $GovIDNum);
        
        
        
          $query    = "INSERT INTO `customer` (CustomerID, Name, User, Pass, Email, Phone, Address, GovIDNum) 
                       VALUES (NULL, '$Name', '$User', '$Pass', '$Email', '$Phone', '$Address', '$GovIDNum')";
//        $query    = "INSERT into `customer` (CustomerID, Name, User, Pass, Email, Phone, Address, GovIDNum)
//                     VALUES ('$Name', '$User', '" . md5($Pass) . "', '$Email', '$Phone', '$Address', '$GovIDNum')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='CustomerSignIn.php'>Login</a></p>
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
        <input type="text" class="login-input" name="Name" placeholder="Name" required />
        <input type="text" class="login-input" name="User" placeholder="Username" required />
        <input type="number" class="login-input" name="Phone" placeholder="Phone Number" required />
        <input type="text" class="login-input" name="Address" placeholder="Address" required />
        <input type="text" class="login-input" name="Email" placeholder="Email Address" required />
        <input type="number" class="login-input" name="GovIDNum" placeholder="Government ID Number" required />
        <input type="password" class="login-input" name="Pass" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="CustomerSignIn.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>