<?php include("header.php");?>

  <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Request</li>
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
                                <h3 class="ct_title">Request Us</h3>
                                <p>Feel Free To Request Some Thing New</p>
                            </div>
               
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Request</h3>
                            <form id="" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Book Store <span class="required">*</span></label>
                                           <select class="form-control" name="ubookstore">
                                               <option value="" hidden>Select Store</option>
                                                <?php
                                                $fg_store="select * from tbl_book_store";
                                                $run_store=mysqli_query($con,$fg_store);
                                                while($row_store=mysqli_fetch_array($run_store))
                                                {
                                                    $store_id=$row_store['store_id'];
                                                    $store_name=$row_store['store_name'];
                                                    echo "<option value='$store_id'>$store_name</option>";
                                                }

                                                ?>
                                           </select>
                                        </div>
                                    </div>
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
                                            <label>Detail</label>
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
    $ubookstore=$_POST['ubookstore'];

	$ins="INSERT INTO tbl_request(store_id,uname,uemail,uphone,umessage,msg_date) VALUES ('$ubookstore','$uname','$uemail','$uphone','$umessage',NOW())";
	$run_ins=mysqli_query($con,$ins);


$get_em="select * from tbl_book_store where store_id='$ubookstore'";
$run_em=mysqli_query($con,$get_em);
$row_em=mysqli_fetch_array($run_em);
$store_email['store_email'];



    $headers3= "Dear Book Store" . "\r\n" ."You Have Just New Product Request From Site Soft Book Town!" . "\r\n\r\n"  ."Please Chect Out The  Panel!"
  . "\r\n" ."Thanks Regard ," . "\r\n" . "SoftBookTown" ;
    //  mail($eml,"Order Placement Notification",$headers,$headers2);
 $from2 = "From: info@softbooktown.xyz" . "\r\n" .
"CC: info@softbooktown.xyz";
    
     mail($store_email,"Product Request Notification", $headers3, $from2);

	if($run_ins)
	{
      echo "<script>alert('Request Successfully Send')</script>";
       echo "<script>window.open('request.php','_self')</script>";
	}
	else{
      echo "<script>alert('Request Not Successfully Send')</script>";
       echo "<script>window.open('request.php','_self')</script>";
	}
}

 ?>