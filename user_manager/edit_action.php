<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$first_name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$user_name = $_POST['username'];
$email = $_POST['mail'];       
$raw_password = $_POST['password'];
$pword = password_hash($raw_password, PASSWORD_DEFAULT );
$userroleid = $_POST['user_role_id'];
$status = $_POST['status'];
$updated_by = $_SESSION['id'];
$updated_date = date('Y-m-d');

$update_query = "UPDATE snit_user_list SET first_name = '$first_name', last_name = '$lastname', username = '$user_name', email = '$email', password = '$pword', user_role_id = '$userroleid', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: user_list.php');
}
?>