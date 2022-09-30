<?php session_start(); include("function/function.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/pustok/pustok/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 15:24:30 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soft Book Town</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJXTtTPcpPd-O65_PP-cN_HriSe1lWZ4s&libraries=places&callback=initMap"></script>
<!--     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCJXTtTPcpPd-O65_PP-cN_HriSe1lWZ4s"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 ">
                            <a href="index.php" class="site-brand" style="color: #62AB00;font-weight:bold;font-size:21px">
                               Soft Book Town
                            </a>
                        </div>
                       
                        <div class="col-lg-10">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right ">
                                    <li class="menu-item">
                                        <a href="index.php" style='font-size:14px'>Home</a>
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children ">
                                        <a href="javascript:void(0)" style='font-size:14px'>Schools/ Colleges <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu ">
                                            <?php
                                            $fg_sch="select * from tbl_schools order by school_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $school_id=$row_sch['school_id'];
                                                $school_name=$row_sch['school_name'];
                                                echo " <li><a href='school_detail.php?sid=$school_id'>$school_name</a></li>";
                                            }
  
                                             ?>
                                           
                                          
                                        </ul>
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0)" style='font-size:14px'>Book Stores <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu">
                                           <?php
                                            $fg_sch="select * from tbl_book_store order by store_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $store_id=$row_sch['store_id'];
                                                $store_name=$row_sch['store_name'];
                                                echo " <li><a href='bookstore_detail.php?bid=$store_id'>$store_name</a></li>";
                                            }
  
                                             ?>
                                        </ul>
                                    </li>
                                    <!-- Blog -->
                                      <li class="menu-item">
                                        <a href="request.php" style='font-size:14px'>Request</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="customer_service.php" style='font-size:14px'>Customer Service</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="announcment.php" style='font-size:14px'>Announcment</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contact_us.php" style='font-size:14px'>Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom pb--10">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-3">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">School / Colleges</a>
                                            <ul class="sub-menu">
                                                <?php
                                            $fg_sch="select * from tbl_schools order by school_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $school_id=$row_sch['school_id'];
                                                $school_name=$row_sch['school_name'];
                                                $school_email=$row_sch['school_email'];
                                                echo " <li class='cat-item has-children'><a href='school_detail.php?sid=$school_id'>$school_name</a>
                                                <ul class='sub-menu'>";
                                                $fg_class="select * from tbl_class where school_email='$school_email'";
                       $run_class=mysqli_query($con,$fg_class);
                       while($row_class=mysqli_fetch_array($run_class))
                       {
                        $class_id=$row_class['class_id'];
                        $class_name=$row_class['class_name'];

                        echo "<li><a href='class_detail.php?cid=$class_id'>$class_name</a></li>";

                       }


                                                echo " </ul>

                                                </li>";
                                            }
  
                                             ?>
                                             
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children">
                                            <a href="#">Book Store</a>
                                            <ul class="sub-menu">
                                                 <?php
                                            $fg_sch="select * from tbl_book_store order by store_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $store_id=$row_sch['store_id'];
                                                $store_name=$row_sch['store_name'];
                                                echo " <li><a href='bookstore_detail.php?bid=$store_id'>$store_name</a>
                                                 
                                                </li>";
                                            }
  
                                             ?>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="stationary.php">Stationary Items</a></li>
                                       
                                       
                                     
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-search-block">
                                <form method="get" action="search.php">
                                <input type="text" placeholder="Search entire store here" name="ukeyword">
                                <button>Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
           <?php if(isset($_SESSION['user_email']))
           {?>

                                    
<div class="dropdown">
  <button class="btn dropdown-toggle" style="background-color: #62AB00;color:white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Account
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="my_order.php">My Orders</a>
    <a class="dropdown-item" href="update_profile.php">Update Profile</a>
    <a class="dropdown-item" href="user_logout.php">Logout</a>
  </div>
</div>
<?php }   else { ?>
                                        <a href="user_login.php" class="font-weight-bold">Login</a> <br>
                                        <span>or</span><a href="user_register.php">Register</a>

                                    <?php } ?>
                                    </div>
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            <span class="text-number">
                                               <?php 
