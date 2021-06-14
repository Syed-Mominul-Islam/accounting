<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();


  session_start();
  $assetname = $_POST['assetname'];
  $salvagevalue = $_POST['salvagevalue'];
  $usefulyears = $_POST['usefulyears'];
  $status = $_POST['status'];        
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
  
  $inser_query = "INSERT INTO snit_fixed_asset_list (asset_name, salvage_value, useful_years, status, created_by, created_date ) VALUES ( '$assetname', '$salvagevalue', '$usefulyears', '$status', '$created_by', '$created_date')";

  $db->query($inser_query);
  header("location: fixt_asset_list.php");
}
?>