<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();

  session_start();
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
  $created_by = $_SESSION['id'];
  $created_date = date('Y-m-d');
  
 $inser_query = "INSERT INTO snit_party_list (party_name, party_email, party_contact_person, party_contact_number, party_code,   address, trade_licence_no, vat_no,  tin_no,   party_bank_name, party_bank_ac_no,  party_cheque_routing_no , party_type,   status, created_by, created_date ) VALUES ( '$party_name', '$email', '$party_contact_person', '$party_contact_number', '$party_code', '$address', '$trade_licence_no', '$vat_no', '$tin_no', '$party_bank_name', '$party_bank_ac_no', '$party_cheque_routing_no', '$party_type', '$status', '$created_by', '$created_date' )"; 

  $db->query($inser_query);
  header("location: party_list.php");
}
?>