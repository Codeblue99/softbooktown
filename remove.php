<?php
include("header.php");

$pid=$_GET['pid'];
unset($_SESSION['mycart'][$pid]);

echo "<script>window.open('index.php','_self')</script>";


?>