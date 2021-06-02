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

  $inser_query = "INSERT INTO snit_user_list (first_name, last_name, username, email, password) VALUES ( '$first_name', '$lastname', '$user_name', '$email', '$pword')";

  $db->query($inser_query);
  header("location: user_list.php");
}
?>