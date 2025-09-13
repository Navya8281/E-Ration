<?php
include'../database.php';
if(isset($_POST['submit']))
{
	echo $rl_id=$_POST['rl_id'];
	echo $l_id=$_POST['l_id'];
	echo $fname=$_POST['f_name'];
  echo $lname=$_POST['l_name'];
	echo $address=$_POST['address'];
	echo $email=$_POST['email'];
    echo $phonenumber=$_POST['contactnumber'];
     $status="Booked";

 $m="UPDATE `land_details` SET `status`='Booked' WHERE rl_id=$rl_id";
 mysqli_query($con,$m);
    $q="INSERT INTO real_booking(rel_id,rerl_id,re_fname,re_lname,re_address,re_email,re_contactnumber,re_status)VALUES($l_id,$rl_id,'$fname','$lname','$address','$email','$phonenumber','$status')";
     var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
    	?>
    <SCRIPT LANGUAGE='JavaScript'>
        window.alert('Booked Succesfully')
        window.location.replace("realbook_details.php");
        </SCRIPT>
        <?php
    }
      }
?>