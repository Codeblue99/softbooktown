<?php session_start();
include("../function/function.php");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 11:28:21 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>Soft Book Town | Admin Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<style>
.login-page, .register-page {
    background: url('images/school.jpeg') center center no-repeat #d2d6de;
    background-size: cover;
    height: 100%;
    width: 100%;
    position: fixed;
}
  </style>
<body class="hold-transition login-page" >
<!-- 
style="background-image:url('images/techtrixlogo.jpg')" -->


<div class="login-box" >
  <div class="login-logo">
    <a href="">Soft Book Town <br>Admin Panel</b> </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post" autocomplete="off" class="form-element">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="aemail" placeholder="Email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="apass" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
       
        <!-- /.col -->
       
        <!-- /.col -->
        <div class="col-12 text-center">
          <input type="submit" class="btn btn-info btn-block margin-top-10" name="btnlogin" value="SIGN IN">
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<?php


if(isset($_POST['btnlogin']))
{


$email=$_POST['aemail'];
$pass=$_POST['apass'];


$check_avail="select * from tbl_admin_user where admin_email='$email' AND admin_pass='$pass'";
$run_avail=mysqli_query($con,$check_avail);
$row_avail=mysqli_num_rows($run_avail);



if($row_avail !=0)
{



$_SESSION['admin_email']=$email;
echo "<script>alert('Login Successfully')</script>";
echo "<script>window.open('index.php','_self')</script>";  

}
else
{

echo "<script>alert('Email Id or Pass Is Incorrect')</script>";
echo "<script>window.open('admin_login.php','_self')</script>";
}






}



?>



	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 11:28:21 GMT -->
</html>
