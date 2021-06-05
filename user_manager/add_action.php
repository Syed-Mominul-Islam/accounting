<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();
  session_start();
  $first_name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $user_name = $_POST['username'];
  $email = $_POST['email'];       
  $raw_password = $_POST['password'];
  $pword = password_hash($raw_password, PASSWORD_DEFAULT );
  $user_role_id = $_POST['user_role_id']; 
  $status = $_POST['status'];
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
  
  $inser_query = "INSERT INTO snit_user_list (first_name, last_name, username, email, password, user_role_id, status, created_by, created_date ) VALUES ( '$first_name', '$lastname', '$user_name', '$email', '$pword', '$user_role_id', '$status', '$created_by', '$created_date' )";

  $db->query($inser_query);
  header("location: user_list.php");
}
?>