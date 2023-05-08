<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>LoanHome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('loanbackground.jpg');
             background-repeat: no-repeat;
        }
    </style>
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">XYZ Bank</a>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                    <?php echo "Welcome " . $_SESSION['User']; ?>
                </h5>             
            </div>
            <form class="d-flex" action="LoanLogoutAction.php" method="post">
                <button type="submit" class="btn btn-primary" style="text-align:center;">Log out</button>
            </form>
        </div>
    </div>
</nav>



<div class="container-fluid">
    <div class="w3-container w3-blue">
        <div class="row">
            <div class="col-sm-20 w3-center"><h1>Loan Manager Page</h1></div>
        </div>
    </div> 

    <body>
        <div class="container">
            <div class="cards">
                <div class="card">
                    <h2>Pending Loans</h2>
                    <a href="pending.php"><button>View Loans</button></a>
                </div>
                <div class="card">
                    <h2>Approved Loans</h2>
                    <a href="approved.php"><button>View Loans</button></a>
                </div>
                <div class="card">
                    <h2>Denied Loans</h2>
                    <a href="denied.php"><button>View Loans</button></a>
                </div>
            </div>

    </body>


