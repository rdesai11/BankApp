<?php
require 'DBConnect.php';
session_start();

if(!isset($_SESSION['User'])){
   header("Location:CustomerSignIn.php");
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


<!--  Navbar --> 
<nav class="navbar navbar-expand-lg navbar-light bg-blue">
  <div class="container-fluid">
    <a class="navbar-brand" href="CustomerViewAccounts.php">XYZ Bank</a>
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
              <form class="d-flex" action="LoanApplicationForm.php" method="post">
              <button type="submit" class="btn btn-tertiary" data-mdb-ripple-color="light">Apply Loan</button>
              </form>   
        </li>
      </ul>
    </div>
  </div>
    <form class="d-flex" action="BankLogoutAction.php" method="post">
    <button type="submit" class="btn btn-tertiary" data-mdb-ripple-color="light">Logout</button>
    </form>
</nav>




<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Checkings</p>
                    <h5 class="font-weight-bolder mb-0">
                      $53,000
                  </div>  
                </div>  
              </div>  
            </div>  
          </div>  
        </div>  
      </div>  
</div>  

                      
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Savings</p>
                    <h5 class="font-weight-bolder mb-0">
                      $101,509
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
                      
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Credit Card Balance</p>
                    <h5 class="font-weight-bolder mb-0">
                      $3,012
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Loan Balance</p>
                    <h5 class="font-weight-bolder mb-0">
                      $3,503
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>




<style>
    html, body {
        background: #dcebfb ;
    }
    .card {
        background: #1DA1F2;
    }
    
</style>