<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>
<style>
.news_event-d h1,
h2,
h3,
h4,
h5,
h6,
p {
    color: black;
}

/* Star Rating Styles */
.rating {
    font-size: 0;
    /* Remove whitespace between inline-block elements */
    display: inline-block;
    padding-left: 35%;
}

.star {
    font-size: 24px;
    cursor: pointer;
    color: #ccc;
    transition: color 0.3s;
}

.star.active {
    color: #ffcc00;
}

.rating-value {
    margin-top: 10px;
    font-weight: bold;
}
.mt-2{
    margin-top: 2rem;
}
</style>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>



        <!--Gallery Section-->
        <section class="gallery-section " style="margin-top:-50px;">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="text-center sec-title mt-2" id="reviwepage">
                        <h2 class="reviewtitle">Reviews</h2><a class="reviewbtn"
                            href="<?php echo base_url(); ?>addreview" style="color:black"><i class="fa fa-pencil"></i>
                            Write a review</a>
                    </div>


                    <?php
                    for($i=0;$i<sizeof($review);$i++)
                    { ?>

                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item reviewm">
                        <h2 class="text-center" style="color:black"><?= $review[$i]['reviewname']; ?></h2>
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="<?php echo base_url(); ?><?= $review[$i]['image_url']; ?>" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">

                                        <a href="<?php echo base_url(); ?><?= $review[$i]['image_url']; ?>"
                                            class="option-btn lightbox-image" title=""
                                            data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }?>




        </section>
        <div class="auto-container">
            <div class="row clearfix">
                <?php
                    for($i=0;$i<sizeof($addreview);$i++)
                    { ?>

                <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item reviewm">
                    <div class="cardd">
                        <h4 class="text-center"><?= $addreview[$i]['fullname']; ?></h4>
                        <p class="text-center mt-2" style="color:black"><?= $addreview[$i]['addreview']; ?></p>
                       
                        <div class="rating text-center ">
                            <?php
                            $numberOfStars = 5;
                            $activeStars = $addreview[$i]['starreview']; // Assuming this variable stores the count of active stars
                            // print_r($activeClass);
                            // exit;
                            for ($j = 1; $j <= $numberOfStars; $j++) {
                                $activeClass = ($j <= $activeStars) ? 'active' : '';
                                ?>
                               
                            <span class="star <?= $activeClass ?>" data-value="<?= $j ?>">&#9733;</span>
                          
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <?php }?>

            </div>
        </div>
        <?php require('component/footer.php'); ?>


</body>

</html>