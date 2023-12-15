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

.fa-star {
    font-size: 50px;
    align-content: center;
}


/* Star Rating Styles */
.rating {
    font-size: 0; /* Remove whitespace between inline-block elements */
    display: inline-block;
}

.star {
    font-size: 24px;
    cursor: pointer;
    color: #ccc;
    transition: color 0.3s;
}

.star.active, .star:hover {
    color: #ffcc00;
}

.rating-value {
    margin-top: 10px;
    font-weight: bold;
}
.mt-3{
margin-top:3rem;
}
</style>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>



        <!--Gallery Section-->
        <section class="gallery-section three-column" style="margin-top:-50px;">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="text-center sec-title">
                        <h2>Add Your Reviews</h2>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12"></div>
                    <div class="col-md-8 col-sm-6 col-xs-12">

                        <form id="myForm">
                           <input class="form-control mb-2" id="fullname" name="fullname" 
                                placeholder="Enter Your Name" required/>
                            <h5 class="text-danger fullname"></h5>
                            <textarea class="form-control mt-3" id="addreview" name="addreview" rows="7"
                                placeholder="Write a your review" required></textarea>
                            <h5 class="text-danger addreview"></h5>
                            <!-- <i class="fa fa-star" aria-hidden="true" id="st1"></i>
                            <i class="fa fa-star" aria-hidden="true" id="st2"></i>
                            <i class="fa fa-star" aria-hidden="true" id="st3"></i>
                            <i class="fa fa-star" aria-hidden="true" id="st4"></i>
                            <i class="fa fa-star" aria-hidden="true" id="st5"></i> -->
                            <div class="rating mt-3">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                            <div class="rating-value">Selected Rating: <span id="selected-rating">0</span></div>
                            <h5 class="text-danger starreview"></h5>

                            <a id="submit" class="btn btn-success rbtn">Submit</a>
                            <a href="<?php echo base_url(); ?>review" class="btn btn-black rbtn">Back</a>
                        </form>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12"></div>


        </section>


        <?php require('component/footer.php'); ?>
        <script src="<?php echo base_url(); ?>assets/js/addreview.js"></script>
       
</body>

</html>