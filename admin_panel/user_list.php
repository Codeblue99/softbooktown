<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">User</a></li>
        <li class="breadcrumb-item active">User List</li>
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
							<th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Phone</th>
              <th>JoinDate</th>

              


              
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_user order by user_id desc ";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$user_id=$rows['user_id'];
$user_name=$rows['user_name'];
$user_email=$rows['user_email'];
$user_pass=$rows['user_pass'];
$user_phone=$rows['user_phone'];
$user_date=$rows['user_date'];

echo "

<tr>
							<td>$index </td>
              <td>$user_name</td>
              <td>$user_email</td>
              <td>$user_pass</td>
              <td>$user_phone</td>
              <td>$user_date</td>
             
      
							
							<td><a href='?cdid=$user_id' class='btn btn-info'>Delete</a> 
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


	$del_cat="delete from tbl_user where user_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);


if($run_del)
{
	echo "<script>alert('User Successfully Deleted')</script>";
	echo "<script>window.open('user_list.php','_self')</script>";
}

else {
		echo "<script>alert('User Not Successfully Deleted')</script>";
	echo "<script>window.open('user_list.php','_self')</script>";
}

}


  ?>

