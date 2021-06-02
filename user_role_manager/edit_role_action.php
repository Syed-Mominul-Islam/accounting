<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

  $rolename = $_POST['rolename'];
  

  $update_query = "UPDATE snit_user_role_list SET role_name = '$rolename' WHERE id = $id ";

 $db->query($update_query);
  echo "updated successfully";
  header('Location: user_role_list.php');
}
?>