<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
session_start();

$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

  $categoryname = $_POST['categoryname'];
  $status = $_POST['status'];
  $updated_by = $_SESSION['id'];
  $updated_date = date('Y-m-d');
  

  $update_query = "UPDATE snit_category_list SET category_name = '$categoryname', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

 $db->query($update_query);
  echo "updated successfully";
  header('Location: category_list.php');
}
?>