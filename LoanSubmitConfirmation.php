<?php
session_start();

if(!isset($_SESSION['User'])){
   header("Location:CustomerSignIn.php");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
    <div class="form">
        <p>Hello, <?php echo $_SESSION['User']; ?>!</p>
        <p>We received your application and will reach out soon!</p>
        <p><a href="CustomerViewAccounts.php">Back to Accounts</a></p>
        <p><a href="BankLogoutAction.php">Logout</a></p>
    </div>
    
    
</body>
</html>