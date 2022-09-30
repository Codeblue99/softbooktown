<?php include("header.php");?>

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active">Forget Password</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!--=============================================
    =            Login Register page content         =
    =============================================-->
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-3 col-xs-12"></div>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
						<form method="post">
							<div class="login-form">
								<h4 class="login-title">Forget Password</h4>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here..." name="uemail">
									</div>
									<div class="col-12 mb--20">
										<label for="password">New Password</label>
										<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password" name="upass">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Account Type</label>
										<select class="form-control mb-0" name="utype" required="required">
											<option value="" hidden="">Select Type</option>
											<option>User</option>
											<option>School</option>
											<option>BookStore</option>
										</select>
									</div>
									<div class="col-md-12">
										

										<input type="submit"  class="btn btn--primary" value="Change Password" name="ulogin">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-3 col-xs-12"></div>
				</div>
			</div>
		</main>
	</div>

<?php include("footer.php");?>

<?php
if(isset($_POST['ulogin']))
{
	$uemail=$_POST['uemail'];
	$upass=$_POST['upass'];
	$utype=$_POST['utype'];

if($utype == "User")
{
	$check_user="select * from tbl_user where user_email='$uemail' ";
	$run_user=mysqli_query($con,$check_user);
	$row_user=mysqli_num_rows($run_user);
	if($row_user !=0)
	{
		$updat="update tbl_user set user_pass='$upass' where user_email='$uemail'";
		$run_updat=mysqli_query($con,$updat);
        
           echo "<script>alert('Password Successfully Change')</script>";	
     echo "<script>window.open('user_login.php','_self')</script>";
	}
	else
	{
   echo "<script>alert('Email Does Not Exist')</script>";	
     echo "<script>window.open('forget_password.php','_self')</script>";
	}



}

//schol
if($utype == "School")
{
	$check_user="select * from tbl_schools where school_email='$uemail' ";
	$run_user=mysqli_query($con,$check_user);
	$row_user=mysqli_num_rows($run_user);
	if($row_user !=0)
	{
		$updat="update tbl_schools set school_pass='$upass' where school_email='$uemail'";
		$run_updat=mysqli_query($con,$updat);
        
           echo "<script>alert('Password Successfully Change')</script>";	
     echo "<script>window.open('user_login.php','_self')</script>";
	}
	else
	{
   echo "<script>alert('Email Does Not Exist')</script>";	
     echo "<script>window.open('forget_password.php','_self')</script>";
	}



}

//bookstore
if($utype == "BookStore")
{
	$check_user="select * from tbl_book_store where store_email='$uemail' ";
	$run_user=mysqli_query($con,$check_user);
	$row_user=mysqli_num_rows($run_user);
	if($row_user !=0)
	{
		$updat="update tbl_book_store set store_pass='$upass' where store_email='$uemail'";
		$run_updat=mysqli_query($con,$updat);
        
           echo "<script>alert('Password Successfully Change')</script>";	
     echo "<script>window.open('user_login.php','_self')</script>";
	}
	else
	{
   echo "<script>alert('Email Does Not Exist')</script>";	
     echo "<script>window.open('forget_password.php','_self')</script>";
	}



}

}
?>