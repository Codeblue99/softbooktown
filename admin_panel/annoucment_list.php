<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Announcment List <a href="add_annoucment.php" class="btn btn-info">Add Announcment</a>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Annoucment</a></li>
        <li class="breadcrumb-item active">Annoucment List</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="box box-solid bg-white">
            <div class="box-header with-border">
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
          <thead>
            <tr>
              <!--<th>Id</th>-->
              <th style="width:200px !important">Image</th>
              <th>Text</th>
              <th style="width:100px !important">Date</th>

              <th style="width:100px !important">Action</th>

              
            </tr>
          </thead>
          <tbody>

<?php 

$feth_user="select * from tbl_annoucment order by a_id desc ";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$a_id=$rows['a_id'];
$a_image=$rows['a_image'];
$a_text=$rows['a_text'];
$a_date=$rows['a_date'];

echo "

<tr>
    
        
              <td><img src='annoucment_img/$a_image' style='height:120px;width:120px'></td>
              <td>$a_text</td>
              <td>$a_date</td>
             
              <td><a href='?rid=$a_id' class='btn btn-danger'>Delete</td>
            
             
            </tr>

";

$index=$index + 1;


}

?>


            
            
          </tbody>          
          
        </table>
        </div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
         
       
      
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>
  <?php

if(isset($_GET['rid']))
{
  $catid=$_GET['rid'];




    $del_guest="delete from tbl_annoucment where a_id='$catid'";
  $run_guest=mysqli_query($con,$del_guest);

if($run_guest)
{
  echo "<script>alert('Annoucment Successfully Approved')</script>";
  echo "<script>window.open('annoucment_list.php','_self')</script>";
}

else {
    echo "<script>alert('Annoucment Not Successfully Approved')</script>";
  echo "<script>window.open('annoucment_list.php','_self')</script>";
}

}


  ?>

