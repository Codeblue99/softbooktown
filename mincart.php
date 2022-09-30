<?php
include("header.php");
// session_start();
$pid=$_GET['pid'];
$type=$_GET['type'];
$pprice=0;
if($type=="book")
{

$fet_pro="select * from tbl_books where book_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price'];	
}
if($type=="guest")
{

$fet_pro="select * from tbl_guestpaper where guest_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price'];	
}
if($type=="note")
{

$fet_pro="select * from tbl_notes where note_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price'];	
}
if($type=="stationary")
{

$fet_pro="select * from tbl_stationary where s_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['s_price'];	
}






if(isset($_SESSION['mycart'][$pid]))
{
	$q=$_SESSION['mycart'][$pid]["q"];
	$q--;
	$_SESSION['mycart'][$pid]=array("p"=>$pprice,"q"=>$q,"t"=>$type);

}

else {
$_SESSION['mycart'][$pid]=array("p"=>$pprice,"q"=>1,"t"=>$type);
}
// $mycart=$_SESSION['mycart'];

// foreach($mycart as $i => $value)
// {
// 	echo $i;
// }

echo "<script>window.open('mycart.php','_self')</script>";

?>
