<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$first_name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$user_name = $_POST['username'];
$email = $_POST['mail'];       
$raw_password = $_POST['password'];
$pword = password_hash($raw_password, PASSWORD_DEFAULT );
$userroleid = $_POST['user_role_id'];

$update_query = "UPDATE snit_user_list SET first_name = '$first_name', last_name = '$lastname', username = '$user_name', email = '$email', password = '$pword', user_role_id = '$userroleid' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: user_list.php');
}
?>