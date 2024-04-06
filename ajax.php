<?php 
include('admin/config.php');


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$lookingfor=$_POST['lookingfor'];
$msg=$_POST['msg'];
$sql ="INSERT INTO `Inquiries` ( `fname`, `lname`, `email`, `phone`, `lookingfor`, `msg`, `all_date`) VALUES ( '$fname', '$lname', '$email', '$phone', '$lookingfor', '$msg', current_timestamp())";
$qry = $conn->query($sql);

echo 0;
?>