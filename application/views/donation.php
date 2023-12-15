<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>

<body>
<div class="page-wrapper">

<?php require('component/header.php'); ?>
    
    
<div class="sidebar-page-container" style="margin-top:-75px;">
    	<!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">
                
                 
                <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <section class="services-single">
                            	
                        <!--Main Image-->
                        
                        
                        <h2 class="service-title" style="background:#0d9344; width:100%; padding:10px 0px; text-align:center; color:#FFFFFF;">Donation</h2>
                        <!--Default Text Block-->
                        <div class="default-text-block">
                        <?php
                            for($i=0;$i<sizeof($donation);$i++)
                            { ?>
                            <span class="donation-1"><?= $donation[$i]['donation']; ?></span>

                            <!-- <p style="color:#000000; margin-top:-15px; line-height:30px;">
								If you are interested in making larger contributions towards KAANAL's infrastructure or in the areas of education or research or to pledge long-term support<br><br>

                                Please contact <br>

                                Dr. Krishnan	: +91 94440 37990.<br>
                                Pl.K. Palaniappan : +91 98947 44444.<br>
                                M. Renganathan	: +91 98410 48707.<br><br>

                                Currently Contributions can be made only from Indian Rupee Bank accounts.	
							</p> -->
							<?php }?>
                        </div>
						 
                       
                    </section>
                
                </div><!--End Content Side-->   
                
                      
                
            </div>
        </div>
    </div>
    
    <?php require('component/footer.php'); ?>

</body>

</html>