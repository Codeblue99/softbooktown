<?php include("header.php");
if(isset($_GET['uemail']))
{
	$uemail=$_GET['uemail'];
	$fg_c="select * from tbl_schools where school_email='$uemail'";
	$run_c=mysqli_query($con,$fg_c);
	$row_c=mysqli_fetch_array($run_c);
	$verify_code=$row_c['verify_code'];
}
?>

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active">School Verify</li>
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
								<h4 class="login-title">Verify School Account</h4>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Enter your Verification Code here...</label>
										<input class="mb-0 form-control" type="text" id="name"
											placeholder="Enter you Name here..." name="ucode" required="required">
									</div>
									
									<div class="col-md-12">
										
										<input type="submit" name="uregitser" class="btn btn--primary" value="Verify Now">
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
	$ucode=$_POST['ucode'];

	if($verify_code == $ucode)
	{

		$subject = "Welcome Message";

$headers = "From: info@softbooktown.com" . "\r\n" .
"CC: info@softbooktown.com";

$txt = "Hi User .Welcome to Soft Book Town " . "\r\n" .
"Upload Your Course , Receive a Quotation & Many More Feature And Earn Unlimited Comission.." . "\r\n" . "\r\n" . "Regard : " . "\r\n" . "Team Soft Book Town ";
mail($uemail,$subject,$txt,$headers);


    $update="update tbl_schools set verify_status='Active' where school_email='$uemail'";
    $run_update=mysqli_query($con,$update);

    echo "<script>alert('Verify Successfully')</script>";	
     echo "<script>window.open('school_panel/school_login.php','_self')</script>";

	}
	else
	{
		     echo "<script>alert('Code Un Valid')</script>";	
     echo "<script>window.open('school_verify.php?uemail=$uemail','_self')</script>";
	}

	
}
?>