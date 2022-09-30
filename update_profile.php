<?php include("header.php");
$uemail=$_SESSION['user_email'];
$fg_user="select * from tbl_user where user_email='$uemail'";
$run_user=mysqli_query($con,$fg_user);
$row_user=mysqli_fetch_array($run_user);
$user_name=$row_user['user_name'];
$user_pass=$row_user['user_pass'];
$user_phone=$row_user['user_phone'];

?>

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active">Update Profile</li>
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
								<h4 class="login-title">Update Profile</h4>
								
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Enter your Name here...</label>
										<input class="mb-0 form-control" type="text" id="name" autocomplete="nope"
											placeholder="Enter you Name here..." name="uname" required="required" value="<?php echo $user_name ?>">
									</div>
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here..." name="uemail" readonly autocomplete="nope" required="required" value="<?php echo $uemail ?>">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password" minlength="8" name="upass" value="<?php echo $user_pass ?>" required="required">
									</div>
									<div class="col-12 mb--20">
										<label for="">Phone No</label>
										<input class="mb-0 form-control" type="text" id="" placeholder="Enter your Number" name="unumber"   required="required" value="<?php echo $user_phone ?>" >
									</div>
									<div class="col-md-12">
									

										<input type="submit" name="uregitser" class="btn btn--primary" value="Update Now">
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
	$upass=$_POST['upass'];
	$unumber=$_POST['unumber'];


		$ins_user="update tbl_user set user_name='$uname',user_pass='$upass',user_phone='$unumber' where user_email='$uemail'";
		$run_ins=mysqli_query($con,$ins_user);

		if($run_ins)
		{

     echo "<script>alert('Update Successfully')</script>";	
     echo "<script>window.open('index.php','_self')</script>";
		}
		else
		{
			     echo "<script>alert('Update Un Successfully ')</script>";	
     echo "<script>window.open('update_profile.php','_self')</script>";
		}



	}
	
?>