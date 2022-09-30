<?php include("header.php");?>

	<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">My Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container">
					<div class="page-section-title">
						<h1>Shopping Cart</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<th class="pro-remove"></th>
												<th class="pro-title">Class</th>
												<th class="pro-thumbnail">Subject</th>
												<th class="pro-title">Publisher</th>
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<th class="pro-subtotal">Total</th>
											</tr>
										</thead>
										<tbody>
												<?php
$total=0;
$dc=0;
foreach ($_SESSION['mycart'] as $i => $value) {
	$subject="";
	$publisher="";
	$pprice=0;
	$classid=0;
if($value['t']=="book")
{

$fet_pro="select * from tbl_books where book_id='$i'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price'];	
$subject=$row_pro['book_subject'];
$publisher=$row_pro['book_publisher'];	
$classid=$row_pro['class_id'];
}
if($value['t']=="guest")
{

$fet_pro="select * from tbl_guestpaper where guest_id='$i'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price'];	
$subject=$row_pro['guestpaper_subject'];
$publisher=$row_pro['guestpaper_publisher'];
$classid=$row_pro['class_id'];
}
if($value['t']=="note")
{

$fet_pro="select * from tbl_notes where note_id='$i'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price'];	
$subject=$row_pro['note_subject'];
$publisher=$row_pro['note_publisher'];
$classid=$row_pro['class_id'];
}
if($value['t']=="stationary")
{

$fet_pro="select * from tbl_stationary where s_id='$i'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['s_price'];	
$subject="";
$publisher="";
$class_name=$row_pro['s_name'];
}
if($value['t']!="stationary")
{
$fg_class="select * from tbl_class where class_id='$classid'";
$run_class=mysqli_query($con,$fg_class);
$row_class=mysqli_fetch_array($run_class);
$class_name=$row_class['class_name'];
}
$qty=$value['q'];
$tol=$pprice * $value['q'];
$typp=$value['t'];
echo "
<tr>
		<td class='pro-remove'><a href='remove.php?pid=$i'><i class='far fa-trash-alt'></i></a>
		</td>
			<td class='pro-thumbnail'>$class_name</td>
			<td class='pro-title'><a >$subject</a></td>
			<td class='pro-title'><a >$publisher</a></td>
			<td class='pro-price'><span>Rs $pprice</span></td>
			<td class='pro-quantity'>
			<a href='addcart.php?pid=$i&type=$typp' style='color:black'><span class='ir'><i class='fas fa-plus'></i></span></a>
			<span>&nbsp;$qty&nbsp;</span>
			<a href='mincart.php?pid=$i&type=$typp' style='color:black'><span class='ir'><i class='fas fa-minus'></i></span></a>
			
			</td>
			<td class='pro-subtotal'><span>Rs : $tol</span></td>
											</tr>




";
$total=$total + $tol;
}
?>
											<!-- Product Row -->
											
											
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb--30 mb-lg--0">
							<!-- slide Block 5 / Normal Slider -->
							
						</div>
						<!-- Cart Summary -->
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Cart Summary</span></h4>
									<p>Sub Total <span class="text-primary">Rs : <?php echo $total ?></span></p>
									<p>Shipping Cost <span class="text-primary">Rs : 100</span></p>
									<h2>Grand Total <span class="text-primary">Rs : <?php echo $total + 100; ?></span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="checkout.php" class="checkout-btn c-btn btn--primary">Checkout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
<?php include("footer.php");?>