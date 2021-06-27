<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();
  session_start();
  
  $first_name = $_POST['bankname'];
  $lastname = $_POST['accountnumber'];
  $status = !empty($_POST['status']) ? $_POST['status'] : 0 ;
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
 

  $inser_query = "INSERT INTO snit_bank_list (bank_name, account_number, status, created_by, created_date) VALUES ( '$first_name', '$lastname', '$status', '$created_by', '$created_date')";

  $db->query($inser_query);
  header("location: bank_list.php");
}
?>