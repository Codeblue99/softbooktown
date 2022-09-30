<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Stationary Order List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Stationary</a></li>
        <li class="breadcrumb-item active">Stationary List</li>
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
							<th>Item Name</th>
          
              <th>UserName</th>
              <th>Price</th>
              <th>Address</th>
              <th>Date</th>
              <th>Status</th>

              
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_order_detail where ptype='stationary' order by detail_id desc ";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$detail_id=$rows['detail_id'];
$order_id=$rows['order_id'];
$del_address1=$rows['del_address1'];
$pid=$rows['pid'];
$ptype=$rows['ptype'];
$order_qty=$rows['order_qty'];
$user_city=$rows['user_city'];
$total_bill=$rows['total_bill'];
$order_status=$rows['order_status'];
$order_date=$rows['order_date'];


$checks="select * from tbl_stationary where s_id='$pid'";
$run_checks=mysqli_query($con,$checks);


$fg_or="select * from tbl_orders where order_id='$order_id'";
$run_or=mysqli_query($con,$fg_or);
$row_or=mysqli_fetch_array($run_or);
$user_id=$row_or['user_id'];

$fg_user="select * from tbl_user where user_id='$user_id'";
$run_user=mysqli_query($con,$fg_user);
$row_user=mysqli_fetch_array($run_user);
$user_name=$row_user['user_name'];

$fg_checks=mysqli_fetch_array($run_checks);
$s_name=$fg_checks['s_name'];


echo "

<tr>
							<td>$index </td>
        
              <td>$s_name</td>
        
           
              <td>$user_name</td>
              <td>Rs $total_bill</td>
             <td>$del_address1</td>
             <td>$order_date</td>
             <td>$order_status</td>
      
						
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

