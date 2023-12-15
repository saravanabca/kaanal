<!DOCTYPE html>
<html>
<?php require('component/head.php'); ?>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>


        <div class="sidebar-page-container" style="margin-top:-75px;">
            <div class="auto-container">
                <div class="row clearfix">
                <?php
                 for($i=0;$i<sizeof($teamdetails);$i++)
                { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <aside class="sidebar">
                            <div class="sidebar-title">
                                <h2><?= $teamdetails[$i]['name']; ?></h2>
                            </div>
                            <img src="<?php echo base_url(); ?><?= $teamdetails[$i]['image_url']; ?>" style="width:100%;">
                            <span class="about-address"><p><?= $teamdetails[$i]['address']; ?></p></span>
                            <!-- <p style="text-align:center; color:#000000; margin-top:10px;">
                                Director & Consultant<br>
                                Frontline Eye Hospital<br>
                                6/40, Sriram Nagar North st,<br>
                                Alwarpet, Chennai – 600018, <br>
                                TN, India<br>
                                Mob: 09444037990

                            </p> -->

                            <!--<h4 style="color:#fff; text-align:center; font-weight:700; background:#006600;">IBCN 2019 --->
                            <!--    STAR # 3 Dr. Krishnan, Ophthalmologist</h4>-->
                                            <!-- https://www.youtube.com/embed/IIltzY7PRtk -->
                            <iframe width="100%" height="200" src="<?= $teamdetails[$i]['videolink']; ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                        </aside>


                    </div>

                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <section class="news-section list-view blog-detail no-padd-bottom no-padd-top">

                            <div class="news-style-one">
                                <div class="inner-box">


                                <span class="profiledes"><?= $teamdetails[$i]['profile_description']; ?></span>
                                  

                                </div>
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