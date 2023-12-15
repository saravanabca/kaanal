<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>

<body>
<div class="page-wrapper">

<?php require('component/header.php'); ?>
    
    
     <!--Page Title-->
     <section class="page-title" style="background-image:url(<?php echo base_url(); ?>assets/images/background/page-title-12.jpg);">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h3>Contact Us</h3></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Contact Style One / Extended-->
    <section class="contact-style-one extended">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="column map-column col-md-8 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.242593789513!2d78.7424891147948!3d10.079197992796894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0060b25fc36741%3A0xf7c61a19b39a4159!2sKaanal+koviloor+eye+hospital!5e0!3m2!1sen!2sin!4v1509385340002" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                <div class="column contact-column col-md-4 col-sm-12 col-xs-12">
                	<h2>Contact Info</h2>
                    <ul class="contact-info">
                    <?php if(isset($contact[0])){?>
                    	<li><div class="icon-box"><span class="icon flaticon-placeholder"></span></div><?php echo $contact[0]['address'] ?></li>
                        <li><div class="icon-box"><span class="icon flaticon-envelope"></span></div><?php echo $contact[0] ['email']?></li>
                        <li><div class="icon-box"><span class="icon flaticon-phone-call"></span></div><?php echo $contact[0]['mobilenumber'] ?></li>
                <?php } ?>
                    </ul>
                </div>
                
                
            </div>
            <div class="form-column form-container">
                <div class="info-box">
                    
                    
                    <div class="default-form">
                        <form method="post" action="#" id="contact-form">
                            <div class="row clearfix">
                            	
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Your Name *" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Your Email *" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" placeholder="Your Phone *" required>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <input type="text" name="subject" value="" placeholder="Your Subject *">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">    
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Requirement" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one">send Message</button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </form>
                        
                    </div>
                
                </div>
            </div>
            
        </div>
    </section>
    
    
    <?php require('component/footer.php'); ?>

</body>

</html>