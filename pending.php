<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pending Loans</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".approve-btn").click(function() {
				var loanappID = $(this).data("LoanAppID");
				$.ajax({
					url: "approved.php",
					type: "POST",
					data: { LoanAppID: loanappID },
					success: function(response) {
						location.reload();
					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert("Error: " + textStatus);
					}
				});
			});

			$(".deny-btn").click(function() {
				var loanappID = $(this).data("LoanAppID");
				$.ajax({
					url: "denied.php",
					type: "POST",
					data: { LoanAppID: loanappID },
					success: function(response) {
						location.reload();
					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert("Error: " + textStatus);
					}
				});
			});
		});
	</script>
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
    </head>
    <body>
        <div class="container">
            <h1>Pending Loans</h1>
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
                $sql = "SELECT * FROM loanapp WHERE loanstatus = 'pending'";
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
                    echo "<button class='approve-btn' data-LoanAppID='" . $row['LoanAppID'] . "'>Approve</button>";
					echo "<button class='deny-btn' data-LoanAppID='" . $row['LoanAppID'] . "'>Deny</button>";
					echo "</td>";
					echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>

