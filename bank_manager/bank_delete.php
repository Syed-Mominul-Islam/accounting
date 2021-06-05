<?php
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

$id = $_REQUEST['id'];
$delete_query = "UPDATE snit_bank_list SET deleted = 1 WHERE id = $id ";
$db->query($delete_query);
header('Location: bank_list.php');

?>