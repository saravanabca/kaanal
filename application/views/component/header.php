 <!-- Preloader -->
 <div class="preloader"></div>

 <!-- Main Header-->
 <header class="main-header">
     <!-- Header Top -->
     <div class="header-top">
         <div class="auto-container clearfix">
             <!--Top Left-->
             <?php if(isset($contact[0])){?>
             <div class="top-left pull-left">
                 <ul class="links-nav clearfix">
                     <li><a href="#"><span class="fa fa-phone"></span> Call Us :
                             <?php echo $contact[0]['mobilenumber'] ?></a></li>
                     <li><a href="#"><span class="fa fa-envelope-o"></span> Email Us
                             :<?php echo $contact[0]['email'] ?></a></li>
                 </ul>
             </div>

             <!--Top Right-->
             <div class="top-right pull-right">
                 <div class="social-links clearfix">
                     <a href="https://facebook.com/kehkaanal/" target="blank"><span class="fa fa-facebook-f"></span></a>
                     <a href="#"><span class="fa fa-google-plus"></span></a>
                     <a href="#"><span class="fa fa-twitter"></span></a>
                     <a href="#"><span class="fa fa-linkedin"></span></a>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header Top End -->

     <!--Header-Upper-->
     <div class="header-upper">
         <div class="auto-container">
             <div class="clearfix">

                 <div class="col-md-5 col-sm-6 col-xs-12">
                     <div class="logo pull-left">
                         <a href="<?php echo base_url(); ?>" class="img-responsive"><img
                                 src="<?php echo base_url(); ?>assets/images/logo.png" style="width:100%; height:100px;"
                                 alt="Transpo" title="Transpo"></a>
                     </div>
                 </div>
                 <div class="col-md-7 col-sm-6 col-xs-12">
                     <div class="upper-column info-box">
                         <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                         <ul>
                             <li><strong>Our Location</strong></li>
                             <li><?php echo $contact[0]['address'] ?></li>
                         </ul>
                     </div>
                     <?php } ?>
                     <!--Info Box-->
                     <div class="upper-column info-box">
                         <?php if(isset($hospitaldetails[0])){?>
                         <ul>
                             <!--<li><strong>working hours</strong></li>-->
                             <li><?php echo $hospitaldetails[0]['hospital_detail_description'] ?></li>
                             <!--<li>Mon - Sat : 9:00 AM - 1:00 PM <br>-->
                             <!--    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                             <!--    3:00 PM - 7:00 PM</li>-->
                             <!--<li>Sunday &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; 9:00 AM - 1:00 PM</li>-->
                         </ul>
                         <?php } ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!--Header-Lower-->
     <div class="header-lower">

         <div class="auto-container">
             <div class="nav-outer clearfix">
                 <!-- Main Menu -->
                 <nav class="main-menu">
                     <div class="navbar-header">
                         <!-- Toggle Button -->
                         <button type="button" class="navbar-toggle" data-toggle="collapse"
                             data-target=".navbar-collapse">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span> </button>
                     </div>

                     <div class="navbar-collapse collapse clearfix">
                         <ul class="navigation clearfix">
                             <li class="<?php if($this->router->fetch_method() == 'index') echo "current";?>"><a
                                     href="<?php echo base_url(); ?>">Home</a></li>
                             <li
                                 class="dropdown <?php if($this->router->fetch_method() == 'about' && 'trustboard') echo "current";?>">
                                 <a href="">About Us</a>
                                 <ul>
                                     <li><a href="<?php echo base_url(); ?>about">About Trust</a></li>
                                     <li><a href="<?php echo base_url(); ?>trustboard">Trustees & Special
                                             Representatives</a></li>
                                 </ul>
                             </li>
                             <li><a href="<?php echo base_url(); ?>service">Services</a></li>
                             <li><a href="<?php echo base_url(); ?>review/#reviwepage">Review</a></li>
                             <li class="dropdown"><a href="">KAANAL ORANGE HVC</a>
                                 <ul class="dropdown">
                                     <?php
                                        for($i=0;$i<sizeof($orangehvc);$i++)
                                        { ?>
                                     <li><a
                                             href="<?php echo base_url(); ?>orangehvc/<?php echo $orangehvc[$i]['orangehvc_id']; ?>">
                                             <?= $orangehvc[$i]['orangehvc_title']; ?>
                                         </a></li>
                                    
                                     <?php } ?>
                                 </ul>
                             </li>
                             <li><a href="<?php echo base_url(); ?>communtityservices">Community Service</a></li>
                             <li class="<?php if($this->router->fetch_method() == 'rehabilitation') echo "current";?>">
                                 <a href="<?php echo base_url(); ?>rehabilitation">Rehabilitation</a></li>
                             <li class="dropdown"><a href="<?php echo base_url(); ?>donation">Appeal & Donate</a>
                                 <ul>
                                     <li><a href="<?php echo base_url(); ?>appeal">Appeal</a></li>
                                     <li><a href="<?php echo base_url(); ?>donation">Donations</a></li>
                                 </ul>
                             </li>
                             <li
                                 class="dropdown <?php if($this->router->fetch_method() == 'news_events' && 'partners' && 'contact') echo "current";?>">
                                 <a href="<?php echo base_url(); ?>donation">More</a>
                                 <ul>
                                     <li><a href="<?php echo base_url(); ?>news_events">News & Events</a></li>
                                     <li><a href="<?php echo base_url(); ?>partners">Partners</a></li>
                                     <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </nav><!-- Main Menu End-->
             </div>
         </div>
     </div>


     <!--Sticky Header-->
     <div class="sticky-header">
         <div class="auto-container clearfix">
             <div class="logo pull-left">
                 <a href="<?php echo base_url(); ?>" class="img-responsive"><img
                         src="<?php echo base_url(); ?>assets/images/logo1.png" style="width:100px; height:50px;"
                         alt="Transpo" title="Transpo"></a>
             </div>
             <div class="right-col pull-right">
                 <!-- Main Menu -->
                 <nav class="main-menu">
                     <div class="navbar-header">
                         <!-- Toggle Button -->
                         <button type="button" class="navbar-toggle" data-toggle="collapse"
                             data-target=".navbar-collapse">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                     </div>

                     <div class="navbar-collapse collapse clearfix">
                         <ul class="navigation clearfix">
                             <!-- <li class="current"><a href="<?php echo base_url(); ?>">Home</a></li>
                             <li class="dropdown"><a href="about.html">About Us</a>
                                 <ul>
                                     <li><a href="<?php echo base_url(); ?>about">About Trust</a></li>
                                     <li><a href="trust_board.html">Trustees & Special Representatives</a></li>
                                 </ul>
                             </li>
                             <li><a href="services.html">Services</a></li>
                             <li><a href="c_services.html">Community Service</a></li>
                             <li><a href="rehabilitation.html">Rehabilitation</a></li>
                             <li class="dropdown"><a href="#">Appeal & Donate</a>
                                 <ul>
                                     <li><a href="appeal.html">Appeal</a></li>
                                     <li><a href="donation.html">Donations</a></li>
                                 </ul>
                             </li>
                             <li><a href="news_events.html">News & Events</a></li>
                             <li><a href="<?php echo base_url(); ?>partners">Partners</a></li>
                             <li><a href="contact.html">Contact Us</a></li> -->

                             <li class="current"><a href="<?php echo base_url(); ?>">Home</a></li>
                             <li class="dropdown"><a href="">About Us</a>
                                 <ul>
                                     <li><a href="<?php echo base_url(); ?>about">About Trust</a></li>
                                     <li><a href="<?php echo base_url(); ?>trustboard">Trustees & Special
                                             Representatives</a></li>
                                 </ul>
                             </li>
                             <li><a href="<?php echo base_url(); ?>review">Review</a></li>
                             <li><a href="<?php echo base_url(); ?>service">Services</a></li>
                             <li class="dropdown"><a href="">KAANAL ORANGE HVC</a>
                                 <ul class="dropdown">
                                     <?php
                                        for($i=0;$i<sizeof($orangehvc);$i++)
                                        { ?>
                                     <li><a
                                             href="<?php echo base_url(); ?>orangehvc/<?php echo $orangehvc[$i]['orangehvc_id']; ?>">
                                             <?= $orangehvc[$i]['orangehvc_title']; ?>
                                         </a></li>
                                    
                                     <?php } ?>
                                 </ul>
                             </li>
                             <li><a href="<?php echo base_url(); ?>communtityservices">Community Service</a></li>
                             <li><a href="<?php echo base_url(); ?>rehabilitation">Rehabilitation</a></li>
                             <li class="dropdown"><a href="<?php echo base_url(); ?>donation">Appeal & Donate</a>
                                 <ul>
                                     <li><a href="<?php echo base_url(); ?>appeal">Appeal</a></li>
                                     <li><a href="<?php echo base_url(); ?>donation">Donations</a></li>
                                 </ul>
                             </li>
                             
                           

                             <li
                                 class="dropdown <?php if($this->router->fetch_method() == 'news_events' && 'partners' && 'contact') echo "current";?>">
                                 <a href="<?php echo base_url(); ?>donation">More</a>
                                 <ul>
                                 <li><a href="<?php echo base_url(); ?>news_events">News & Events</a></li>
                                     <li><a href="<?php echo base_url(); ?>partners">Partners</a></li>
                                     <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </nav><!-- Main Menu End-->
             </div>

         </div>
     </div>
     <!--End Sticky Header-->

 </header>