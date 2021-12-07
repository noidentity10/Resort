<?php
include('connect.php');


$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$street  = $_POST['street'];
$number  = $_POST['number'];
$city  = $_POST['city'];
$postal  = $_POST['postal'];
$arrive  = $_POST['arrive'];
$depart  = $_POST['depart'];
$people  = $_POST['people'];
$room  = $_POST['room'];
$bedding  = $_POST['bedding'];
$comment = $_POST['comment'];
$status  = 'Pending';

$save1=mysql_query("INSERT INTO reserve (name,email,contact,street,number,city,postal,arrive,depart,people,room,bedding,comment,status) VALUES ('$name','$email','$contact','$street','$number','$city','$postal','$arrive','$depart','$people','$room','$bedding','$comment','$status')");

echo "<script type=\"text/javascript\">window.alert('Reservation has been added. Please wait a SMS or email for yj the status of your request');window.location.href = 'index.php';</script>"; 

?>