<?php
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
$id = $_REQUEST['id'];
$delete_query = "UPDATE snit_category_list SET deleted = 1 WHERE id = $id ";
$db->query($delete_query);
header('Location: category_list.php');

?>