<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>

        <section class="parallax-style-one" style="background-image:url(<?php echo base_url(); ?>assets/images/background/image-2.jpg);">
            <div class="auto-container">
                <h2><span class="theme_color">Kaanal is a public charitable trust</span> founded by the noble hearts to
                    create health awareness and improve medical facilities in and
                    around Chettinad. </h2>
            </div>
        </section>

        <section class="welcome-section">
            <div class="auto-container">
                <div class="welcome-content">

                    <div class="col-md-12 col-sm-6 col-xs-12" style="margin-top:-100px;">
                        <div class="text" style="color:#000000;">
                        <?php if(isset($abouttrust[0])){?>
                            <p style="text-align:justify; line-height:27px;"><?php echo $abouttrust[0]['about_description'] ?></p>
                            
                        <?php } ?>

                        </div>
                    </div>




                </div>
        </section>

        <div class="clearfix"></div>
        <section class="welcome-section" style="margin-top:-170px;">
        <?php if(isset($abouttrust[1])){?>
            <div class="auto-container">
                <div class="welcome-content">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                    
                        <div class="text" style="color:#000000; text-align:justify; line-height:27px;"><?php echo $abouttrust[1]['about_description'] ?></div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="<?php echo base_url(); ?><?php echo $abouttrust[1]['image_url'] ?>" style="width:100%; height:350px;">
                </div>
           <?php } ?>

            </div>
        </section>

        <section class="welcome-section" style="margin-top:-170px;">
            <div class="auto-container">
            <?php if(isset($abouttrust[2])){?>
                <div class="welcome-content">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php echo base_url(); ?><?php echo $abouttrust[2]['image_url'] ?>" style="width:100%;">
                    </div>
                </div>

                <div class="col-md-9 col-sm-6 col-xs-12">
                    <div class="text" style="color:#000000; text-align:justify; line-height:27px;">
                    <?php echo $abouttrust[2]['about_description'] ?>

                    </div>

                </div>

            <?php } ?>

            </div>
        </section>
        <div class="clearfix"></div>

        <?php require('component/footer.php'); ?>
</body>

</html>