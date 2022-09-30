<?php session_start();
include("../function/function.php");
error_reporting(0);
if(!isset($_SESSION['admin_email']))
{
  echo "<script>window.open('admin_login.php','_self')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Soft Book Town - Admin  Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
    
	<!--amcharts -->
	<link href="lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	<script src="https://kit.fontawesome.com/51238610b6.js" crossorigin="anonymous"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <b class="logo-mini">
      <span class="light-logo"><img src="images/logo-light.png" alt="logo"></span>
      <span class="dark-logo"><img src="images/logo-dark.png" alt="logo"></span>
    </b>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
 
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="images/prof.png">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>SoftBookTown </b></span>
			</a>
		</div>
       
        <div class="info">
          <p>Admin Panel</p>
		
            <a href="admin_logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="index.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>


       
 <li class="active">
          <a href="school_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Schools/Colleges</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

         <li class="active">
          <a href="bookstore_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Book Stores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
           <li class="active">
          <a href="user_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
            <li class="active">
          <a href="order_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
           <li class="active">
          <a href="stationary_order_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Stationary Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
          <li class="active">
          <a href="rider_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Riders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="active">
          <a href="annoucment_list.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Announcments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
      
        
      </ul>
    </section>
  </aside>