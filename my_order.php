<?php include("header.php");
$uemail=$_SESSION['user_email'];
$fg_user="select * from tbl_user where user_email='$uemail'";
$run_user=mysqli_query($con,$fg_user);
$row_user=mysqli_fetch_array($run_user);
$user_name=$row_user['user_name'];
$user_pass=$row_user['user_pass'];
$user_phone=$row_user['user_phone'];
$user_id=$row_user['user_id'];
 ?>

	<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">My Order</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
			<div class="container">
				<div class="row">
					<div class="col-12">
<h3><center>My Orders</center></h3>
							<table class="table">
  <thead>
    <tr>
      <th scope="col">OrderId</th>
      <th scope="col">OrderAmount</th>
      <th scope="col">DeliveryCharges</th>
      
      <th scope="col">NetAmount</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  	<?php
$fet="select * from tbl_orders where user_id='$user_id'";
$run_fet=mysqli_query($con,$fet);
while ($row_fet=mysqli_fetch_array($run_fet)) {
	
	$order_id=$row_fet['order_id'];
	$order_amount=$row_fet['order_amount'];
	$delivery_charge=$row_fet['delivery_charge'];
	$total_amount=$row_fet['total_amount'];
	$bill_date=$row_fet['bill_date'];
	$order_status=$row_fet['order_status'];
$net=$order_amount + $delivery_charge;

   echo "<tr>
      <th scope='row'>$order_id</th>
      <td scope='col'>Rs: $order_amount</td>
      <td scope='col'>Rs: $delivery_charge</td>
      <td scope='col'>Rs: $net</td>
      <td scope='col'>$bill_date</td>
      <td scope='col'>$order_status</td>
      
    </tr>";
}
  	?>
    
   
  </tbody>
</table>
					</div>

				</div>

			</div>

		</main>
<?php include("footer.php"); ?>