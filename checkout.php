<?php include("header.php");
if(isset($_SESSION['user_email']))
{


$uemail=$_SESSION['user_email'];
$fg_user="select * from tbl_user where user_email='$uemail'";
$run_user=mysqli_query($con,$fg_user);
$row_user=mysqli_fetch_array($run_user);
$user_name=$row_user['user_name'];
$user_pass=$row_user['user_pass'];
$user_phone=$row_user['user_phone'];
$user_id=$row_user['user_id'];
}
else
{
	echo "<script>window.open('user_login.php','_self')</script>";
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com/">
<script>
   if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  function showPosition(position) {
    $('#ulatitude').val(position.coords.latitude);
    $('#ulongitude').val(position.coords.longitude);
 
}
    </script>
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">Checkout</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Checkout Form s-->
						<div class="checkout-form">
							<form method="post">
							<div class="row row-40">
							
								<div class="col-lg-7 mb--20">
									<!-- Billing Address -->
									<div id="billing-form" class="mb-40">
										<h4 class="checkout-title">Billing Address</h4>
										<div class="row">
											<div class="col-md-12 col-12 mb--20">
												<label>Full Name*</label>
												<input type="text" placeholder="Full Name" value="<?php echo $user_name ?>" required name="uname">
											</div>
										
											
											<div class="col-md-6 col-12 mb--20">
												<label>Email Address*</label>
												<input type="email" placeholder="Email Address" value="<?php echo $uemail ?>" readonly>
											</div>
											<div class="col-md-6 col-12 mb--20">
												<label>Phone no*</label>
												<input type="text" name="uphone" placeholder="Phone number" value="<?php echo $user_phone ?>">
											</div>
											<div class="col-12 mb--20">
												<label>Address*</label>
												<input type="text" placeholder="Address line 1" required name="uaddress1">
											
											</div>
											<div class="col-md-4 col-12 mb--20">
												<label>Town/City*</label>
												<input type="text" placeholder="Town/City" readonly value="karachi" name="ucity">
											</div>
											<div class="col-md-4 col-12 mb--20">
												<label>State*</label>
												<input type="text" placeholder="State" required name="ustate">
											</div>
											<div class="col-md-4 col-12 mb--20">
												<label>Zip Code*</label>
												<input type="text" placeholder="Zip Code" required name="uzipcode">
											</div>
												<div class="col-md-4 col-12 mb--20">
												<label>Latitude*</label>
												<input type="text"  required name="ulatitude" id="ulatitude">
											</div>
												<div class="col-md-4 col-12 mb--20">
												<label>Longitude*</label>
												<input type="text"  required name="ulongitude" id="ulongitude">
											</div>
											<div class="col-md-4 col-12 mb--20">
												<label>Payment Method</label>
											<select class="form-control" name="upayment">
											    <option>Cash On Delivery</option>
											</select>	
											</div>
										
										</div>
									</div>
									<!-- Shipping Address -->
									
									<div class="order-note-block mt--30">
										<label for="order-note">Order notes</label>
										<textarea id="order-note" cols="30" rows="10" class="order-note" name="unote" 
											placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="row">
										<!-- Cart Total -->
										<div class="col-12">
											<div class="checkout-cart-total">
												<h2 class="checkout-title">YOUR ORDER</h2>
												
												<p>Sub Total <span>Rs
													<?php


if(isset($_SESSION['mycart']))

{

  $sum=0;
  foreach ($_SESSION['mycart'] as $key) {
    $sum=$sum + $key['p'] * $key['q'];
    
  }
  echo $sum;
}
  else {
    echo 0;
  }


                ?></span></p>
												<p>Shipping Fee <span>Rs : 100</span></p>
												<h4>Grand Total <span>Rs 
												                                                <?php

if(isset($_SESSION['mycart']))

{

  $sum2=0;
  foreach ($_SESSION['mycart'] as $key) {
    $sum2=$sum2 + $key['p'] * $key['q'];
    
  }
  echo $sum2 + 100;
}
  else {
    echo 0;
  }

$final_amount=$sum2 + 100;
                ?></span></h4>
												
												
												<button type="submit" class="place-order w-100" name="order_now">Place order</button>
											</div>
										</div>
									</div>
								</div>
							
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php include("footer.php");?>

<?php 

if(isset($_POST['order_now']))
{
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $uaddress1=$_POST['uaddress1'];
 
    $ucity=$_POST['ucity'];
    $uphone=mysqli_real_escape_string($con,$_POST['uphone']);
  
    $ustate=$_POST['ustate'];
    $uzipcode=$_POST['uzipcode'];
    $unote=$_POST['unote'];
    $ulatitude=$_POST['ulatitude'];
    $ulongitude=$_POST['ulongitude'];

$ins_ord="INSERT INTO tbl_orders(user_id,order_amount,delivery_charge,total_amount,order_note,bill_date,order_status) VALUES ('$user_id','$sum',100,'$final_amount','$unote',NOW(),'Pending')";
$run_ord=mysqli_query($con,$ins_ord);
$max_pr="select * from tbl_orders order by order_id desc limit 1";
$run_pr=mysqli_query($con,$max_pr);
$row_pr=mysqli_fetch_array($run_pr);
$oids=$row_pr['order_id'];




$total=0;
$dc=0;
foreach ($_SESSION['mycart'] as $i => $value) {

$type=$value['t'];
$qty=$value['q'];
$totals=$value['p'] * $qty;

$proname="";
$bookname="";
$storeaddress="";
$storelongitude="";
$storelatitude="";

if($type="book")
{
    $fg_bok="select * from tbl_books where book_id='$i'";
    $run_bok=mysqli_query($con,$fg_bok);
    $row_bok=mysqli_fetch_array($run_bok);
$proname=$row_bok['book_subject'] . " (" . $row_bok['book_publisher']. " ) ";
$assign_bookstore_id=$row_bok['assign_bookstore_id'];


$store="select * from tbl_book_store where store_id='$assign_bookstore_id'";
$run_store=mysqli_query($con,$store);
$row_store=mysqli_fetch_array($run_store);
$bookname=$row_store['store_name'];
$storeaddress=$row_store['store_address'];
$storelatitude=$row_store['store_latitude'];
$storelongitude=$row_store['store_longitude'];



    
}

else if($type="guest")
{
    $fg_bok="select * from tbl_guestpaper where guest_id='$i'";
    $run_bok=mysqli_query($con,$fg_bok);
    $row_bok=mysqli_fetch_array($run_bok);
$proname=$row_bok['guestpaper_subject'] . " (" . $row_bok['guestpaper_publisher']. " ) ";
$assign_bookstore_id=$row_bok['assign_bookstore_id'];


$store="select * from tbl_book_store where store_id='$assign_bookstore_id'";
$run_store=mysqli_query($con,$store);
$row_store=mysqli_fetch_array($run_store);
$bookname=$row_store['store_name'];
$storeaddress=$row_store['store_address'];
$storelatitude=$row_store['store_latitude'];
$storelongitude=$row_store['store_longitude'];


    
}
else if($type="guest")
{
    $fg_bok="select * from tbl_guestpaper where guest_id='$i'";
    $run_bok=mysqli_query($con,$fg_bok);
    $row_bok=mysqli_fetch_array($run_bok);
$proname=$row_bok['guestpaper_subject'] . " (" . $row_bok['guestpaper_publisher']. " ) ";
$assign_bookstore_id=$row_bok['assign_bookstore_id'];


$store="select * from tbl_book_store where store_id='$assign_bookstore_id'";
$run_store=mysqli_query($con,$store);
$row_store=mysqli_fetch_array($run_store);
$bookname=$row_store['store_name'];
$storeaddress=$row_store['store_address'];
$storelatitude=$row_store['store_latitude'];
$storelongitude=$row_store['store_longitude'];


    
}
else if($type="note")
{
    $fg_bok="select * from tbl_notes where note_id='$i'";
    $run_bok=mysqli_query($con,$fg_bok);
    $row_bok=mysqli_fetch_array($run_bok);
$proname=$row_bok['note_subject'] . " (" . $row_bok['note_publisher']. " ) ";
$assign_bookstore_id=$row_bok['assign_bookstore_id'];


$store="select * from tbl_book_store where store_id='$assign_bookstore_id'";
$run_store=mysqli_query($con,$store);
$row_store=mysqli_fetch_array($run_store);
$bookname=$row_store['store_name'];
$storeaddress=$row_store['store_address'];
$storelatitude=$row_store['store_latitude'];
$storelongitude=$row_store['store_longitude'];


    
}
else if($type="stationary")
{
    $fg_bok="select * from tbl_stationary where s_id='$i'";
    $run_bok=mysqli_query($con,$fg_bok);
    $row_bok=mysqli_fetch_array($run_bok);
$proname=$row_bok['s_name'];


$bookname="Admin";
$storeaddress="Admin";
$storelatitude="Admin";
$storelongitude="Admin";


    
}



$ins_pro="INSERT INTO tbl_order_detail(order_id,del_address1,pid,ptype,order_qty,user_city,ustate,uzipcode,total_bill,order_status,order_date,product_name,bookstore_name,bookstore_address,bookstore_latitude,bookstore_longitude,user_latitude,user_longitude) VALUES ('$oids','$uaddress1','$i','$type','$qty','$ucity','$ustate','$uzipcode','$totals','Pending',NOW(),'$proname','$bookname','$storeaddress','$storelatitude','$storelongitude','$ulatitude','$ulongitude')";

$run_pro=mysqli_query($con,$ins_pro);




unset($_SESSION['mycart'][$i]);


if($run_pro)
{
    
    

  
//     $headers3= "Dear Admin" . "\r\n" ."You Have Just New Order Received From Site KaprayWapray!" . "\r\n\r\n"  ."Please Chect Out The Admin Panel!"
//   . "\r\n" ."Thanks Regard ," . "\r\n" . "KaprayWapray" ;
//     //  mail($eml,"Order Placement Notification",$headers,$headers2);
//  $from2 = "From: info@kapraywapray.pk" . "\r\n" .
// "CC: info@kapraywapray.pk";
    
//      mail("info@kapraywapray.pk","Order Placement Notification", $headers3, $from2);
    
    

    echo "<script>alert('Order Place Successfully')</script>";
    echo "<script>window.open('thank_you.php','_self')</script>";
}

else {
        echo "<script>alert('Order Place Not Successfully')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
}

}
}
?>