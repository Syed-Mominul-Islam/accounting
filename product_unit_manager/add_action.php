<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();

  session_start();
  $unitname = $_POST['unitname'];
  $status = !empty($_POST['status']) ? $_POST['status'] : 0 ;
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
  
 $inser_query = "INSERT INTO snit_product_unit_list (unit_name, status, created_by, created_date ) VALUES ( '$unitname', '$status', '$created_by', '$created_date' )"; 

  $db->query($inser_query);
  header("location: product_unit_list.php");
}
?>