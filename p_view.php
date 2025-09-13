<?php
include 'uheader.php';
include('../database.php');
?>


      
              

          

                  <?php 
                  $result = $con->query("select * from land_details WHERE status='0'");
                               while($row= mysqli_fetch_array($result))
                                 {
                                 ?>
<?php echo $row['l_image'];?>" alt="Product image">


       
                        <b><i>TITLE:</i></b> <?php echo $row['l_title'];?> <br>
                        <b><i>DESCRIPTION:</i></b> <?php echo $row['l_description'];?><br>
                        <b><i>LAND PRICE:</i></b> <?php echo $row['l_landprice'];?> <br>
                        
                     
         <?php }
                   ?>

                

<?php
include 'ufooter.php';

?>
       