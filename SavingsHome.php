<!DOCTYPE html>
<html>
<head>
    <title>Savings Account</title>
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
        <h1>Savings Account</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Account Number</th>
                    <th>Balance</th>
                    <th>Interest</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'DBConnect.php';
                session_start();

                $cust_id = $_SESSION['CustomerID'];

                // Query the database to get the account information
                $sql = "SELECT AccNum, Balance, Interest FROM savingsaccount WHERE CustomerID = $cust_id";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if ($result && mysqli_num_rows($result) > 0) {
                    // Loop through the query results and display each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['AccNum'] . "</td>";
                        echo "<td>$" . $row['Balance'] . "</td>";
                        echo "<td>" . $row['Interest'] . "%</td>";
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
