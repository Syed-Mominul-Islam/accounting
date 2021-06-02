<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

  $categoryname = $_POST['categoryname'];
  

  $update_query = "UPDATE snit_category_list SET category_name = '$categoryname' WHERE id = $id ";

 $db->query($update_query);
  echo "updated successfully";
  header('Location: category_list.php');
}
?>