<?php
require 'dbconnect.php';
// if(isset($_GET['CustomerID'])){
//      $id = $_GET['CustomerID']; 
// }else{
//      $id = "ID not set in GET Method";
// }
$sql = "DELETE FROM customer WHERE CustomerID='" . $_GET["CustomerID"] . "'";

if (mysqli_query($conn, $sql)) {
  header("Location: BankManagerPageLink1.php?message=Record Deleted");
} else {
  header("Location: BankManagerPageLink1.php?error=Record Deletation Failed");
}
?>

