<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("../function/function.php");
    
    $rid=$_POST['rid'];
    $oid=$_POST['oid'];
    
  
   

            $ql="update tbl_orders set assign_rider_id='$rid',assign_date=NOW() WHERE order_id='$oid'";
$run=mysqli_query($con,$ql);


    
    if($run)
    {
        echo "Update Successfully" ;
    }
    else {
        echo "Update Un Successfully";
    }
   
    
 
}

?>