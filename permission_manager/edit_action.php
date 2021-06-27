<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

 $first_name = $_POST['permission'];
 $lastname = $_POST['permissionslug'];
 $status = !empty($_POST['status']) ? $_POST['status'] : 0 ;
 $updated_by = $_SESSION['id'];
 $updated_date = date('Y-m-d');


 $update_query = "UPDATE snit_permission_list SET permission_name = '$first_name', permission_slug = '$lastname', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id "; 

  $db->query($update_query);
  echo "updated successfully";
  header('Location: permission_list.php');
}
?>