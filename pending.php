<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pending Loans</title>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr, td:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #1E90FF;
                color: white;
            }
            body {
                background-image: url('loanbackground.jpg');
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Pending Loans</h1> <a href="LoanHome.php" class="btn btn-primary bg-primary position-fixed top-0 end-0 mt-3 me-3">Back</a>
            <table>
                <tr>
                    <th>Loan ID</th>
                    <th>Loan Number</th>
                    <th>Loan Amount</th>
                    <th>Loan Type</th>
                    <th>Customer ID</th>
                    <th>Action</th>
                </tr>
                <?php
                require('dbconnect.php');
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Check which button was clicked
                    if (isset($_POST['approve-btn'])) {
                        // Update loanstatus to true (1)
                        $LoanAppId = $_POST['loanapp-id'];
                        $sql = "UPDATE loanapp SET loanstatus = 1 WHERE LoanAppID = $LoanAppId";
                        mysqli_query($conn, $sql);
                    } elseif (isset($_POST['deny-btn'])) {
                        // Update loanstatus to false (0)
                        $LoanAppId = $_POST['loanapp-id'];
                        $sql = "UPDATE loanapp SET loanstatus = 0 WHERE LoanAppID = $LoanAppId";
                        mysqli_query($conn, $sql);
                    }
                }
                // Query the loanapp table for pending loans
                $sql = "SELECT * FROM loanapp WHERE loanstatus IS NULL";
                $result = mysqli_query($conn, $sql);

                // Loop through the query results and display them in a table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['LoanAppID'] . "</td>";
                    echo "<td>" . $row['LoanNum'] . "</td>";
                    echo "<td>" . $row['LoanAmount'] . "</td>";
                    echo "<td>" . $row['LoanType'] . "</td>";
                    echo "<td>" . $row['CustomerID'] . "</td>";
                    echo "<td>";
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='loanapp-id' value='" . $row['LoanAppID'] . "'>";
                    echo "<button type='submit' class='approve-btn' name='approve-btn'>Approve</button>";
                    echo "<button type='submit' class='deny-btn' name='deny-btn'>Deny</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>

