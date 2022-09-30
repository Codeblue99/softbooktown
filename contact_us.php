<?php include("header.php");?>

  <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Cart Page Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">
                
                <div class="row mt--60 ">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Contact Us</h3>
                                <p>Feel Free To Contact Us</p>
                            </div>
                            <div class="address_wrapper">
                                
                                <div class="address">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> 
support@softbooktown.com </p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone:</span> +92 332 3420241 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            <form id="" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" id="" name="uname" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input type="email" id="" name="uemail" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Phone*</label>
                                            <input type="text" id="" name="uphone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea id="" name="umessage"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="" class="btn btn-black"
                                                name="usubmit">send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php include("footer.php");?>
<?php
if(isset($_POST['usubmit']))
{
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$uphone=$_POST['uphone'];
	$umessage=$_POST['umessage'];

	$ins="INSERT INTO tbl_message(uname,uemail,uphone,umessage,msg_date) VALUES ('$uname','$uemail','$uphone','$umessage',NOW())";
	$run_ins=mysqli_query($con,$ins);

	if($run_ins)
	{
      echo "<script>alert('Message Successfully Send')</script>";
       echo "<script>window.open('contact_us.php','_self')</script>";
	}
	else{
      echo "<script>alert('Message Not Successfully Send')</script>";
       echo "<script>window.open('contact_us.php','_self')</script>";
	}
}

 ?>