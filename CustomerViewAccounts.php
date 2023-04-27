<?php
require 'DBConnect.php';
session_start();

if(!isset($_SESSION['User'])){
   header("Location:BankLogin.php");
}
?>

<!DOCTYPE html>
<head>
    <title>Accounts Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Transfer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Deposit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Apply Loan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>






