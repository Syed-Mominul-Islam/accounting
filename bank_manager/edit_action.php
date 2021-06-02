<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$bankname = $_POST['bankname'];
$accountnumber = $_POST['accountnumber'];


$update_query = "UPDATE snit_bank_list SET bank_name = '$bankname', account_number = '$accountnumber' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: bank_list.php');
}
?>