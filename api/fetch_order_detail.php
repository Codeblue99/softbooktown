<?php
  include("../function/function.php");
  $uid=$_POST['oid'];
    
        $chl="select del_address1,order_qty,product_name,bookstore_name,bookstore_address,bookstore_latitude,bookstore_longitude,user_latitude,user_longitude from tbl_order_detail where order_id='$uid'";  
          
    
    
    $run_chl=mysqli_query($con,$chl);
    while($row=mysqli_fetch_assoc($run_chl))
{
    $json_array[]=$row;
}

echo json_encode($json_array);
 
      
    
    
    

?>