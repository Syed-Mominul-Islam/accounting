<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$bankname = $_POST['bankname'];
$accountnumber = $_POST['accountnumber'];
$status = $_POST['status'];
$updated_by = $_SESSION['id'];
$updated_date = date('Y-m-d');


$update_query = "UPDATE snit_bank_list SET bank_name = '$bankname', account_number = '$accountnumber', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: bank_list.php');
}
?>