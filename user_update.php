<?php
include('../database.php');
 $id=$_POST['id'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $phonenumber=$_POST['phonenumber'];
$status=$_POST['status'];


$sql="UPDATE `userregistration` SET `u_fname`='$fname',`u_lname`='$lname',`u_address`='$address',`u_email`='$email',`u_password`='$password',`u_phonenumber`='$phonenumber' WHERE ul_id=$id";
$result=mysqli_query($con,$sql);

 $sql1="UPDATE `login` SET `l_approve`='$status' WHERE l_id=$id";
$results=mysqli_query($con,$sql1);
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