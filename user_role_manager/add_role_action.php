<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();
  session_start();

  $rolename = $_POST['rolename']; 
  $status = $_POST['status'];
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
  

  $inser_query = "INSERT INTO snit_user_role_list (role_name, status, created_by, created_date) VALUES ( '$rolename', '$status', '$created_by', '$created_date')";

 $db->query($inser_query);
  header("location: user_role_list.php");
}
?>