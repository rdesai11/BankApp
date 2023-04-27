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
        <p>Hey, <?php echo $_SESSION['User']; ?>!</p>
        <p>You are now signed in.</p>
        <p><a href="CustomerViewAccounts.php">View Accounts</a></p>
        <p><a href="BankLogoutAction.php">Logout</a></p>
    </div>
    
    
</body>
</html>