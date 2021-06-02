<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();

  $rolename = $_POST['rolename'];
  

  $inser_query = "INSERT INTO snit_user_role_list (role_name) VALUES ( '$rolename')";

 $db->query($inser_query);
  header("location: user_role_list.php");
}
?>