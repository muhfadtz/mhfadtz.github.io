<?php
include"config/koneksi.php";

$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['message'];


mysqli_query($con, "insert into work(name,email,message) values('$a','$b','$c')");


header("location:index.php");

?>