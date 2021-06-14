<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$ledger_name = $_POST['firstname'];
$ledger_type = $_POST['ledger_type'];
$status = $_POST['status'];
$updated_by = $_SESSION['id'];
$updated_date = date('Y-m-d');

$update_query = "UPDATE snit_general_ledger_list SET ledger_name = '$ledger_name', ledger_type = '$ledger_type', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: general_ledger_list.php');
}
?>