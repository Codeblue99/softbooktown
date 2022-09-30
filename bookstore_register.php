<?php include("header.php");?>

<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active">Book Store Register</li>
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
						<form method="post" enctype="multipart/form-data">
							<div class="login-form">
								<h4 class="login-title">Register BookStore</h4>
								<p><span class="font-weight-bold">Register as a New BookStore</span></p>
								<div class="row">
									
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Enter your Book Store Name here...</label>
										<input class="mb-0 form-control" type="text" id=""
											placeholder="Enter you Book Store Name here..." name="ubookstorename" required="required" autocomplete="nope">
									</div>
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Upload Your Logo / Banner here...</label>
										<input class="mb-0 form-control" type="file" id=""
											 name="ulogo" required="required">
									</div>
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here..." name="uemail" autocomplete="nope"  required="required">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password" name="upass" minlength="8" required="required">
									</div>
									<div class="col-12 mb--20">
										<label for="">Phone No</label>
										<input class="mb-0 form-control" type="number" id="" placeholder="Enter your Number" name="unumber"  required="required">
									</div>
									<div class="col-12 mb--20">
										<label for="">Location / Address</label>
										<input class="mb-0 form-control" type="text" id="uaddress" placeholder="Enter your Bookstore Location" name="uaddress"   required="required">
									</div>
									<div class="col-6 mb--20">
										<label for="">Longitude</label>
										<input class="mb-0 form-control" type="text" id="ulongitude"  name="ulongitude" readonly="readonly"   required="required">
									</div>
									<div class="col-6 mb--20">
										<label for="">Latitude</label>
										<input class="mb-0 form-control" type="text" id="ulatitude"  name="ulatitude" readonly="readonly"   required="required">
									</div>
									<div class="col-md-12">
										<p>Login as a Customer ? <a href="user_login.php" style="color: #62AB00"> Login Now.</a>
										
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
<script type="text/javascript">
	$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById('uaddress')), {
        // types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
   
        var near_place = autocomplete.getPlace();
   
		
        document.getElementById('ulatitude').value = near_place.geometry.location.lat();
        document.getElementById('ulongitude').value = near_place.geometry.location.lng();
    });
});
</script>

<?php
if(isset($_POST['uregitser']))
{
	$ubookstorename=$_POST['ubookstorename'];

	$uemail=$_POST['uemail'];
	$upass=$_POST['upass'];
	$unumber=$_POST['unumber'];
	$uaddress=$_POST['uaddress'];
	$ulongitude=$_POST['ulongitude'];
	$ulatitude=$_POST['ulatitude'];

         $image_1=$_FILES['ulogo']['name'];
$image_tmp1=$_FILES['ulogo']['tmp_name'];

  move_uploaded_file($image_tmp1,"bookstore_profile/$image_1");

	$check_user="select * from tbl_book_store where store_email='$uemail' OR store_name='$ubookstorename'";
	$run_user=mysqli_query($con,$check_user);
	$row_user=mysqli_num_rows($run_user);
$verify_code=rand(999,9999);
	if($row_user == 0)
	{

		$ins_user="INSERT INTO tbl_book_store(store_name,store_email,store_pass,store_logo,store_phone,store_address,store_latitude,store_longitude,verify_code,reset_code,verify_status,join_date) VALUES ('$ubookstorename','$uemail','$upass','$image_1','$unumber','$uaddress','$ulatitude','$ulongitude','$verify_code','','Pending',NOW())";
		$run_ins=mysqli_query($con,$ins_user);

		if($run_ins)
		{



$subject = "Email Verification";

$headers = "From: info@softbooktown.com" . "\r\n" .
"CC: info@softbooktown.com";

$txt = "Hi User .Welcome to Soft Book Town " . "\r\n" .
"Here its your Email Verification Code Please Copy This Code and Verify Your Email via Website.." . "\r\n" . "Code  : $verify_code" . "\r\n" . "\r\n" ." Regard". "\r\n" ."Team Soft Book Town ";
mail($uemail,$subject,$txt,$headers);
    

     echo "<script>alert('Register Successfully')</script>";	
     echo "<script>window.open('bookstore_verify.php?uemail=$uemail','_self')</script>";
		}
		else
		{
			     echo "<script>alert('Register Un Successfully ')</script>";	
     echo "<script>window.open('bookstore_register.php','_self')</script>";
		}

	}
	else{

     echo "<script>alert('Email Or Book Store Name Already Exist')</script>";	
     echo "<script>window.open('bookstore_register.php','_self')</script>";	
	}
}
?>