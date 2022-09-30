<?php include("header.php");
$cid=$_GET['cid'];
$fg_clas="select * from tbl_class where class_id='$cid'";
$run_class=mysqli_query($con,$fg_clas);
$row_class=mysqli_fetch_array($run_class);
$class_name=$row_class['class_name'];
$school_email=$row_class['school_email'];

$fg_sch="select * from tbl_schools where school_email='$school_email'";
$run_sch=mysqli_query($con,$fg_sch);
$row_sch=mysqli_fetch_array($run_sch);
$school_name=$row_sch['school_name'];

?>
	<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active"><?php echo $school_name ?>  > <?php echo $class_name ?> Books</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				
				
				<div class="shop-product-wrap list  row space-db--30 shop-border">
					
            <?php
             $cn_book="select * from tbl_books where class_id='$cid' and school_email='$school_email'";
             $run_book=mysqli_query($con,$cn_book);
             while($row_book=mysqli_fetch_array($run_book))
             {
               $book_subject=$row_book['book_subject'];
               $book_publisher=$row_book['book_publisher'];
               $detail=$row_book['detail'];
               $assign_bookstore_id=$row_book['assign_bookstore_id'];
               $sell_price=$row_book['sell_price'];
               $book_id=$row_book['book_id'];


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
										<p><?php echo $detail ?>
											<br>Type : Book
										</p>
									</article>
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
             $cn_book="select * from tbl_guestpaper where class_id='$cid' and school_email='$school_email'";
             $run_book=mysqli_query($con,$cn_book);
             while($row_book=mysqli_fetch_array($run_book))
             {
               $book_subject=$row_book['guestpaper_subject'];
               $book_publisher=$row_book['guestpaper_publisher'];
               $detail=$row_book['detail'];
               $assign_bookstore_id=$row_book['assign_bookstore_id'];
               $sell_price=$row_book['sell_price'];
               $guest_id=$row_book['guest_id'];

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
										<p><?php echo $detail ?><br>Type : Guest Paper</p>
									</article>
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
             $cn_book="select * from tbl_notes where class_id='$cid' and school_email='$school_email'";
             $run_book=mysqli_query($con,$cn_book);
             while($row_book=mysqli_fetch_array($run_book))
             {
               $book_subject=$row_book['note_subject'];
               $book_publisher=$row_book['note_publisher'];
               $detail=$row_book['detail'];
               $assign_bookstore_id=$row_book['assign_bookstore_id'];
               $sell_price=$row_book['sell_price'];
               $note_id=$row_book['note_id'];


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
										<p><?php echo $detail ?><br>Type : Notes</p>
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