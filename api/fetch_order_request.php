
<?php
  include("../function/function.php");

    
        $chl="SELECT * FROM `tbl_orders` ord ,tbl_user us WHERE ord.user_id=us.user_id AND ord.order_status='Pending'";  
          
    
    
    $run_chl=mysqli_query($con,$chl);
    while($row=mysqli_fetch_assoc($run_chl))
{
    $json_array[]=$row;
}

echo json_encode($json_array);
 
      
    
    
    

?>