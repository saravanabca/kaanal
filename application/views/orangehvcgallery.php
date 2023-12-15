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
               
               <?php if(isset($orangehvcgallery[0])){?>
               
                    <h2 class="service-title"
                        style="background:#0d9344; width:100%; padding:10px 0px; text-align:center; color:#FFFFFF;">
                        <?= $orangehvcgallery[0]['orangehvc_title']; ?> &nbsp;Gallery </a></h2>
                    <br>
                    <?php } ?>

                 
                    <section class="team-style-one">
                        <div class="auto-container">
                            <div class="row clearfix">

                                 <?php
                                for($i=0;$i<sizeof($orangehvcgallery);$i++)
                                { ?>
                                
                                
                              
                                
                                
                                
                                
                                
                                 <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item">
                                            <!-- <div class="tabs" id="custom-contentt_<?= $j ?>"> -->
                                                <div class="inner-box">
                                                    <figure class="image-box"><img style="aspect-ratio: 2/1;" src="<?php echo base_url(); ?><?= $orangehvcgallery[$i]['image_url']; ?>" alt="">
                                                    </figure>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">

                                                                <a href="<?php echo base_url(); ?><?= $orangehvcgallery[$i]['image_url']; ?>"
                                                                    class="option-btn lightbox-image" title="Image Caption Here"
                                                                    data-fancybox-group="example-gallery"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                              
                                <?php } ?>
                            </div>
                        </div>
                    </section>

                  
                </div>
            </div>
        </div>

        <?php require('component/footer.php'); ?>

</body>

</html>