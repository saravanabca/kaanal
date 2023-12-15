<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>
<style>

.wttdrop a {
    color: black;
} 


.dropdown-btn{
    display:block;
    background-color: #ffc60b;
    color: #000;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    margin-top:10px;
}
.dropdown-container{
    display:none;
    /* padding: 0 18px; */
    display: none;
    background-color: #c5c5c5;
    overflow: hidden;
    border-radius: 0px;
    /*height: 75px;*/
    border-top: 1px solid #000000;
}

.dropdown-container .wttdrop {
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    color: black;
    border-bottom: 1px solid #00000082;
    margin-top: 10px;
}
</style>

<body>
<div class="page-wrapper">

<?php require('component/header.php'); ?>
    
<div class="sidebar-page-container" style="margin-top:-75px;">
    	<!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">
            <?php require('component/wttcomon.php'); ?> 
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <section class="services-single">
                    <?php
                        for($i=0;$i<sizeof($communtityservices);$i++)
                        { ?>	
                        <!--Main Image-->
                        <figure class="main-image"><img src="<?php echo base_url(); ?><?= $communtityservices[$i]['image_url']; ?>" alt="" style="height:200px;"></figure>
                        <span class="communtityservice-1"> <?= $communtityservices[$i]['communtityservices']; ?></span>
                        <!-- <h2 class="service-title">Community Service</h2>
                      
                        <div class="default-text-block">
                            <p style="color:#000000; margin-top:-15px; line-height:30px;">
								Kaanal's Koviloor  Eye Hospital is offering Eye Care Education and Vision Screening for School children free of cost as a part of a Community Programme as well as a measure to control blindness among school children. The Hospital contacts the schools within 10 kilometre radius for easy accessibility to avail treatment and follow up services. It also screens schools far away on request.<br><br>
								A team of well trained paramedical staff from the hospital goes to the school premises and screens the entire school except KG children.This process identifies the children with visual problems as well as children with low vision or blindness.<br><br>

                                The hospital came across many children with low vision or blindness from the vision screening programmes and they are guided for better performance in their education. The teachers are advised to seek professional support from our hospital if they have difficulty in teaching any of the educational concepts for the special children.
							</p> -->

                            <?php } ?>

							<div class="col-md-3 col-sm-6 col-xs-12 default-portfolio-item">
								<div class="inner-box">
									<figure class="image-box"><img src="<?php echo base_url(); ?>assets/images/cs1.jpg" alt=""></figure>
									<!--Overlay Box-->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												
												<a href="<?php echo base_url(); ?>assets/images/cs1.jpg" class="option-btn lightbox-image" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
											</div>
										</div>
									</div>
								</div>
                			</div>
							<div class="col-md-3 col-sm-6 col-xs-12 default-portfolio-item">
								<div class="inner-box">
									<figure class="image-box"><img src="<?php echo base_url(); ?>assets/images/cs2.jpg" alt=""></figure>
									<!--Overlay Box-->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												
												<a href="<?php echo base_url(); ?>assets/images/cs2.jpg" class="option-btn lightbox-image" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
											</div>
										</div>
									</div>
								</div>
                			</div>
							<div class="col-md-3 col-sm-6 col-xs-12 default-portfolio-item">
								<div class="inner-box">
									<figure class="image-box"><img src="<?php echo base_url(); ?>assets/images/cs3.jpg" alt=""></figure>
									<!--Overlay Box-->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												
												<a href="<?php echo base_url(); ?>assets/images/cs3.jpg" class="option-btn lightbox-image" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
											</div>
										</div>
									</div>
								</div>
                			</div>
							<div class="col-md-3 col-sm-6 col-xs-12 default-portfolio-item">
								<div class="inner-box">
									<figure class="image-box"><img src="<?php echo base_url(); ?>assets/images/cs4.jpg" alt=""></figure>
									<!--Overlay Box-->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												
												<a href="<?php echo base_url(); ?>assets/images/cs4.jpg" class="option-btn lightbox-image" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
											</div>
										</div>
									</div>
								</div>
                			</div>
                        </div>
                       
                    </section>
                
                </div><!--End Content Side-->   
                
                      
                
            </div>
        </div>
    </div>
    
    <?php require('component/footer.php'); ?>

	<script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
        </script>


</body>

</html>