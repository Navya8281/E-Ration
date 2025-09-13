<?php
include 'uheader.php';

?>

                    <span class="sectionHeading__subtitle">USER DETAILS</span>
                    <h2 class="sectionHeading__title">USER DETAILS</h2>
                  </div>
                   
                      <?php 
                  $result = $con->query("select * from user WHERE ul_id='$l_id'");
                               while($row= mysqli_fetch_array($result))
                                 {
                                 ?>
<?php echo $row['u_fname'];
                          echo $row['u_lname'];
                           echo $row['u_address'];
                          echo $row['u_email'];
                          echo $row['u_password'];
                          echo $row['u_phonenumber'];
                          echo $row['u_id'];
                          ?>
                          

 <?php
include 'ufooter.php';
?>