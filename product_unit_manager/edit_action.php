<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();


$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

  session_start();
  $productname = $_POST['productname']; 
  $status = $_POST['status'];
  $updated_by = $_SESSION['id'];
  $updated_date = date('Y-m-d');

 $update_query = "UPDATE snit_product_unit_list SET  unit_name = '$productname', status = '$status' ,updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: product_unit_list.php');
}
?>