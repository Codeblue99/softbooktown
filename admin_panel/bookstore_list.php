<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Book Store List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Book Store</a></li>
        <li class="breadcrumb-item active">Book Store List</li>
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
              <th>StoreName</th>
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

$feth_user="select * from tbl_book_store order by store_id desc ";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$store_id=$rows['store_id'];
$store_name=$rows['store_name'];
$store_email=$rows['store_email'];
$store_pass=$rows['store_pass'];
$store_logo=$rows['store_logo'];
$store_phone=$rows['store_phone'];
$store_address=$rows['store_address'];
$store_latitude=$rows['store_latitude'];
$store_longitude=$rows['store_longitude'];

echo "

<tr>
							<td>$index </td>
              <td><center><img src='../bookstore_profile/$store_logo' style='height:50px;width:100px'></center></td>
              <td>$store_name</td>
              <td>$store_email</td>
              <td>$store_pass</td>
              <td>$store_phone</td>
              <td>$store_address</td>
              <td>$store_longitude , $store_latitude</td>
             
      
							
							<td><a href='?cdid=$store_id' class='btn btn-info'>Delete</a> 
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




  $del_books="delete from tbl_books where assign_bookstore_id='$catid'";
  $run_books=mysqli_query($con,$del_books);

    $del_notes="delete from tbl_notes where assign_bookstore_id='$catid'";
  $run_notes=mysqli_query($con,$del_notes);

    $del_guest="delete from tbl_guestpaper where assign_bookstore_id='$catid'";
  $run_guest=mysqli_query($con,$del_guest);

    $del_cat="delete from tbl_book_store where store_id='$catid'";
  $run_del=mysqli_query($con,$del_cat);


if($run_del)
{
	echo "<script>alert('Book Store Successfully Deleted')</script>";
	echo "<script>window.open('bookstore_list.php','_self')</script>";
}

else {
		echo "<script>alert('Book Store Not Successfully Deleted')</script>";
	echo "<script>window.open('bookstore_list.php','_self')</script>";
}

}


  ?>

