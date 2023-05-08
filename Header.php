<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>BankHome</title>
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">XYZ Bank</a>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginBackdrop"
                            style="margin-right:10px; width: 80px;">
                        Login
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="LoginBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                         aria-labelledby="staticBackdropLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Loginn</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Bank Manager use Login 1 button</p>
                                    <form action="BankLogin.php">
                                        <input type="submit" value="Login 1"
                                               style="border:none; background-color: #0d6efd; color: white; height:35px; border-radius:5px;" />
                                    </form>
                                    <br>
                                    <br>
                                    <p>Loan Manager use Login 2 button</p>
                                    <form action="LoanManagerLogin.php">
                                        <input type="submit" value="Login 2"
                                               style="border:none; background-color: #0d6efd; color: white; height:35px; border-radius:5px;" />
                                    </form>
                                    <br>
                                    <br>
                                    <p>Customer use Login 3 button</p>
                                    <form action="CustomerSignIn.php">
                                        <input type="submit" value="Login 3"
                                               style="border:none; background-color: #0d6efd; color: white; height:35px; border-radius:5px;" />
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SignUpBackdrop"
                            style="width: 80px;">
                        Sign Up
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="SignUpBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                         aria-labelledby="staticBackdropLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Customer use sign up button</p>
                                    <form action="registration.php">
                                        <input type="submit" value="Sign Up"
                                               style="border:none; background-color: #0d6efd; color: white; height:35px; border-radius:5px;" />
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>