<?php
include 'uheader.php';
?>

  


     


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row x-gap-60">
              <div class="col-lg">
                <div class="shopCart-header sm:d-none">
                  <div class="row no-gutters justify-content-between">
                    <div class="col-md-4">
                      <div class="shopCart-header__title">
                        Realestate Agent
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Date
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Status
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Cancel
                      </div>
                    </div>
                   

                <div class="shopCart-products">
                  <?php

                    $result = $con->query("SELECT real_estate_registration.rl_id,real_estate_registration.r_fname,real_booking.re_date,real_booking.re_status,real_estate_registration.r_file,real_booking.re_id  FROM real_booking INNER JOIN real_estate_registration ON real_booking.rerl_id=real_estate_registration.rl_id WHERE real_booking.rel_id=$l_id");
                               while($row= mysqli_fetch_array($result))
                                 {
                                  ?>
                
                   
                   
              

                  <div class="shopCart-products__item">
                    <div class="row no-gutters y-gap-10 justify-content-between">
                     

                      <div class="col-md-4">
                        <div class="shopCart-products__product">
                          <div class="image">
                            <div class="bg-image js-lazy" data-bg="../uploads/<?php echo  $r_file= $row['r_file']; ?>"></div>
                          </div>
                          <div class="title"><?php echo  $r_fname= $row['r_fname']; ?></div>
                        </div>
                      </div>

                      <div class="col-md-2 sm:mt-16">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            <?php echo  $re_date= $row['re_date']; ?>
                          </div>

                          <div class="shopCart-products__price text-grey">
                             <?php echo  $re_date=$row['re_date']; ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            
                          </div>

                          <div class="shopCart-products__quantity text-grey">




                            <?php 
  $re_status=$row['re_status'];

if($re_status=='Accepted')
{
 ?>
 <a href="enterdetails.php?re_id=<?php echo $row['re_id']; ?>">Accepted</a>
 <?php
}
else
{
  echo "Booked";
}



                             ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                           
                          </div>

                          <div class="shopCart-products__subtotal text-grey">
                            <div class="shopCart-products__cross">
                       <a href="deletereal_booking.php?re_id=<?php echo $row['re_id']; ?>"> <i class="icon" data-feather="x"></i></a>
                      </div>
                          </div>
                        </div>
                      </div>
                          <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                           
                          </div>

                         
                        </div>
                      </div>
                    </div>
                  </div>

                <?php   }
                                 ?>


                </div>

                
              </div>

              </div>
          </div>
        </section>

       <?php
include 'ufooter.php';

?>