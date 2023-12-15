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
                        
                        
                        <h2 class="service-title" style="background:#0d9344; width:100%; padding:10px 0px; text-align:center; color:#FFFFFF;">AN APPEAL!</h2>
                        <!--Default Text Block-->
                        <div class="default-text-block appeal-des">
                          <?php if(isset($appeal[0])){?>
                            <p style="color:#000000; margin-top:-15px; line-height:30px;" >
                               <?php echo $appeal[0]['appeal_description'] ?>	
							</p>
							<?php  } ?>
                        </div>
                        <?php if(isset($appeal[1])){?>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img src="<?php echo base_url(); ?><?php echo $appeal[1]['image_url'] ?>" style="width:100%;">
						</div> 
						<div class="col-md-6 col-sm-6 col-xs-12" style="color:#000000;">
                        <?php echo $appeal[1]['appeal_description'] ?>

                            <div class="link-box"><a href="<?php echo base_url(); ?>assets/donor_detail_KEH.pdf" target="_blank" class="theme-btn normal-link">Download Donation Form</a></div>
						</div> 
                       <?php  } ?>
                    </section>
                
                </div><!--End Content Side-->   
                
                      
                
            </div>
        </div>
    </div>
    
    <?php require('component/footer.php'); ?>

</body>

</html>