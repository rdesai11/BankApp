<?php
session_start();
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
        <p>You are now in customer dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>