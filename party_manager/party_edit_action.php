<?php 
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

session_start();
$id = $_REQUEST['id'];
if(isset($_POST['submit'])) {

$party_name = $_POST['party_name'];
  $email = $_POST['email'];
  $party_contact_person = $_POST['party_contact_person'];
  $party_contact_number = $_POST['party_contact_number'];     
  $party_code = $_POST['party_code'];
  $address = $_POST['address'];
  $trade_licence_no = $_POST['trade_licence_no'];
  $vat_no = $_POST['vat_no'];
  $tin_no = $_POST['tin_no'];
  $party_bank_name = $_POST['party_bank_name'];     
  $party_bank_ac_no = $_POST['party_bank_ac_no'];
  $party_cheque_routing_no = $_POST['party_cheque_routing_no']; 
  $party_type = $_POST['party_type'];
  $status = $_POST['status'];
  $updated_by = $_SESSION['id'];
  $updated_date = date('Y-m-d');

$update_query = "UPDATE snit_party_list SET party_name = '$party_name', party_email = '$email', party_contact_person = '$party_contact_person', party_contact_number = '$party_contact_number', party_code = '$party_code', address = '$address', trade_licence_no = '$trade_licence_no', vat_no = '$vat_no', tin_no = '$tin_no', party_bank_name = '$party_bank_name',party_bank_ac_no = '$party_bank_ac_no', party_cheque_routing_no	 = '$party_cheque_routing_no	', party_type = '$party_type',status = '$status', updated_by = '$updated_by', updated_date = '$updated_date' WHERE id = $id ";

  $db->query($update_query);
  echo "updated successfully";
  header('Location: party_list.php');
}
?>