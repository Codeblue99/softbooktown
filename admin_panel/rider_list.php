<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rider List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Rider</a></li>
        <li class="breadcrumb-item active">Rider List</li>
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
              <th>Full Name</th>
              <th>CNIC</th>
              <th>Email</th>

              <th>Phone Number</th>
            
              <th>Status</th>

              
            </tr>
          </thead>
          <tbody>

<?php 

$feth_user="select * from tbl_rider order by rider_id desc ";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$rider_id=$rows['rider_id'];
$rider_name=$rows['rider_name'];
$rider_cnic=$rows['rider_cnic'];
$rider_email=$rows['rider_email'];
$rider_phone=$rows['rider_phone'];
$reg_status=$rows['reg_status'];




echo "

<tr>
    
        
              <td>$rider_name</td>
              <td>$rider_cnic</td>
              <td>$rider_email</td>
              <td>$rider_phone</td>";
              
              if($reg_status == 'Pending')
              {
                 echo " <td><a href='?rid=$rider_id' class='btn btn-success'>Click To Approved</td>"; 
              }
              else
              {
                  echo "<td>Approved</td>";
                  
              }
            
           
      
           echo " 
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




    $del_guest="update tbl_rider set reg_status='Complete' where rider_id='$catid'";
  $run_guest=mysqli_query($con,$del_guest);

if($run_guest)
{
  echo "<script>alert('Rider Successfully Approved')</script>";
  echo "<script>window.open('rider_list.php','_self')</script>";
}

else {
    echo "<script>alert('Rider Not Successfully Approved')</script>";
  echo "<script>window.open('rider_list.php','_self')</script>";
}

}


  ?>

