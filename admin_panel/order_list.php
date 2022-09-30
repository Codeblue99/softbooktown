<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Order</a></li>
        <li class="breadcrumb-item active">Order List</li>
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
              <th>Title</th>
              <th>Publisher</th>
              <th>Type</th>
              <th>School Name</th>
              <th>BookStoreName</th>
              <th>UserName</th>
              <th>Price</th>
              <th>Address</th>
              <th>Date</th>
              <th>Status</th>

              
            </tr>
          </thead>
          <tbody>

<?php 

$feth_user="select * from tbl_order_detail order by detail_id desc ";
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


$fg_or="select * from tbl_orders where order_id='$order_id'";
$run_or=mysqli_query($con,$fg_or);
$row_or=mysqli_fetch_array($run_or);
$user_id=$row_or['user_id'];

$fg_user="select * from tbl_user where user_id='$user_id'";
$run_user=mysqli_query($con,$fg_user);
$row_user=mysqli_fetch_array($run_user);
$user_name=$row_user['user_name'];



if($ptype=="book")
{

$fet_pro="select * from tbl_books where book_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price']; 
$subject=$row_pro['book_subject'];
$publisher=$row_pro['book_publisher'];  
$classid=$row_pro['class_id'];
$school_email=$row_pro['school_email'];
$assign_bookstore_id=$row_pro['assign_bookstore_id'];
}
if($ptype=="guest")
{
$ptype="Guess Paper";
$fet_pro="select * from tbl_guestpaper where guest_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price']; 
$subject=$row_pro['guestpaper_subject'];
$publisher=$row_pro['guestpaper_publisher'];
$classid=$row_pro['class_id'];
$school_email=$row_pro['school_email'];
$assign_bookstore_id=$row_pro['assign_bookstore_id'];
}
if($ptype=="note")
{

$fet_pro="select * from tbl_notes where note_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['sell_price']; 
$subject=$row_pro['note_subject'];
$publisher=$row_pro['note_publisher'];
$classid=$row_pro['class_id'];
$school_email=$row_pro['school_email'];
$assign_bookstore_id=$row_pro['assign_bookstore_id'];
}
$fg_class="select * from tbl_schools where school_email='$school_email'";
$run_class=mysqli_query($con,$fg_class);
$row_class=mysqli_fetch_array($run_class);
$school_name=$row_class['school_name'];


$fg_store="select * from tbl_book_store where store_id='$assign_bookstore_id'";
$run_store=mysqli_query($con,$fg_store);
$row_store=mysqli_fetch_array($run_store);
$store_name=$row_store['store_name'];



echo "

<tr>
    
        
              <td>$subject</td>
              <td>$publisher</td>
              <td>$ptype</td>
              <td>$school_name</td>
              <td>$store_name</td>
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

