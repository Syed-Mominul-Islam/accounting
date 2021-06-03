<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();
  
  $first_name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $user_name = $_POST['username'];
  $email = $_POST['email'];       
  $raw_password = $_POST['password'];
  $pword = password_hash($raw_password, PASSWORD_DEFAULT );
  $user_role_id = $_POST['user_role_id']; 

  $inser_query = "INSERT INTO snit_user_list (first_name, last_name, username, email, password, user_role_id) VALUES ( '$first_name', '$lastname', '$user_name', '$email', '$pword', '$user_role_id')";

  $db->query($inser_query);
  header("location: user_list.php");
}
?>