<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();

  session_start();
  $categoryid = $_POST['categoryid'];
  $productname = $_POST['productname'];
  $productnumber = $_POST['productnumber'];
  $description = $_POST['description'];     
  $party_id = $_POST['party_id'];
  $barcode = $_POST['barcode'];
  $saleprize = $_POST['saleprize'];
  $printquantity = $_POST['printquantity'];
  $status = $_POST['status'];
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
  
 $inser_query = "INSERT INTO snit_product_list (category_id, product_name, product_number, description, party_id, barcode, sale_price, print_quantity,   status, created_by, created_date ) VALUES ( '$categoryid', '$productname', '$productnumber', '$description', '$party_id', '$barcode', '$saleprize', '$printquantity', '$status', '$created_by', '$created_date' )"; 

  $db->query($inser_query);
  header("location: product_list.php");
}
?>