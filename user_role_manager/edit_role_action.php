<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$rolename = $_POST['rolename'];
$status = $_POST['status'];
$updated_by = $_SESSION['id'];
$updated_date = date('Y-m-d');
  

  $update_query = "UPDATE snit_user_role_list SET role_name = '$rolename', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

 $db->query($update_query);
  echo "updated successfully";
  header('Location: user_role_list.php');
}
?>