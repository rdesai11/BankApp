<?php
require 'dbconnect.php';
// if(isset($_GET['CustomerID'])){
//      $id = $_GET['CustomerID']; 
// }else{
//      $id = "ID not set in GET Method";
// }
$sql = "DELETE FROM loanmanager WHERE LoanManID='" . $_GET["LoanManID"] . "'";

if (mysqli_query($conn, $sql)) {
  header("Location: BankManagerPageLink2.php?message=Record Deleted");
} else {
  header("Location: BankManagerPageLink2.php?error=Record Deletation Failed");
}
?>