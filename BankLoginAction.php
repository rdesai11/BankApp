<?php

require "dbconnect.php";
session_start();
$uname = $_POST['bankuser'];
$pass = $_POST['bankpassword'];

if (isset($_POST['bankuser']) && isset($_POST['bankpassword'])) {

    $sql = "SELECT * FROM BankManager WHERE BankUser='$uname' AND BankPass='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['BankUser'] === $uname && $row['BankPass'] === $pass) {
            echo "Logged in!";
            $_SESSION['BankUser'] = $row['BankUser'];
            $_SESSION['BankName'] = $row['BankName'];
            $_SESSION['BankID'] = $row['ID'];
            header("Location: BankHome.php?");
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