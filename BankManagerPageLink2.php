<?php
require 'DBConnect.php';
include 'BankHomeHeader.php';
//session_start();
if(!isset($_SESSION['BankUser'])){
   header("Location:BankLogin.php");
}
?>
<!DOCTYPE html>

<body style="text-align: center; background-color: #6B7A8F;">
    <div class="container" style="padding:20px;">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th colspan="8"><h1 style="text-align: center;">List Employees</h1></th>
                            </tr>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">User</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Remove User</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM loanmanager";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row["LoanManID"]; ?></td>
                                        <td><?php echo $row["EmployeeID"]; ?></td>
                                        <td><?php echo $row["Name"]; ?></td>
                                        <td><?php echo $row["Email"]; ?></td>
                                        <td><?php echo $row["User"]; ?></td>
                                        <td><?php echo $row["Address"]; ?></td>
                                        <td><?php echo $row["Phone"]; ?></td>
                                        <td><form action="RemoveEmployeeBankMan.php?LoanManID=<?php echo $row["LoanManID"]; ?>" method="post">
                                                <button type="sumbit" class="btn btn-danger">Remove</button>
                                            </form></td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                        } else {
                            ?>
                            <td colspan="8"><?php echo "0 Employees";?></td>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
