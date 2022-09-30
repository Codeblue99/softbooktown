<?php include("header.php");
$ukeyword=$_GET['ukeyword'];

?>
	<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">Search By "<?php echo $ukeyword ?>" </li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				
				
				<div class="shop-product-wrap list  row space-db--30 shop-border">
					
            <?php
             $cn_book="select * from tbl_books where book_subject like '%$ukeyword%' OR book_publisher like '%$ukeyword%' OR detail like '%$ukeyword%'";
             $run_book=mysqli_query($con,$cn_book);
             while($row_book=mysqli_fetch_array($run_book))
             {
               $book_subject=$row_book['book_subject'];
               $book_publisher=$row_book['book_publisher'];
               $detail=$row_book['detail'];
               $assign_bookstore_id=$row_book['assign_bookstore_id'];
               $sell_price=$row_book['sell_price'];
               $school_email=$row_book['school_email'];
               $book_id=$row_book['book_id'];

               $fg_sc="select * from tbl_schools where school_email='$school_email'";
               $run_sc=mysqli_query($con,$fg_sc);
               $row_sc=mysqli_fetch_array($run_sc);
               $school_name=$row_sc['school_name'];

             ?>

					<div class="col-lg-4 col-sm-6">
						<div class="product-card card-style-list">
							
							<div class="product-list-content">
								<div class="card-image">
									<img src="image/book2.png" alt="">
								</div>
								<div class="product-card--body">
									<div class="product-header">
										<h2  >
											<?php echo $book_subject ?>
										</h2>
										<h3><a  tabindex="0"><?php echo $book_publisher ?></a></h3>
									</div>
									
										<p><?php echo $detail ?>
											<br>School : <?php echo $school_name ?><br>Type : Book
										</p>
									
									<div class="price-block">
										
										<span class="price-discount">Rs <?php echo $sell_price ?></span>
									</div>
									
									<div class="btn-block">
										<a href="cart.php?pid=<?php echo $book_id ?>&type=book" class="btn btn-outlined">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>


				 <?php
             $cn_book="select * from tbl_guestpaper  where guestpaper_subject like '%$ukeyword%' OR guestpaper_publisher like '%$ukeyword%' OR detail like '%$ukeyword%'";
             $run_book=mysqli_query($con,$cn_book);
             while($row_book=mysqli_fetch_array($run_book))
             {
               $book_subject=$row_book['guestpaper_subject'];
               $book_publisher=$row_book['guestpaper_publisher'];
               $detail=$row_book['detail'];
               $assign_bookstore_id=$row_book['assign_bookstore_id'];
               $sell_price=$row_book['sell_price'];
                $school_email=$row_book['school_email'];
                $guest_id=$row_book['guest_id'];


         $fg_sc="select * from tbl_schools where school_email='$school_email'";
               $run_sc=mysqli_query($con,$fg_sc);
               $row_sc=mysqli_fetch_array($run_sc);
               $school_name=$row_sc['school_name'];
             ?>

					<div class="col-lg-4 col-sm-6">
						<div class="product-card card-style-list">
							
							<div class="product-list-content">
								<div class="card-image">
									<img src="image/book2.png" alt="">
								</div>
								<div class="product-card--body">
									<div class="product-header">
										<h2  >
											<?php echo $book_subject ?>
										</h2>
										<h3><a  tabindex="0"><?php echo $book_publisher ?></a></h3>
									</div>
								
										<p><?php echo $detail ?><br>School : <?php echo $school_name ?><br>Type : Guest Paper</p>
									
									<div class="price-block">
										
										<span class="price-discount">Rs <?php echo $sell_price ?></span>
									</div>
									
									<div class="btn-block">
										<a href="cart.php?pid=<?php echo $guest_id ?>&type=guest" class="btn btn-outlined">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

					 <?php
             $cn_book="select * from tbl_notes where note_subject like '%$ukeyword%' OR note_publisher like '%$ukeyword%' OR detail like '%$ukeyword%'";
             $run_book=mysqli_query($con,$cn_book);
             while($row_book=mysqli_fetch_array($run_book))
             {
               $book_subject=$row_book['note_subject'];
               $book_publisher=$row_book['note_publisher'];
               $detail=$row_book['detail'];
               $assign_bookstore_id=$row_book['assign_bookstore_id'];
               $sell_price=$row_book['sell_price'];
                $school_email=$row_book['school_email'];
                $note_id=$row_book['note_id'];


         $fg_sc="select * from tbl_schools where school_email='$school_email'";
               $run_sc=mysqli_query($con,$fg_sc);
               $row_sc=mysqli_fetch_array($run_sc);
               $school_name=$row_sc['school_name'];

             ?>

					<div class="col-lg-4 col-sm-6">
						<div class="product-card card-style-list">
							
							<div class="product-list-content">
								<div class="card-image">
									<img src="image/book2.png" alt="">
								</div>
								<div class="product-card--body">
									<div class="product-header">
										<h2  >
											<?php echo $book_subject ?>
										</h2>
										<h3><a  tabindex="0"><?php echo $book_publisher ?></a></h3>
									</div>
									<article>
										<p><?php echo $detail ?><br>School : <?php echo $school_name ?><br>Type : Notes</p>
									</article>
									<div class="price-block">
										
										<span class="price-discount">Rs <?php echo $sell_price ?></span>
									</div>
									
									<div class="btn-block">
										<a href="cart.php?pid=<?php echo $note_id ?>&type=note" class="btn btn-outlined">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			
			</div>
		</main>

<?php include("footer.php");?>