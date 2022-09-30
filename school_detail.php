<?php include("header.php"); 
$sid=$_GET['sid'];
$fg_em="select * from tbl_schools where school_id='$sid'";
$run_em=mysqli_query($con,$fg_em);
$row_em=mysqli_fetch_array($run_em);
$school_email=$row_em['school_email'];

?>
	<section class="breadcrumb-section">
			<h2 class="sr-only">Soft Book Town</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">School Detail</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
			
			
				<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
						<?php 
                       $fg_class="select * from tbl_class where school_email='$school_email'";
                       $run_class=mysqli_query($con,$fg_class);
                       while($row_class=mysqli_fetch_array($run_class))
                       {
                       	$class_id=$row_class['class_id'];
                       	$class_name=$row_class['class_name'];

                       	$cn_book="select * from tbl_books where class_id='$class_id' and school_email='$school_email'";
                       	$run_book=mysqli_query($con,$cn_book);
                       	$row_book=mysqli_num_rows($run_book);

                       	$cn_guest="select * from tbl_guestpaper where class_id='$class_id' and school_email='$school_email'";
                       	$run_guest=mysqli_query($con,$cn_guest);
                       	$row_guest=mysqli_num_rows($run_guest);

                       	$cn_note="select * from tbl_notes where class_id='$class_id' and school_email='$school_email'";
                       	$run_note=mysqli_query($con,$cn_note);
                       	$row_note=mysqli_num_rows($run_note);




                       	echo "<div class='col-lg-4 col-sm-6'>
                       	<div style='border:1px solid grey;padding: 5px;'>
                      
                       	<h3><center style='color:#62AB00;outline:none;border:none'>$class_name</center></h3>
                       	<p><center style='color:black'>$row_book Books<br>
                       	$row_guest GuestPaper<br>
                       	$row_note Notes</center></p>
                       <p>	<center><a href='class_detail.php?cid=$class_id' class='btn' style='background-color:#62AB00;color:white;height:10px'>Explore</a></center></p>
                       	</div>
                       	</div>";
                       }
 					  	?>

					  

				
				</div>
				<!-- Pagination Block -->
		
			</div>
		</main>

<br>
<br>
<?php include("footer.php"); ?>