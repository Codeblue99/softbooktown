<?php include("header.php");?>

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active">User Register</li>
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
								<h4 class="login-title">Register Customer</h4>
								<p><span class="font-weight-bold">Register as a New Customer</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Enter your Name here...</label>
										<input class="mb-0 form-control" type="text" id="name" autocomplete="nope"
											placeholder="Enter you Name here..." name="uname" required="required">
									</div>
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here..." name="uemail" autocomplete="nope" required="required">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password" minlength="8" name="upass"  required="required">
									</div>
									<div class="col-12 mb--20">
										<label for="">Phone No</label>
										<input class="mb-0 form-control" type="text" id="" placeholder="Enter your Number" name="unumber"   required="required" >
									</div>
									<div class="col-md-12">
										<p>Login as a Customer ? <a href="user_login.php" style="color: #62AB00"> Login Now.</a>
										<br>Register as a BookStore ? <a href="bookstore_register.php" style="color: #62AB00"> Register Now.</a>
											<br>Register as a School / College ? <a href="school_register.php" style="color: #62AB00"> Register Now.</a></p>	

										<input type="submit" name="uregitser" class="btn btn--primary" value="Register Now">
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
if(isset($_POST['uregitser']))
{
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$upass=$_POST['upass'];
	$unumber=$_POST['unumber'];

	$check_user="select * from tbl_user where user_email='$uemail'";
	$run_user=mysqli_query($con,$check_user);
	$row_user=mysqli_num_rows($run_user);

	if($row_user == 0)
	{

		$ins_user="INSERT INTO tbl_user(user_name,user_email,user_pass,user_phone,user_date,user_status) VALUES ('$uname','$uemail','$upass','$unumber',NOW(),'Active')";
		$run_ins=mysqli_query($con,$ins_user);

		if($run_ins)
		{



$subject = "Welcome Message";

$headers = "From: info@softbooktown.com" . "\r\n" .
"CC: info@softbooktown.com";

$txt = "Hi User .Welcome to Soft Book Town " . "\r\n" .
"Enjoy Unlimited Course Book , Guide Book , Past Papers & Many More.." . "\r\n" . "\r\n" . "Regard : " . "\r\n" . "Team Soft Book Town ";
mail($uemail,$subject,$txt,$headers);
    

     echo "<script>alert('Register Successfully')</script>";	
     echo "<script>window.open('user_login.php','_self')</script>";
		}
		else
		{
			     echo "<script>alert('Register Un Successfully ')</script>";	
     echo "<script>window.open('user_register.php','_self')</script>";
		}

	}
	else{

     echo "<script>alert('Email Id Already Exist')</script>";	
     echo "<script>window.open('user_register.php','_self')</script>";	
	}
}
?>