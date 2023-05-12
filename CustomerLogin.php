<?php

require "dbconnect.php";
session_start();
$uname = $_POST['User'];
$pass = $_POST['Pass'];


if (isset($_POST['User']) && isset($_POST['Pass'])) {

    $sql = "SELECT * FROM Customer WHERE User='$uname' AND Pass='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['User'] === $uname && $row['Pass'] === $pass) {
            echo "Logged in!";
            $_SESSION['User'] = $row['User'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['CustomerID'] = $row['CustomerID'];
            header("Location: CustomerHome.php?");
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