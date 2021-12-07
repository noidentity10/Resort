<?php
include('../connect.php');
$id = $_GET['id'];
$status = 'Approved';
mysql_query("UPDATE reserve SET status='$status' WHERE id='$id'");


echo '<script>alert("Reservation Status has been approved"); window.location="index.php"</script>';
?>