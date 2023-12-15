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
                            <?php
                                         for($i=0;$i<sizeof($rehabilitation);$i++)
                                      { ?>

                            <!-- <h2 class="service-title">Rehabilitation</h2> -->
                            <!--Default Text Block-->
                            <div class="default-text-block">
                                <span class="rehabilitationdes">
                                     <?= $rehabilitation[$i]['rehabilitation_description']; ?>
                                </span>
                                <!-- <p style="color:#000000; margin-top:-15px; line-height:30px;">
                                    Headed by a consultant in Vision Rehabilitation - excels in identifying,assessing
                                    and rehabilitating children and adults with visual impairment and additional
                                    disabilities.<br><br>

                                    <b>Evaluation:</b> Low vision evaluation & Functional vision assessment <br><br>

                                    <b>Management:</b> Prescription of Low vision devices, Early Intervention through
                                    Vision Stimulation activities,Training in visual skills,Special skill training,
                                    Inclusion in Regular schools,Remedial teaching,Training in visual cognition for
                                    children with multiple disabilities. <br><br>

                                    The hospital extends its vision rehabilitation services to other Institutions
                                    dealing with special children.Eye camps for the special children are also conducted
                                    in their premises on a regular basis and the children are treated free of cost.
                                </p> -->
                            </div>

                          

                            <?php }?>

                            <section class="gallery-section three-column" style="margin-top:-120px;">
                                <div class="auto-container">
                                    <div class="row clearfix">
                                        <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                                <?php
                                                    for($i=0;$i<sizeof($rehabilitationimage);$i++)
                                                { ?>
                                          
                                            <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="<?php echo base_url(); ?><?=$rehabilitationimage[$i]['image_url']; ?>" alt="">
                                                    </figure>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">

                                                                <a href="<?php echo base_url(); ?><?= $rehabilitationimage[$i]['image_url']; ?>"
                                                                    class="option-btn lightbox-image"
                                                                    title="Image Caption Here"
                                                                    data-fancybox-group="example-gallery"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <?php }?>
                                          
                                        </div>



                                    </div>
                                    <div class="row clearfix">





                                    </div>
                            </section>

                        </section>

                    </div>
                    <!--End Content Side-->



                </div>
            </div>
        </div>


        <?php require('component/footer.php'); ?>
</body>

</html>