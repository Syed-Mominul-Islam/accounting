<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

  $assetname = $_POST['assetname']; 
  $salvagevalue = $_POST['salvagevalue'];
  $usefulyears = $_POST['usefulyears'];
  $status = $_POST['status'];        
  $updated_by = $_SESSION['id'];
  $updated_date = date('Y-m-d');

 $update_query = "UPDATE snit_fixed_asset_list SET asset_name = '$assetname', salvage_value = '$salvagevalue', useful_years = '$usefulyears', status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: fixt_asset_list.php');
}
?>