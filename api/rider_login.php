<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
     include("../function/function.php");
    
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    
       
    $chl="select * from tbl_rider where rider_email='$uemail' AND rider_pass='$upass'";
   
    
    $run_chl=mysqli_query($con,$chl);
    $row_chl=mysqli_num_rows($run_chl);
 $json_array=array();
    if($row_chl !=0 )
    {
        
        $rn=mysqli_fetch_array($run_chl);

    $ft=$rn['reg_status'];
           
       if($ft =='Pending')
       {
           echo "Please Wait For Approval";
           
       }
       else
       {
           $json_array[]=$rn;
        echo json_encode($json_array) ;
      
       }
         
    
    
    }
    
    else {
        
        echo "Email & Password Does Not Match";
        
    }
    
 
}

?>