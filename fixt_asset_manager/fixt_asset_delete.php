<?php
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

$id = $_REQUEST['id'];
$delete_query = "UPDATE snit_fixed_asset_list SET deleted = 1 WHERE id = $id ";
$db->query($delete_query);
header('Location: fixt_asset_list.php');

?>