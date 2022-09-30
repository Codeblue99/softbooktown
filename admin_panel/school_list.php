<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        School List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">School</a></li>
        <li class="breadcrumb-item active">School List</li>
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
							<th>Id</th>
							<th>Logo</th>
              <th>SchoolName</th>
              <th>Email</th>
              <th>Password</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Longitude/Latitude</th>

              


              
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_schools order by school_id desc ";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$school_id=$rows['school_id'];
$school_name=$rows['school_name'];
$school_email=$rows['school_email'];
$school_pass=$rows['school_pass'];
$school_logo=$rows['school_logo'];
$school_phone=$rows['school_phone'];
$school_address=$rows['school_address'];
$school_latitude=$rows['school_latitude'];
$school_longitude=$rows['school_longitude'];

echo "

<tr>
							<td>$index </td>
              <td><center><img src='../schoolpanel_profile/$school_logo' style='height:50px;width:100px'></center></td>
              <td>$school_name</td>
              <td>$school_email</td>
              <td>$school_pass</td>
              <td>$school_phone</td>
              <td>$school_address</td>
              <td>$school_longitude , $school_latitude</td>
             
      
							
							<td><a href='?cdid=$school_id' class='btn btn-info'>Delete</a> 
							</td>
						
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

if(isset($_GET['cdid']))
{
	$catid=$_GET['cdid'];


  $fg_em="select * from tbl_schools where school_id='$catid'";
  $run_em=mysqli_query($con,$fg_em);
  $row_em=mysqli_fetch_array($run_em);
  $school_email=$row_em['school_email'];

	$del_cat="delete from tbl_schools where school_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

  $del_books="delete from tbl_books where school_email='$school_email'";
  $run_books=mysqli_query($con,$del_books);

    $del_notes="delete from tbl_notes where school_email='$school_email'";
  $run_notes=mysqli_query($con,$del_notes);

    $del_guest="delete from tbl_guestpaper where school_email='$school_email'";
  $run_guest=mysqli_query($con,$del_guest);

if($run_del)
{
	echo "<script>alert('School Successfully Deleted')</script>";
	echo "<script>window.open('school_list.php','_self')</script>";
}

else {
		echo "<script>alert('School Not Successfully Deleted')</script>";
	echo "<script>window.open('school_list.php','_self')</script>";
}

}


  ?>

