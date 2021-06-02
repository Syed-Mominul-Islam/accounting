<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();
  
  $first_name = $_POST['bankname'];
  $lastname = $_POST['accountnumber'];
 

  $inser_query = "INSERT INTO snit_bank_list (bank_name, account_number) VALUES ( '$first_name', '$lastname')";

  $db->query($inser_query);
  header("location: bank_list.php");
}
?>