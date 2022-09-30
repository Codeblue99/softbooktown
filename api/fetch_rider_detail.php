<?php
  include("../function/function.php");
  $uid=$_POST['uid'];
    
        $chl="select * from tbl_rider where rider_id='$uid'";  
          
    
    
    $run_chl=mysqli_query($con,$chl);
    while($row=mysqli_fetch_assoc($run_chl))
{
    $json_array[]=$row;
}

echo json_encode($json_array);
 
      
    
    
    

?>