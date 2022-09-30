<?php include("header.php");

?>
	<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">Stationary </li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				
				    <section class="section-margin" id="books">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>Stationary</h2>
                </div>
                <div class="product-list-slider slider-two-column product-slider multiple-row sb-slick-slider slider-border-multiple-row"
                    data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":3,
                                            "rows":4,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                   
                  <?php

                 $fg_book="select * from tbl_stationary order by s_id desc";
                 $run_book=mysqli_query($con,$fg_book);
                 while($row_book=mysqli_fetch_array($run_book))
                 {
                 	$s_id=$row_book['s_id'];
                 	$bookstore_id=$row_book['bookstore_id'];
                 	$s_name=$row_book['s_name'];
                 	$s_price=$row_book['s_price'];
                 	$s_image=$row_book['s_image'];


                 	$fg_class="select * from tbl_book_store where store_id='$bookstore_id'";
                 	$run_class=mysqli_query($con,$fg_class);
                 	$row_class=mysqli_fetch_array($run_class);
                 	$store_name=$row_class['store_name'];

                  
                 	

                 	?>
<div class="single-slide">
                        <div class="product-card card-style-list">
                            <div class="card-image">
                                <img src="bookstore_panel/stationary_image/<?php echo $s_image ?>" alt="" style="margin-top: 20px">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        <?php echo $s_name ?>
                                    </a>
                                    <a href="#" class="author" style="color:#black;font-size: 16px;">
                                        Store Name : <?php echo $store_name ?>
                                    </a>
                                   
                                </div>
                                <div class="price-block">
                                    <span class="price">Rs <?php echo $s_price ?></span> || 
                                    <a href="cart.php?pid=<?php echo $s_id ?>&type=stationary" class="btn" style="background-color:#62AB00;color:white">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php }
                   ?>
                    
               
                </div>
            </div>
        </section>
			</div>
		</main>

<?php include("footer.php");?>