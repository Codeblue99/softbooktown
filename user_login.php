<?php include("header.php");?>

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active">Login</li>
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
						<form method="post" autocomplete="nope">
							<div class="login-form">
								<h4 class="login-title">Login Customer</h4>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here..." name="uemail" autocomplete="off">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password" name="upass">
									</div>
									<div class="col-md-12">
										<p>Don't Have an Account ? <a href="user_register.php" style="color: #62AB00"> Register Now.</a>
										<br>Login as a BookStore ? <a href="bookstore_panel/bookstore_login.php" style="color: #62AB00"> Login Now.</a>
											<br>Login as a School / College ? <a href="school_panel/school_login.php" style="color: #62AB00"> Login Now.</a>
											<br>
											<br>Forget Password? <a href="forget_password.php" style="color: #62AB00"> Forget Now.</a></p>	

										<input type="submit"  class="btn btn--primary" value="Login" name="ulogin">
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

	$check_user="select * from tbl_user where user_email='$uemail' AND user_pass='$upass'";
	$run_user=mysqli_query($con,$check_user);
	$row_user=mysqli_num_rows($run_user);

	if($row_user)
	{

    $_SESSION['user_email']=$uemail;

     echo "<script>alert('Login Sucessfully')</script>";	
     echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{
     echo "<script>alert('Email or Password Was Incorrect')</script>";	
     echo "<script>window.open('user_login.php','_self')</script>";
	}
}
?>