if(isset($_SESSION['mycart']))
{
  echo count($_SESSION['mycart']);
}
else {
  echo "0";
}
?>
                                            </span>
                                            <span class="text-item">
                                                Shopping Cart
                                            </span>
                                            <span class="price">
                                                Pkr 
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


                ?>
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="cart-dropdown-block">
                                            <div class=" single-cart-block ">
                                               <!--  <div class="cart-product">
                                                    <a href="product-details.html" class="image">
                                                        <img src="image/products/cart-product-1.jpg" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h3 class="title"><a href="product-details.html">Kodak PIXPRO
                                                                Astro Zoom AZ421 16 MP</a>
                                                        </h3>
                                                        <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                                        <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class=" single-cart-block ">
                                                <div class="btn-block">
                                                    <a href="mycart.php" class="btn">View Cart <i
                                                            class="fas fa-chevron-right"></i></a>
                                                    <a href="" class="btn btn--primary">Check Out <i
                                                            class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="" class="site-brand" style="color: #62AB00;font-weight:bold;font-size:25px">
                                Soft Book Town
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                           
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="mycart.php" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                 <li class="menu-item">
                                        <a href="">Home</a>
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children ">
                                        <a href="javascript:void(0)">Schools / Colleges <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu ">
                                          <?php
                                            $fg_sch="select * from tbl_schools order by school_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $school_id=$row_sch['school_id'];
                                                $school_name=$row_sch['school_name'];
                                                echo " <li><a href=''>$school_name</a></li>";
                                            }
  
                                             ?>
                                        </ul>
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0)">Book Stores <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu">
                                         <?php
                                            $fg_sch="select * from tbl_book_store order by store_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $store_id=$row_sch['store_id'];
                                                $store_name=$row_sch['store_name'];
                                                echo " <li><a href=''>$store_name</a></li>";
                                            }
  
                                             ?>
                                        </ul>
                                    </li>
                                    <!-- Blog -->
                                      <li class="menu-item">
                                        <a href="request.php" style='font-size:14px'>Request</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="customer_service.php" style='font-size:14px'>Customer Service</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="announcement.php">Announcment</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contact_us.php">Contact</a>
                                    </li>
                                     <?php if(!isset($_SESSION['user_email']))
           {?>
<li class="menu-item">
                                        <a href="user_login.php">Login</a>
                                    </li>

<?php } else {  ?>
<li class="menu-item">
                                        <a href="user_logout.php">Logout</a>
                                    </li>
<?php } ?>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                   
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="" class="site-brand" style="color: #62AB00;font-weight:bold;font-size:20px">
                               Soft Book Town
                            </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                              <li class="menu-item">
                                        <a href="">Home</a>
                                    </li>
                                    <!-- Shop -->
 <li class="menu-item has-children">
                                        <a href="javascript:void(0)">Schools / Colleges <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu">
                                         <?php
                                            $fg_sch="select * from tbl_schools order by school_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $school_id=$row_sch['school_id'];
                                                $school_name=$row_sch['school_name'];
                                                echo " <li><a href=''>$school_name</a></li>";
                                            }
  
                                             ?>
                                        </ul>
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0)">Book Stores <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu">
                                         <?php
                                            $fg_sch="select * from tbl_book_store order by store_id desc";
                                            $run_sch=mysqli_query($con,$fg_sch);
                                            while($row_sch=mysqli_fetch_array($run_sch))
                                            {
                                                $store_id=$row_sch['store_id'];
                                                $store_name=$row_sch['store_name'];
                                                echo " <li><a href=''>$store_name</a></li>";
                                            }
  
                                             ?>
                                        </ul>
                                    </li>
                                    <!-- Blog -->
                                     
                                    <li class="menu-item">
                                        <a href="contact_us.php">Contact</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>