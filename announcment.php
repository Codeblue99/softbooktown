<?php include("header.php");
?>
	<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">Announcment </li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				
				
				<div class="shop-product-wrap list  row space-db--30 shop-border">
		<?php 
		$fg_ann="select * from tbl_annoucment order by a_id desc";
		$run_ann=mysqli_query($con,$fg_ann);
		while($row_ann=mysqli_fetch_array($run_ann))
		{
          $a_image=$row_ann['a_image'];
          $a_text=$row_ann['a_text'];
          $a_date=$row_ann['a_date'];
		
?>
           <div class="col-lg-4 col-sm-6">
						<div class="product-card card-style-list">
							
							<div class="product-list-content">
								<div class="card-image">
									<img src="admin_panel/annoucment_img/<?php echo $a_image ?>" style="width: 150px;height: 150px" alt="">
								</div>
								<div class="product-card--body">
									<!-- <div class="product-header">
										<h2  >
											<?php echo $book_subject ?>
										</h2>
										<h3><a  tabindex="0"><?php echo $book_publisher ?></a></h3>
									</div> -->
									
										<p><br><?php echo $a_text ?>
											
										</p>
									
									<div class="price-block">
										
										<span class="price-discount">Date : <?php echo $a_date ?></span>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				<?php 	} ?>

				</div>
			
			</div>
		</main>

<?php include("footer.php");?>