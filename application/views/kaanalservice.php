<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>
<style>

</style>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>


        <div class="sidebar-page-container" style="margin-top:-75px;">
    	<!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Sidebar-->      
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                        
                        <!--Sidebar Widget / Styled Nav-->
                        <div class="widget sidebar-widget downloads">
                            <nav class="nav-outer">
                                <ul>
                                <?php
                                    for($i=0;$i<sizeof($kaanalservices);$i++)
                                      { ?>
                                    <li><a class="show_tab" tab_id="custom-content_<?= $i ?>"><?= $kaanalservices[$i]['kaanalservicestitle']; ?></a></li>
									<!-- <li><a href="glaucoma.html">Glaucoma Service</a></li>
									<li><a href="corna.html">Cornea Service</a></li>
									<li><a href="msretina.html">Medical & Surgical Retina</a></li>
									<li><a href="squint.html">Squint Service</a></li> -->
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>

                        <iframe width="100%" height="200" style="margin-top:-18px;" src="https://www.youtube.com/embed/wlvaOTNXv5c" frameborder="0" allowfullscreen></iframe>
                        
                        
                    </aside>
                </div><!--End Sidebar-->
                
                <!--Content Side-->      
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <?php
                           for($i=0;$i<sizeof($kaanalservices);$i++)
                        { ?>
                           <div class="tabs" id="custom-content_<?= $i ?>">
                                    <section class="services-single">
                                                
                                        <!--Main Image-->
                                        <!-- <figure class="main-image"><img src="<?php echo base_url(); ?><?= $kaanalservices[$i]['image_url']; ?>" alt=" " style="height:200px;"></figure> -->
                                        
                                        <h2 class="service-title"><?= $kaanalservices[$i]['kaanalservicestitle']; ?></h2>
                                        <!--Default Text Block-->
                                        <div class="default-text-block kannalservice">
                                            <!-- <p style="color:#000000; margin-top:-15px; line-height:30px;"> -->
                                            <span class="kannalservice"></span>
                                            <?= $kaanalservices[$i]['kaanalservices']; ?>
                                        </div>
                                    
                                    </section>
                             </div>
                             <?php  } ?>
                
                </div><!--End Content Side-->   
                
                      
                
            </div>
        </div>
    </div>


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