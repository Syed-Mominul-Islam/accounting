<?php
if(isset($_POST['submit'])) {
  include('../dbconnect/dbconnect.php');
  $database = new Database();
  $db = $database->getConnection();

  $categoryname = $_POST['categoryname'];
  

  $inser_query = "INSERT INTO snit_category_list (category_name) VALUES ( '$categoryname')";

 $db->query($inser_query);
  header("location: category_list.php");
}
?>