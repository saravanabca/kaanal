<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>
<style>
.news_event-d h1,h2,h3,h4,h5,h6,p{
    color:black;
}

</style>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>



        <!--Gallery Section-->
        <section class="gallery-section three-column" style="margin-top:-50px;">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar">

                            <!--Sidebar Widget / Styled Nav-->
                            <div class="widget sidebar-widget downloads">
                                <nav class="nav-outer">
                                    <ul>
                                        <?php
                                         for($i=0;$i<sizeof($newstitle);$i++)
                                      { ?>
                                        <li><a class="show_tab" tab_id="custom-content_<?= $i ?>" href="#topview"><?= $newstitle[$i]['newstitle']; ?></a>
                                        </li>

                                        <!-- <li><a href="smsv.html">SMSV Higher Secondary School Eye Camp</a></li>
                                        <li><a href="azad_camp.html">Azad Matriculation School Eye Camp</a></li>
                                        <li><a href="free_camp.html">Free EYE Camp</a></li>
                                        <li><a href="eye_camp.html">Koviloor EYE Camp</a></li>
                                        <li><a href="keh_inaguration.html">KEH Inaguration</a></li>
                                        <li><a href="nk_chettiar.html">Nalli Kuppuswamy Chettiar Visit</a></li>
                                        <li><a href="sp_muthuraman.html">SP. Muthuraman Visit</a></li>
                                        <li><a href="news_events.html">NNS Chennai Eye Camp</a></li>
                                        <li><a href="learning_session.html">Training Session</a></li>
                                        <li><a href="kmssesc.html">Koviloor Matriculation School Students Eye Screening
                                                Camp</a></li>
                                        <li><a href="kibsntc.html">Kaanal Infomartion Booth at Sigarathil Nagarathar
                                                Thanjavur Conference</a></li>
                                        <li><a href="spectacles.html">Koviloor Swamigal is distributing the free
                                                spectacles sponsored by IIT</a></li>
                                        <li><a href="interactive_session.html">Interactive Session</a></li>
                                        <li><a href="mrsubbiah_visit.html">Mr. Subbiah Visit</a></li>
                                        <li><a href="sivagangai.html">Sivagangai School Eye Screening</a></li>
                                        <li><a href="womp.html">Womb to Tomb</a></li>
                                        <li><a href="msretina.html">Retina Services</a></li>
                                        <li><a href="makkal.html">மக்கள் பாதை இயக்கம்</a></li> -->

                                        <?php }?>
                                    </ul>
                                </nav>
                            </div>
                            <iframe width="100%" height="200" style="margin-top:-18px;"
                                src="https://www.youtube.com/embed/wlvaOTNXv5c" frameborder="0"
                                allowfullscreen></iframe>


                        </aside>
                    </div>




                    <!-- news and events -->



                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" id="topview">
                        <?php
                           for($i=0;$i<sizeof($newsdescription);$i++)
                        { ?>
                        <div class="tabs" id="custom-content_<?= $i ?>">
                            <!--<h3 style="color:#000000; font-weight:700; margin-bottom:15px;">-->
                            <!--    <?= $newsdescription[$i]['newstitle']; ?></h3>-->


                            <p class="news_event-d" style="color:#000000;"><?= $newsdescription[$i]['newsdescription']; ?></p>

                           
                                       
                                       <?php

                                        for($j=0;$j<sizeof($newsimage);$j++)
                                        { 
                                         if($newsimage[$j]['newstitle_id'] == $newsdescription[$i]['newstitle_id'])
                                        {?>
                                       
                                        <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item">
                                            <!-- <div class="tabs" id="custom-contentt_<?= $j ?>"> -->
                                                <div class="inner-box">
                                                    <figure class="image-box"><img
                                                            src="<?php echo base_url(); ?><?= $newsimage[$j]['image_url']; ?>" alt="">
                                                    </figure>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">

                                                                <a href="<?php echo base_url(); ?><?= $newsimage[$j]['image_url']; ?>"
                                                                    class="option-btn lightbox-image" title="Image Caption Here"
                                                                    data-fancybox-group="example-gallery"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                        
                                    <?php } }?>





                        </div>

                        <?php }?>
                     

                        <!-- news and events -->


                    </div>

        </section>


        <?php require('component/footer.php'); ?>
        <script>
        $(document).ready(() => {
            $('.tabs').hide();
            $(`#custom-content_0`).show();
            // $(`#custom-contentt_0`).show();

        });
        $('.show_tab').on('click', function() {
            let tab_id = $(this).attr('tab_id'); // # getting the tab ID from he button attribute
            $('.tabs').hide(); // # To hide all the tabs
            $(`#${tab_id}`).show(); // # To display a single tab
        });
        </script>

</body>

</html>