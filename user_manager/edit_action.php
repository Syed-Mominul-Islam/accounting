<?php 
$target_dir = "../uploads/";
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

$profile_image = $_FILES["fileToUpload"]["name"];
$target_dir = $target_dir.$profile_image;
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir);

session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$first_name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$user_name = $_POST['username'];
$email = $_POST['mail'];       
$raw_password = $_POST['password'];
$pword = password_hash($raw_password, PASSWORD_DEFAULT );
$user_role_id = !empty($_POST['user_role_id']) ? $_POST['user_role_id'] : 0 ;
$status = !empty($_POST['status']) ? $_POST['status'] : 0 ;
$updated_by = $_SESSION['id'];
$updated_date = date('Y-m-d');

 $update_query = "UPDATE snit_user_list SET first_name = '$first_name', last_name = '$lastname', username = '$user_name', email = '$email', password = '$pword', profile_image = '$profile_image', user_role_id = '$user_role_id', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id "; 
 
  $db->query($update_query);
  echo "updated successfully";
  header('Location: user_list.php');
}
?>