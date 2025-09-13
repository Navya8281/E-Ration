<?php
 $rb_id=$_GET['rb_id'];
  $status=$_GET['status'];
include('../database.php');
$def="Approved";
if($def == $status)
{
//$sql="DELETE FROM `company_booking` WHERE b_id=$b_id";
$sql="UPDATE `requirement` SET `status`='Not Approved' WHERE rb_id=$rb_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:viewplan.php");
}
else
{
 echo "failed";
}
}
else
{
//$sql="DELETE FROM `company_booking` WHERE b_id=$b_id";
$sql="UPDATE `requirement` SET `status`='Approved' WHERE rb_id=$rb_id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:viewplan.php");
}
else
{
 echo "failed";
}
}
?>