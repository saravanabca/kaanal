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
                
                 <h2 class="service-title" style="background:#0d9344; width:100%; padding:10px 0px; text-align:center; color:#FFFFFF;">Our Partners</h2>
                 <?php
                            for($i=0;$i<sizeof($partners);$i++)
                            { ?>
                <div class="content-side col-lg-5 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <section class="services-single">
                        
                        <div class="default-text-block">
                            <p style="color:#000000; margin-top:10px; line-height:30px;">
								<img src="<?php echo base_url(); ?><?= $partners[$i]['image_url']; ?>" style="border:5px solid #009933; width:100%;">
							</p>
							
                        </div>
						 
                       
                    </section>
                
                </div>
				
				<div class="content-side col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <section class="services-single">
                        <div class="default-text-block">
                            <span class="partners-1"><?= $partners[$i]['partners_description']; ?></span>

                            <!-- <p style="color:#000000; margin-top:10px; line-height:37px; line-height:36px; font-weight:700;">
								MAC/ACM Trust and Foundation Kaanal Collaborate with their trust at primary level as far as eye care, Education (Awarness Creations) & vision rehabilitation. This will be covering 100 villages (13 Blocks) around chettinad
							</p> -->
							
                        </div>
						 
                       
                    </section>
                
                </div>
                      <?php } ?>
                
            </div>
        </div>
    </div>
    
    <?php require('component/footer.php'); ?>

</body>

</html>