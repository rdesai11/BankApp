<?php

require "dbconnect.php";
session_start();
$uname = $_POST['loanuser'];
$pass = $_POST['loanpassword'];

if (isset($_POST['loanuser']) && isset($_POST['loanpassword'])) {

    $sql = "SELECT * FROM LoanManager WHERE User='$uname' AND Pass='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['User'] === $uname && $row['Pass'] === $pass) {
            echo "Logged in!";
            $_SESSION['User'] = $row['User'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['LoanManID'] = $row['ID'];
            header("Location: LoanHome.php?");
            exit();
        } else {
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    } else {
        header("Location: index.php?error=Wrong username or password");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
