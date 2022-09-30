<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("../function/function.php");
    
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $uphone=$_POST['uphone'];
    $ucnic=$_POST['ucnic'];

  
   

            $ql="INSERT INTO tbl_rider(rider_name,rider_cnic,rider_email,rider_pass,rider_phone,reg_date) VALUES ('$uname','$ucnic','$uemail','$upass','$uphone',NOW())";
$run=mysqli_query($con,$ql);


    
    if($run)
    {
        echo "Register Successfully" ;
    }
    else {
        echo "Register Un Successfully";
    }
   
    
 
}

?>