<!DOCTYPE html>
<html>
<head>
    <title>Credit Account</title>
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
        <h1>Credit Card Info</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Credit Card Number</th>
                    <th>CVV</th>
                    <th>Expiration Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'DBConnect.php';
                session_start();

                $cust_id = $_SESSION['CustomerID'];

                // Query the database to get the account information
                $sql = "SELECT CreditCardNum, CVV, ExpDate FROM creditcard WHERE CustomerID = $cust_id";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if ($result && mysqli_num_rows($result) > 0) {
                    // Loop through the query results and display each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['CreditCardNum'] . "</td>";
                        echo "<td>" . $row['CVV'] . "</td>";
                        echo "<td>" . date('m/y', strtotime($row['ExpDate'])) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No credit card account found.</td></tr>";
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
