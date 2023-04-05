<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>BankLogin</title>
    </head>

    <section class="vh-100" style="background-color: #90EE90;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="border-radius: 2px;">
                    <div class="row g-0">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                           <!--Image Link: https://unsplash.com/photos/lmFJOx7hPc4-->
                            <img src="banklogin.jpg" style="width:600px; height: 415px;" alt="image"/>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <div class="card-body p-lg-5">

                                <form method="post" action="BankLoginAction.php">
                                    <div class="mb-3 pb-1">
                                        <h1>Bank Login</h1>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login for bank manager</h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="bankuser" name="bankuser" class="form-control form-control-lg"/>
                                        <label class="form-label" for="bankuser">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="bankpassword" name="bankpassword" class="form-control form-control-lg" />
                                        <label class="form-label" for="bankpassword">Password</label>
                                    </div>

                                    <div class="mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

