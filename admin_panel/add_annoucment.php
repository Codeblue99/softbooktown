<?php include("header.php");

?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Announcment <a href="annoucment_list.php" class="btn btn-info">View Announcments</a>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Annoucment</a></li>
        <li class="breadcrumb-item active"> Add Annoucment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box bg-hexagons-dark">
      
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype= "multipart/form-data">
			<div class="row">

              <div class="col-md-9 col-xl-9 col-12">
                <div class="form-group">
                  <label>Annoucment Detail </label>
            <input type="text" class="form-control" name="a_detail" required="required">
                 
                 
                </div>
              </div>
              
              <div class="col-md-3 col-xl-3">
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="uimage" required="required">
                </div>
              </div>
             
              
 


               <div class="col-md-12 col-xl-12">
                <div class="form-group">
              <center>
                  <input type="submit" class="btn btn-info" name="cat_sub">
                </center>
                </div>
              </div>


               
			
        </div>
      </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>

  <?php

if(isset($_POST['cat_sub']))
{

   $a_detail=mysqli_real_escape_string($con,$_POST['a_detail']);

   $image_1=$_FILES['uimage']['name'];
$image_tmp1=$_FILES['uimage']['tmp_name'];  
move_uploaded_file($image_tmp1,"annoucment_img/$image_1");

   
  $ins_cat="INSERT INTO tbl_annoucment(a_image,a_text,a_date) VALUES ('$image_1','$a_detail',NOW())";
  $run_cat=mysqli_query($con,$ins_cat);
  
if($run_cat)
{
   echo "<script>alert('Annoucment Successfully Added')</script>";
    echo "<script>window.open('add_annoucment.php','_self')</script>";
}

else {
   echo "<script>alert('Annoucment Not Successfully Added')</script>";
    echo "<script>window.open('add_annoucment.php','_self')</script>";
}


}

  ?>