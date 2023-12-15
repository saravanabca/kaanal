<!DOCTYPE html>
<html>
<?php require('component/head.php'); ?>

<body>
<div class="page-wrapper">
 	
<?php require('component/header.php'); ?>
   
    <section class="home-serivce sec-padding">
      <div class="container">
        <div class="sec-title text-center">
          <h1>Trustees & Special Representatives</h1>
          <div class="images-holder">
              <img src="<?php echo base_url(); ?>assets/images/icons/icon.png" alt="Awesome Image">
          </div>
          <span class="decor"><span class="inner"></span></span>
        </div>
      </div>
    </section>
	
    <section class="team-style-one">
        <div class="auto-container">
            <div class="row clearfix">
                
            <?php
                 for($i=0;$i<sizeof($representatives);$i++)
                { ?>
                <div class="member-style-one col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box trust-img-s wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo base_url(); ?><?= $representatives[$i]['image_url']; ?>" style="height:270px;" alt=""></figure>
                            
                        </div>
                        <div class="lower-content">
                            <h3 style="text-align:center;"><?= $representatives[$i]['name']; ?> </h3>
                            <h3 style="text-align:center;"><?= $representatives[$i]['place']; ?> </h3>

                            <div class="designation"><?= $representatives[$i]['position']; ?></div>

                            <div class="designation"><a href="<?php echo base_url(); ?>aboutprofile/<?php echo $representatives[$i]['representatives_id']; ?>">Read Profile</a></div>
							
                        </div>
                    </div>
                </div>
                <?php } ?>

              
                
               


                
			</div>
			
		
        </div>
    </section>
    <?php require('component/footer.php'); ?>
</body>

</html>