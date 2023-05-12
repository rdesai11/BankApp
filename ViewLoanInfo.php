<!DOCTYPE html>
<html>
<head>
    <title>Loan Accounts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Loan Accounts</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Loan Number</th>
                    <th>Current Balance</th>
                    <th>Type of Loan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'DBConnect.php';
                session_start();

                $cust_id = $_SESSION['CustomerID'];

                // Query the database to get the account information
                $sql = "SELECT LoanNum, LoanAmount, LoanType FROM loanapp WHERE CustomerID = $cust_id";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if ($result && mysqli_num_rows($result) > 0) {
                    // Loop through the query results and display each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['LoanNum'] . "</td>";
                        echo "<td>$" . $row['LoanAmount'] . "</td>";
                        echo "<td>" . $row['LoanType'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No savings account found.</td></tr>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
