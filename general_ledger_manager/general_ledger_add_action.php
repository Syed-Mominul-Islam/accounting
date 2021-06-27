<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();

  session_start();
  $ledger_name = $_POST['firstname'];
  $type = $_POST['type'];
  $status = !empty($_POST['status']) ? $_POST['status'] : 0 ;
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d'); 
  
  $inser_query = "INSERT INTO snit_general_ledger_list (ledger_name, ledger_type, status, created_by, created_date ) VALUES ( '$ledger_name', '$type', '$status', '$created_by', '$created_date' )";

  $db->query($inser_query);
  header("location: general_ledger_list.php");
}
?>