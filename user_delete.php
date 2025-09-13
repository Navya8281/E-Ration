<?php
echo $id=$_GET['id'];
include('../database.php');
$sql="DELETE FROM `userregistration` WHERE ul_id=$id";
$result=mysqli_query($con,$sql);

if($result==1)
{
   // echo "success";
    header("location:userprofile.php");
}
else
{
 echo "failed";
}

?>