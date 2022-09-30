<?php include("header.php");?>

  
        <!--=================================
        Home Features Section
        ===================================== -->
        <section class="mb--30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over Rs 500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                                <p>Pay At Your DoorStep</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us :+92 332 3420241</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-margin" id="school">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>Schools & Colleges</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>

            <?php

                $fg_school="select * from tbl_schools order by school_id desc";
                $run_school=mysqli_query($con,$fg_school);
                while($row_school=mysqli_fetch_array($run_school))
                {
                   $school_id=$row_school['school_id'];
                   $school_name=$row_school['school_name'];
                   $school_email=$row_school['school_email'];
                   $school_pass=$row_school['school_pass'];
                   $school_logo=$row_school['school_logo'];
                   $school_phone=$row_school['school_phone'];
                   $school_address=$row_school['school_address'];
                   $school_latitude=$row_school['school_latitude'];
                   $school_longitude=$row_school['school_longitude'];

               

             ?>
                    <div class="single-slide">
                        <div class="product-card">
                            
                            <div class="product-card--body">
                                <div class="card-image">
                                   <center> <img src="schoolpanel_profile/<?php echo $school_logo ?>" style="height:130px;width:180px" alt=""></center>
                                    <div class="hover-contents">
                                        <a href="school_detail.php?sid=<?php echo $school_id ?>" class="hover-image">
                                            <img src="schoolpanel_profile/<?php echo $school_logo ?>" alt="">
                                        </a>
                                     
                                    </div>
                                </div>
                                <div class="product-header">
                                
                                <h3><a href="school_detail.php?sid=<?php echo $school_id ?>" style="color:#62AB00"><?php echo $school_name ?>
                                  </a></h3>
                                  <a href="school_detail.php?sid=<?php echo $school_id ?>" class="author">
                                    Email : <?php echo $school_email ?>
                                </a>
                                <a href="school_detail.php?sid=<?php echo $school_id ?>" class="author">
                                    Phone : <?php echo $school_phone ?>
                                </a>
                              
                            </div>
                               
                            </div>
                        </div>
                    </div>
                <?php  } ?>
               
                </div>
            </div>
        </section>
          <div class="section-margin">
            <div class="container">
                <div class="row space-db--30">
                    <div class="col-lg-8 mb--30">
                        <div class="promo-wrapper promo-type-one">
                            <a href="#" class="promo-image  promo-overlay bg-image"
                                data-bg="image/bg-images/promo-banner-mid.jpg">
                                <!-- <img src="image/bg-images/promo-banner-mid.jpg" alt=""> -->
                            </a>
                            <div class="promo-text">
                                <div class="promo-text-inner">
                                    <h2>Buy 3. Get Free 1.</h2>
                                    <h3>50% off for selected products in Pustok.</h3>
                                    <a href="#" class="btn btn-outlined--red-faded">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb--30">
                        <div class="promo-wrapper promo-type-two ">
                            <a href="#" class="promo-image promo-overlay bg-image"
                                data-bg="image/bg-images/promo-banner-small.jpg">
                                <!-- <img src="image/bg-images/promo-banner-small.jpg" alt=""> -->
                            </a>
                            <div class="promo-text">
                                <div class="promo-text-inner">
                                    <span class="d-block price">$26.00</span>
                                    <h2>Praise for <br>
                                        The Night Child</h2>
                                    <a href="#" class="btn btn-outlined--primary">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        Promotion Section One
        ===================================== -->
    <section class="section-margin" id="bookstore">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>Book Stores</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>

            <?php

                $fg_school="select * from tbl_book_store order by store_id desc";
                $run_school=mysqli_query($con,$fg_school);
                while($row_school=mysqli_fetch_array($run_school))
                {
                   $store_id=$row_school['store_id'];
                   $store_name=$row_school['store_name'];
                   $store_email=$row_school['store_email'];
                   $store_logo=$row_school['store_logo'];
                   $store_phone=$row_school['store_phone'];
                 

             ?>
                    <div class="single-slide">
                        <div class="product-card">
                            
                            <div class="product-card--body">
                                <div class="card-image">
                                   <center> <img src="bookstore_profile/<?php echo $store_logo ?>" style="height:130px;width:180px" alt=""></center>
                                    <div class="hover-contents">
                                        <a href="bookstore_detail.php?bid=<?php echo $store_id ?>" class="hover-image">
                                            <img src="bookstore_profile/<?php echo $store_logo ?>" alt="">
                                        </a>
                                     
                                    </div>
                                </div>
                                <div class="product-header">
                                
                                <h3><a href="bookstore_detail.php?bid=<?php echo $store_id ?>" style="color:#62AB00"><?php echo $store_name ?>
                                  </a></h3>
                                  <a href="bookstore_detail.php?bid=<?php echo $store_id ?>" class="author">
                                    Email : <?php echo $store_email ?>
                                </a>
                                <a href="bookstore_detail.php?bid=<?php echo $store_id ?>" class="author">
                                    Phone : <?php echo $store_phone ?>
                                </a>
                              
                            </div>
                               
                            </div>
                        </div>
                    </div>
                <?php  } ?>
               
                </div>
            </div>
        </section>
         <section class="section-margin" id="books">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>BOOKS</h2>
                </div>
                <div class="product-list-slider slider-two-column product-slider multiple-row sb-slick-slider slider-border-multiple-row"
                    data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":3,
                                            "rows":2,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                   
                  <?php

                 $fg_book="select * from tbl_books where quote_status='Complete' order by book_id desc limit 6";
                 $run_book=mysqli_query($con,$fg_book);
                 while($row_book=mysqli_fetch_array($run_book))
                 {
                 	$book_id=$row_book['book_id'];
                 	$class_id=$row_book['class_id'];
                 	$book_subject=$row_book['book_subject'];
                 	$book_publisher=$row_book['book_publisher'];
                 	$sell_price=$row_book['sell_price'];
                 	$school_email=$row_book['school_email'];


                 	$fg_class="select * from tbl_class where class_id='$class_id'";
                 	$run_class=mysqli_query($con,$fg_class);
                 	$row_class=mysqli_fetch_array($run_class);
                 	$class_name=$row_class['class_name'];

                    $fg_sc="select * from tbl_schools where school_email='$school_email'";
                 	$run_sc=mysqli_query($con,$fg_sc);
                 	$row_sc=mysqli_fetch_array($run_sc);
                 	$school_name=$row_sc['school_name'];
                 	

                 	?>
<div class="single-slide">
                        <div class="product-card card-style-list">
                            <div class="card-image">
                                <img src="image/book.png" alt="" style="margin-top: 20px">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        <?php echo $book_subject ?>
                                    </a>
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        Class <?php echo $class_name ?>
                                    </a>
                                    <p><a href="" style="color: black">Publisher : <?php echo $book_publisher ?><br>School : <?php echo $school_name ?></a></p>
                                </div>
                                <div class="price-block">
                                    <span class="price">Rs <?php echo $sell_price ?></span> || 
                                    <a href="cart.php?pid=<?php echo $book_id ?>&type=book" class="btn" style="background-color:#62AB00;color:white">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php }
                   ?>
                    
               
                </div>
            </div>
        </section>
         <div class="section-margin">
            <div class="container">
                <div class="row space-db--30">
                    <div class="col-lg-8 mb--30">
                        <div class="promo-wrapper promo-type-one">
                            <a href="#" class="promo-image  promo-overlay bg-image"
                                data-bg="image/bg-images/promo-banner-mid.jpg">
                                <!-- <img src="image/bg-images/promo-banner-mid.jpg" alt=""> -->
                            </a>
                            <div class="promo-text">
                                <div class="promo-text-inner">
                                    <h2>Buy 3. Get Free 1.</h2>
                                    <h3>50% off for selected products in Pustok.</h3>
                                    <a href="#" class="btn btn-outlined--red-faded">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb--30">
                        <div class="promo-wrapper promo-type-two ">
                            <a href="#" class="promo-image promo-overlay bg-image"
                                data-bg="image/bg-images/promo-banner-small.jpg">
                                <!-- <img src="image/bg-images/promo-banner-small.jpg" alt=""> -->
                            </a>
                            <div class="promo-text">
                                <div class="promo-text-inner">
                                    <span class="d-block price">$26.00</span>
                                    <h2>Praise for <br>
                                        The Night Child</h2>
                                    <a href="#" class="btn btn-outlined--primary">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-margin" id="guestpaper">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>GUESS PAPER</h2>
                </div>
                <div class="product-list-slider slider-two-column product-slider multiple-row sb-slick-slider slider-border-multiple-row"
                    data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":3,
                                            "rows":2,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                   
                  <?php

                 $fg_book="select * from tbl_guestpaper where quote_status='Complete' order by guest_id desc limit 6";
                 $run_book=mysqli_query($con,$fg_book);
                 while($row_book=mysqli_fetch_array($run_book))
                 {
                 	$guest_id=$row_book['guest_id'];
                 	$class_id=$row_book['class_id'];
                 	$guestpaper_subject=$row_book['guestpaper_subject'];
                 	$guestpaper_publisher=$row_book['guestpaper_publisher'];
                 	$sell_price=$row_book['sell_price'];
                 	$school_email=$row_book['school_email'];


                 	$fg_class="select * from tbl_class where class_id='$class_id'";
                 	$run_class=mysqli_query($con,$fg_class);
                 	$row_class=mysqli_fetch_array($run_class);
                 	$class_name=$row_class['class_name'];

                    $fg_sc="select * from tbl_schools where school_email='$school_email'";
                 	$run_sc=mysqli_query($con,$fg_sc);
                 	$row_sc=mysqli_fetch_array($run_sc);
                 	$school_name=$row_sc['school_name'];
                 	

                 	?>
<div class="single-slide">
                        <div class="product-card card-style-list">
                            <div class="card-image">
                                <img src="image/book.png" alt="" style="margin-top: 20px">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        <?php echo $guestpaper_subject ?>
                                    </a>
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        Class <?php echo $class_name ?>
                                    </a>
                                    <p><a href="" style="color: black">Publisher : <?php echo $guestpaper_publisher ?><br>School : <?php echo $school_name ?></a></p>
                                </div>
                                <div class="price-block">
                                    <span class="price">Rs : <?php echo $sell_price ?></span>
                                    || 
                                    <a href="cart.php?pid=<?php echo $guest_id ?>&type=guest" class="btn" style="background-color:#62AB00;color:white">Add To Cart</a>

                                </div>
                            </div>
                        </div>
                    </div>
                 <?php }
                   ?>
                    
               
                </div>
            </div>
        </section>


        <section class="section-margin">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>NOTES</h2>
                </div>
                <div class="product-list-slider slider-two-column product-slider multiple-row sb-slick-slider slider-border-multiple-row"
                    data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":3,
                                            "rows":2,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                   
                  <?php

                 $fg_book="select * from tbl_notes where quote_status='Complete' order by note_id desc limit 6";
                 $run_book=mysqli_query($con,$fg_book);
                 while($row_book=mysqli_fetch_array($run_book))
                 {
                 	$note_id=$row_book['note_id'];
                 	$class_id=$row_book['class_id'];
                 	$note_subject=$row_book['note_subject'];
                 	$note_publisher=$row_book['note_publisher'];
                 	$sell_price=$row_book['sell_price'];
                 	$school_email=$row_book['school_email'];


                 	$fg_class="select * from tbl_class where class_id='$class_id'";
                 	$run_class=mysqli_query($con,$fg_class);
                 	$row_class=mysqli_fetch_array($run_class);
                 	$class_name=$row_class['class_name'];

                    $fg_sc="select * from tbl_schools where school_email='$school_email'";
                 	$run_sc=mysqli_query($con,$fg_sc);
                 	$row_sc=mysqli_fetch_array($run_sc);
                 	$school_name=$row_sc['school_name'];
                 	

                 	?>
<div class="single-slide">
                        <div class="product-card card-style-list">
                            <div class="card-image">
                                <img src="image/book.png" alt="" style="margin-top: 20px">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        <?php echo $note_subject ?>
                                    </a>
                                    <a href="#" class="author" style="color:#62AB00;font-size: 16px;">
                                        Class <?php echo $class_name ?>
                                    </a>
                                    <p><a href="" style="color: black">Publisher : <?php echo $note_publisher ?><br>School : <?php echo $school_name ?></a></p>
                                </div>
                                <div class="price-block">
                                    <span class="price">Rs : <?php echo $sell_price ?></span>
                                    || 
                                    <a href="cart.php?pid=<?php echo $note_id ?>&type=note" class="btn" style="background-color:#62AB00;color:white">Add To Cart</a>

                                </div>
                            </div>
                        </div>
                    </div>
                 <?php }
                   ?>
                    
               
                </div>
            </div>
        </section>
        <!--=================================
        Home Slider Tab
        ===================================== -->
       
        <!--=================================
        Best Seller Product
        ===================================== -->
      
        <!--=================================
        Promotion Section Two
        ===================================== -->
      
        <!--=================================
        ARTS & PHOTOGRAPHY BOOKS
        ===================================== -->
       
        <!--=================================
        Home Blog Slider
        ===================================== -->
        <!--=================================
        Home Blog
        ===================================== -->
      
<?php include("footer.php");?>