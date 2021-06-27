<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();
  session_start();
  
  $first_name = $_POST['permissionname'];
  $lastname = $_POST['permissionslug'];
 $status = !empty($_POST['status']) ? $_POST['status'] : 0 ;
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
 
  $inser_query = "INSERT INTO snit_permission_list (permission_name, permission_slug, status, created_by, created_date) VALUES ( '$first_name', '$lastname', '$status', '$created_by', '$created_date')"; 

  $db->query($inser_query);
  header("location: permission_list.php");
}
?>