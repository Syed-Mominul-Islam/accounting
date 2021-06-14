<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();


$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {


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
  $updated_by = $_SESSION['id'];
  $updated_date = date('Y-m-d');

 $update_query = "UPDATE snit_product_list SET category_id = '$categoryid', product_name = '$productname', product_number = '$productnumber', description = '$description', party_id = '$party_id', barcode = '$barcode', sale_price = '$saleprize', print_quantity = '$printquantity', status = '$status' ,updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: product_list.php');
}
?>