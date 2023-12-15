<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>


        <section class="main-slider">


            <iframe scrolling="no" frameborder="0" style="width:100%;height:400px" class="mbl-ban">
                <?php require('component/banner.php'); ?>
            </iframe>
        </section>


        <!--Home-box-->
        <section class="call-to-action home-one">
            <div class="container-fluid">
                <div class="clearfix">
                    <div class="call-to-action-corner col-md-4"
                        style="background-image: url(<?php echo base_url(); ?>assets/images/call-to-action/left-box-bg.jpg);">
                        <div class="single-call-to-action open-hours">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="flaticon-clock"></i>
                                </div>
                            </div>
                            <?php if(isset($hospitaldetails[0])){?>
                            <div class="content-box">
                                <span
                                    class="hd-1"><?php echo $hospitaldetails[0]['hospital_detail_description'] ?></span>
                                <!-- <h3>OPEN HOURS</h3>
                                <ul>
                                    <li>Mon - Sat : 9AM - 1PM & 3PM - 7PM</li>
                                    <li>Sunday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 9AM - 1PM</span></li>
                                </ul> -->
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="call-to-action-center col-md-4"
                        style="background-image: url(<?php echo base_url(); ?>assets/images/call-to-action/center-box-bg.jpg);">
                        <div class="single-call-to-action">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="flaticon-appointment-book"></i>
                                </div>
                            </div>
                            <?php if(isset($hospitaldetails[1])){?>
                            <div class="content-box">
                                <span
                                    class="hd-1"><?php echo $hospitaldetails[1]['hospital_detail_description'] ?></span>
                                <!-- <h3>Appointment</h3>
                                <p>Appointment are available, call us <br> today or book a appoinment</p>
                                <a href="#" class="thm-btn inverse">Book Now</a><br><br>
                                <p><b>04565- 235533 <br> 7339561353</b></p> -->
                                <a href="#" class="thm-btn inverse">Book Now</a><br><br>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="call-to-action-corner col-md-4"
                        style="background-image: url(<?php echo base_url(); ?>assets/images/call-to-action/right-box-bg.jpg);">
                        <div class="single-call-to-action">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="flaticon-speech-bubble"></i>
                                </div>
                            </div>
                            <?php if(isset($hospitaldetails[2])){?>
                            <div class="content-box">
                                <span
                                    class="hd-1"><?php echo $hospitaldetails[2]['hospital_detail_description'] ?></span>
                                <!-- <h3>CLINICAL SERVICES</h3>
                                <p>1. Cornea and Anterior Segment Services.<br>2. Refractive Laser Surgery & LASIK.<br>
                                    3. Ophthalmic Plastic & Facial Aesthetic Surgery</p> -->
                                <a href="<?php echo base_url(); ?>service" class="thm-btn inverse">Read More</a>

                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Welcome Section-->
        <section class="welcome-section">
            <div class="auto-container">
                <div class="welcome-content">
                    <!--Section Title-->

                    <?php if(isset($about[0])){?>
                    <div class="col-md-4 col-sm-4 col-xs-12"
                        style="background:#d7df23; margin-top:-130px; margin-bottom:30px;">



                        <!--<h2 style="font-size:18px; font-weight:700; color:#FFFFFF; margin-top:10px;">Welcome To <span-->
                        <!--        class="theme_color"> KAANAL an act for Seeing!</span></h2>-->
                        <span class="ab-1"><?php echo $about[0]['about_description'] ?></span>
                        <!-- <div class="text" style="color:#000000; text-align:justify; line-height:31px; font-size:16px;">
                            Kaanal is a public charitable trust founded by the noble hearts to
                            create health awareness and improve medical facilities in and
                            around Chettinad. The Trust is headed by Koviloor Aadhinam
                            Sri la Sri Meyyappa Gnanadesika Swamigal as Ex-officio Chairman.
                            Dr N. Krishnan, an eminent eye surgeon, </div> -->
                        <a href="<?php echo base_url(); ?>about"
                            style="background:#000000; padding:8px 10px; color:#FFFFFF; float:right; margin-top:-18px;">Read
                            More</a><br>

                    </div>
                    <?php } ?>


                    <?php if(isset($about[1])){?>
                    <div class="col-md-4 col-sm-4 col-xs-12"
                        style="background:#1482dd; margin-top:-130px; padding:15px 15px;">

                        <span class="ab-2"><?php echo $about[1]['about_description'] ?></span>
                        <!-- <p style="color:#FFFFFF; font-size:18px; line-height:41.5px;">
                            Financial contributions make it possible to set aside fifty percent of services for those
                            who cannot afford to pay. Your financial contribution towards KEH could be:
                        </p> -->

                        <a href="#"><img src="<?php echo base_url(); ?>assets/images/gvjh.gif" <!--
                                style="margin-left:15px;"></a>-->
                    </div>

                    <?php } ?>

                    <?php if(isset($about[2])){?>
                    <div class="col-md-4 col-sm-4 col-xs-12"
                        style="background:#d7df23; margin-top:-130px; margin-bottom:30px;">
                        <!--<h2 style="font-size:18px; font-weight:700; color:#FFFFFF; margin-top:10px;"><span-->
                        <!--        class="theme_color"> School Screening Schedules</span></h2>-->
                        <span class="ab-3"><?php echo $about[2]['about_description'] ?></span>
                        <!-- <div class="text" style="color:#000000; text-align:justify; line-height:31px; font-size:16px;">
                            1. 24/06/2019 - Azad matriculation school, kararkudi.<br>
                            2. 26/06/2019 & 27/06/2019 - SMS boys higher secondary school, karaikudi.<br>
                            3. 28/06/3019 - P.N chinnaya ambalam higher secondary school, karaikudi.</div> -->
                        <br>

                    </div>
                    <?php } ?>

                </div>

            </div>
        </section>

        <section class="welcome-section" style="">
            <div class="auto-container">
                <div class="welcome-content">
                    <!--Section Title-->
                    <h2 class="text-center" style="font-size:27px; font-weight:700;">View Our<span class="theme_color">
                            Videos</span></h2>
                    <?php

                    for($i=0;$i<sizeof($video);$i++)
                    { ?>
                    <div class="col-md-4 col-sm-4 col-xs-12" style="margin-left:-10px;">
                        <iframe width="100%" height="300" src="<?= $video[$i]['video_link']; ?>" frameborder="0"
                            allowfullscreen></iframe>
                    </div>

                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <iframe width="100%" height="300" src="http://www.kaanal.com/KannalViedo.mp4" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/i81vnd4w2Cs"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div> -->
                    <?php } ?>
                </div>

            </div>
        </section>

        <section class="fact-counter-wrapper sec-padding" style="clear:both;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php if(isset($profile[0])){?>
                        <span class="pr-1"><?php echo $profile[0]['profile_description'] ?></span>

                        <!-- <p style="color:#FFFFFF; line-height:36px; text-align:justify; font-size:14px;"> First surgery
                            is being performed at Kaanal's Koviloor Eye Hospital today the 16 th November 2017., With
                            all state of art machines of international standards ., Our sincere thanks from the bottom
                            of our heart to all for their noble gesture, that made this great moment possible. Pray the
                            service to the public improve many folds.</p> -->
                        <?php } ?>
                        <div class="link-box"><a href="<?php echo base_url(); ?>about"
                                class="theme-btn normal-link">Read Profile</a>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <?php if(isset($profile[1])){?>
                        <span class="pr-2"><?php echo $profile[1]['profile_description'] ?></span>
                        <!-- <p style="color:#FFFFFF; line-height:20px; text-align:justify; font-size:14px;">
                            Kaanal - Rotary Orange project - The main objective of this project is to establish Hybrid
                            Vision Centres (HVC) along with Mobile Vision Care Units (MVCU) and Advanced Mobile Vision
                            Care Unit (AMVCU) to render primary eye care services to the urban, semi urban and rural
                            communities.
                            KAANAL & Rotary Club joins hand in establising 8 Hybrid Vision Centers at</br>
                            1 Nattarasankottai
                            2 Devakottai- Ram Nagar
                            3 Puduvayal
                            4 Tirupathur
                            5 Valayapati
                            6 Pulankurichi
                            7 Kelasevalpatti
                            8 Aranthangi
                        </P> -->
                        <?php } ?>
                    </div>
                    <!--<div class="col-md-4" style="background:#FFFFFF; padding:10px 10px;">-->


                    <!-- <h3 style="color:#000; font-size:15px; text-align:center; font-weight:700;">The statistics of
                            today’s camp at Devakottai today Camp ended by 4.00pm</h3>
                        <p style="color:#000000; font-size:14px; text-align:center;">

                            Total OP:184;
                            Catract cases identified- 35;<br>
                            Fit for surgery- 16;
                            Glasses- 40; Reading glass sold- 5;
                            Medicines- 64;
                            Referred to KEH- 27
                            Cases for surgery <br>on 10/12/18 at Kaanal Trust’s Koviloor Eye Hospital
                            16 patients.
                        </p> -->

                    <!--</div>-->
                </div>
            </div>
        </section>

        <section class="welcome-section" style="margin-top:-35px;">
            <div class="container">
                <div class="row">
                    <?php
                 for($i=0;$i<sizeof($chart);$i++)
                { ?>
                    <div class="col-md-6">
                        <img src="<?php echo base_url(); ?><?= $chart[$i]['image_url']; ?>" style="width:100%;">
                    </div>

                    <?php } ?>
                </div>

            </div>
        </section>
        <!--start We Specialize section-->


        <!--<section class="welcome-section">-->
        <!--    <div class="auto-container">-->
        <!--        <div class="welcome-content">-->


        <!--            <div class="col-md-6 col-sm-6 col-xs-12"-->
        <!--                style="background:#d7df23; margin-top:-70px; padding:15px 15px;">-->
        <!--                <?php if(isset($event[0])){?>-->


        <!--                <h2 style="font-size:23px; font-weight:700; color:#FFFFFF; margin-top:-5px;"><?php echo $event[0]['event_title'] ?> <span-->
        <!--                        class="theme_color"> Events</span></h2>-->
        <!--                <img src="<?php echo base_url(); ?><?php echo $event[0]['image_url'] ?>" style="width:540px; height:300px;">-->
        <!--                <?php } ?>-->
        <!--                <a href="<?php echo base_url(); ?>news_events"-->
        <!--                    style="background:#000000; padding:10px 10px; color:#FFFFFF; float:right; margin-top:10px;">Read-->
        <!--                    More</a>-->
        <!--            </div>-->

        <!--            <div class="col-md-6 col-sm-6 col-xs-12"-->
        <!--                style="background:#1482dd; margin-top:-70px; padding:15px 15px;">-->
        <!--                <?php if(isset($event[1])){?>-->
        <!--                <h2 style="font-size:23px; font-weight:700; color:#FFFFFF; margin-top:-5px;"><?php echo $event[1]['event_title'] ?> <span-->
        <!--                        class="theme_color"> Events</span></h2>-->
        <!--                <img src="<?php echo base_url(); ?><?php echo $event[1]['image_url'] ?>" style="width:540px; height:300px;">-->
        <!--                <?php } ?>-->
        <!--                <a href="<?php echo base_url(); ?>news_events"-->
        <!--                    style="background:#000000; padding:10px 10px; color:#FFFFFF; float:right; margin-top:10px;">Read-->
        <!--                    More</a>-->
        <!--            </div>-->

        <!--        </div>-->
        <!--</section>-->
        <div class="clearfix"></div>
        <section class="team-style-one">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Team Member-->
                    <div class="text-center sec-title">
                        <h2>Our Great Team</h2>
                    </div>


                    <?php
                    for($i=0;$i<sizeof($team);$i++)
                    { ?>
                    <div class="member-style-one col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <figure class="image team-img"><img
                                        src="<?php echo base_url(); ?><?= $team[$i]['image_url']; ?>" alt="">
                                </figure>

                            </div>
                            <div class="lower-content">
                                <h3 class="text-center"><a href="dr_n_krishnan.html"><?= $team[$i]['name']; ?></a></h3>
                                <div class="designation"><?= $team[$i]['position']; ?><br>
                                    <?= $team[$i]['place']; ?>
                                </div>
                                <div class="designation" style="margin-top:25px;"><a
                                        href="<?php echo base_url(); ?>teamdetails/<?php echo $team[$i]['team_id']; ?>"
                                        style="background:#000000; padding:15px 15px; margin-top:50px;">Read Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                </div>
            </div>
        </section>

        <div class="row" style="background:#ffc60b; width:101%;">
            <div class="sec-title text-center">
                <h2 style="color:#FFFFFF; margin-top:15px;">Inaugration Function</h2>
                <div class="images-holder">
                    <img src="<?php echo base_url(); ?>assets/images/icons/icon.png" alt="Awesome Image">
                </div>
            </div>
            <section class="sponsors-style-one" style="margin-top:-65px;">
                <!--Sponsors SLider-->
                <marquee direction="left" scrollamount="4">
                    <?php
                 for($i=0;$i<sizeof($inaugration);$i++)
                { ?>
                    <img src="<?php echo base_url(); ?><?= $inaugration[$i]['image_url']; ?>"
                        style="width:200px; height:150px; margin-right:10px;" alt="">

                    <?php } ?>
                </marquee>
                <!--<p style="background:#FFFFFF; padding:10px 10px; float:right; margin-right:15px; font-weight:bold;"><a-->
                <!--        href="#">View More Images</a></p>-->
            </section>
        </div>



        <?php require('component/footer.php'); ?>
</body>

</html>