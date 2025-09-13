<?php
include 'ar_header.php';

?>

  
                    <div class="page-masthead__subtitle">Booking</div>
                    <div class="page-masthead__back_title">Booking Details</div>
                    <h1 class="page-masthead__title text-white">Booking Details</h1>
                  </div>
                </div>

               


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row x-gap-60">
              <div class="col-lg">
                <div class="shopCart-header sm:d-none">
                  <div class="row no-gutters justify-content-between">
                    <div class="col-md-4">
                      <div class="shopCart-header__title">
                        User Name
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
                        Message
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Accept
                      </div>
                    </div>
                  </div>
                </div>

                <div class="shopCart-products">
                  <?php
 $sql="SELECT *  FROM company_booking WHERE bcl_id=$c_id";
                    $result = $con->query($sql);
                               while($row= mysqli_fetch_array($result))
                                 {
                                  ?>
                
                   
                   
              

                  <div class="shopCart-products__item">
                    <div class="row no-gutters y-gap-10 justify-content-between">
                     

                      <div class="col-md-4">
                        <div class="shopCart-products__product">
                         <!--  <div class="image">
                            <div class="bg-image js-lazy" data-bg="../uploads/<?php echo  $c_file= $row['c_file']; ?>"></div>
                          </div> -->
                          <div class="title"><?php echo  $b_fname= $row['b_fname']; ?></div>
                        </div>
                      </div>

                      <div class="col-md-2 sm:mt-16">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            <?php echo  $b_date= $row['b_date']; ?>
                          </div>

                          <div class="shopCart-products__price text-grey">
                             <?php echo  $b_date=$row['b_date']; ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            
                          </div>

                          <div class="shopCart-products__quantity text-grey">
                            <?php echo  $b_status=$row['b_status']; ?>
                          </div>
                        </div>
                      </div>
                   

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                           
                          </div>

                          <div class="shopCart-products__subtotal text-grey">
                            <div class="shopCart-products__cross">
                              <?php
$dddd="Booked";
                               if($b_status==$dddd)
                               {
                                ?>
                       <a href="accrej.php?b_id=<?php echo $row['b_id']; ?>"> Click to Accept</a>
                     <?php  } 
                     else
                     {
                      ?>
                      <a href="viewreq.php?b_id=<?php echo $row['b_id']; ?>"> View requirements</a>
                      
                      <?php
                     }
                     ?>

                      </div>
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
include 'ar_footer.php';

?>