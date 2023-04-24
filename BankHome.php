<?php
session_start();
if(!isset($_SESSION['BankUser'])){
   header("Location:BankLogin.php");
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel = "stylesheet" href = "BankHome.css">
    <title>BankHome</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">XYZ Bank</a>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="BankHome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Checking.php">Checking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Savings.php">Savings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Loans.php">Loans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="About.php">About</a>
                </li>
            </ul>
            <div>
                <h5 style="color:white; padding-right:15px; padding-top:10px;">
                    <?php echo "Hello " . $_SESSION['BankUser']; ?>
                </h5>             
            </div>
            <form class="d-flex" action="BankLogoutAction.php" method="post">
                <button type="submit" class="btn btn-primary" style="text-align:center;">Log out</button>
            </form>
        </div>
    </Div>
</nav>

<body class = "bankhome-2">
    <div class = "bankhome">
        <h2 class = "bank-home-head">Bank Manger Page<br>Access Customer & Employee Information</h2>
    </div>

    <div class = "bank-home-cards d-flex justify-content-center" style="height:300px; margin-top: 352px;">
        <div class="card text-dark bg-info mb-3" style="max-width: 18rem; margin-left:20px;">
            <div class="card-header">Customers</div>
            <div class="card-body">
                <h5 class="card-title">List of Customers</h5>
                <p class="card-text">Click on the button below to access the list of customers and associated information.</p>
                <br>
                <form action = "BankManagerPageLink1.php">
                    <button type="submit" class="btn btn-dark">List of Customers</button>
                </form>
            </div>
            <div class="card-footer">XYZBank</div>
        </div>

        <div class="card text-dark bg-info mb-3" style="max-width: 18rem; margin-left:20px;">
            <div class="card-header">Employees</div>
            <div class="card-body">
                <h5 class="card-title">List of Loan Managers</h5>
                <p class="card-text">Click on the button below to access the list of Loan Managers and associated information.</p>
                <br>
                <form action ="BankManagerPageLink2.php">
                    <button type="submit" class="btn btn-dark">List of Employees</button>
                </form>
            </div>
            <div class="card-footer">XYZBank</div>
        </div>

        <div class="card text-dark bg-info mb-3" style="max-width: 18rem; margin-left:20px;">
            <div class="card-header">Accounts</div>
            <div class="card-body">
                <h5 class="card-title">List of Accounts</h5>
                <p class="card-text">Click on the button below to access the list of accounts opened by customers.</p>
                <br>
                <form action="BankManagerPageLink3.php">
                    <button type="submit" class="btn btn-dark">List of Accounts</button>
                </form>
            </div>
            <div class="card-footer">XYZBank</div>
        </div>
    </div>
    <div></div>
    <h5 class = "bank-home-foot">If you require any assistance with the website or, <br>
        if there is any trouble with something in the website, <br>
        contact the IT department at xxx-xxx-xxxx.</h5>
</body>
