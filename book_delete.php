<?php
 $re_id=$_GET['re_id'];
include('../database.php');
$sql="DELETE FROM `real_booking` WHERE re_id=$re_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:realbook_details.php");
}
else
{
 echo "failed";
}

?>