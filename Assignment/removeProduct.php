<?php
require('connect-assignment.php');
$id = $_GET['ProductId'];
$sql = "DELETE FROM toyproduct WHERE ProductId  = '$id'";
$conn->exec($sql);
header("location: index.php");
?>