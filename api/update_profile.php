<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("../function/function.php");
    
    $uname=$_POST['uname'];
   
    $upass=$_POST['upass'];
    $uphone=$_POST['uphone'];
    $ucnic=$_POST['ucnic'];
     $uid=$_POST['uid'];

  
   

            $ql="update tbl_rider set rider_name='$uname',rider_cnic='$ucnic',rider_pass='$upass',rider_phone='$uphone' where rider_id='$uid'";
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