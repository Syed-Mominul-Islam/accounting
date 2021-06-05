<?php
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();

$id = $_REQUEST['id'];
$delete_query = "UPDATE snit_user_list SET deleted = 1 WHERE id = $id ";
$db->query($delete_query);
header('Location: user_list.php');

?>