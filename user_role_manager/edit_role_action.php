<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
session_start();
$id = $_REQUEST['id'];
$permission_arr = $_POST['permissions'];
$db->query("DELETE FROM snit_role_permission_map WHERE role_id = $id");
for($i=0; $i<count($permission_arr); $i++) {
  $permission_id = $permission_arr[$i];
  $db->query("INSERT INTO snit_role_permission_map(role_id,permission_id) VALUES($id,$permission_id)");
}
if(isset($_POST['submit'])) {
  $rolename = $_POST['rolename'];
  $status = $_POST['status'];
  $updated_by = $_SESSION['id'];
  $updated_date = date('Y-m-d');
  $update_query = "UPDATE snit_user_role_list SET role_name = '$rolename', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";
  $db->query($update_query);
  header('Location: user_role_list.php');
}
?>
