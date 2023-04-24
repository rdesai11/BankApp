<?php
include 'header.php';
?>

<head>
    <title>Denied Loans</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #1E90FF;
            color: white;
        }
        body {
            background-image: url('loanbackground.jpg');
            background-repeat: no-repeat;
        }
    </style>
<body>
    <div class="container">
        <h1>Denied Loans</h1>
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
            // Query the loanapp table for pending loans
            $sql = "SELECT * FROM loanapp WHERE loanstatus = 'denied'";
            $result = mysqli_query($conn, $sql);

            // Loop through the query results and display them in a table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['LoanAppID'] . "</td>";
                echo "<td>" . $row['LoanNum'] . "</td>";
                echo "<td>" . $row['LoanAmount'] . "</td>";
                echo "<td>" . $row['LoanType'] . "</td>";
                echo "<td>" . $row['CustomerID'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

