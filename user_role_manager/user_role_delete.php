<?php
include('../dbconnect/dbconnect.php');
$database = new Database();
$db = $database->getConnection();
$id = $_REQUEST['id'];
$delete_query = "DELETE FROM snit_user_role_list WHERE id = $id ";
$db->query($delete_query);
header('Location: user_role_list.php');

?>