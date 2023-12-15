 <!--Main Footer-->
 <footer class="main-footer">
     <div class="auto-container">

         <!--Widgets Section-->
         <div class="widgets-section">
             <div class="row clearfix">
                 <!--Big Column-->
                 <div class="big-column col-md-6 col-sm-12 col-xs-12">
                     <div class="row clearfix">

                         <!--Footer Column-->
                         <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                             <div class="footer-widget about-widget">
                                 <!--Logo-->
                                 <div class="footer-logo"><a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo1.png"
                                             style="width:200px; height:100px;" alt=""></a></div>

                                 <div class="widget-content">
                                     <div class="text">Koviloor Eye Hospital (KEH) will focus on economically
                                         disadvantaged
                                         groups in rural areas by providing a comprehensive
                                         eye health facility in its main hospital located in Koviloor near
                                         Karaikudi, Sivagangai District.</div>

                                     <div class="social-links">
                                         <a href="https://facebook.com/kehkaanal/" target="blank"><span
                                                 class="fa fa-facebook-f"></span></a>
                                         <a href="#"><span class="fa fa-twitter"></span></a>
                                         <a href="#"><span class="fa fa-linkedin"></span></a>
                                         <a href="#"><span class="fa fa-linkedin"></span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <!--Footer Column-->
                         <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                             <div class="footer-widget links-widget">
                                 <h2>Quick Links</h2>
                                 <div class="widget-content">
                                     <ul class="list">
                                         <li><a href="<?php echo base_url(); ?>service">Our Services</a></li>
                                         <li><a href="<?php echo base_url(); ?>news_events">News & Events</a></li>
                                         <li><a href="<?php echo base_url(); ?>about">About Kaanal</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!--Big Column-->
                 <div class="big-column col-md-6 col-sm-12 col-xs-12">
                     <div class="row clearfix">
                         <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                             <div class="footer-widget contact-widget">
                                 <h2>Contact us</h2>
                                 <div class="widget-content">
                                     <ul class="contact-info">
                                     <?php if(isset($contact[0])){?>
                                         <li>
                                             <h4><span class="icon flaticon-placeholder"></span> Address</h4>
                                             <div class="text"><?php echo $contact[0]['address'] ?></div>
                                         </li>
                                         <li>
                                             <h4><span class="icon flaticon-envelope"></span> Email us</h4>
                                             <div class="text"><?php echo $contact[0]['email'] ?></div>
                                         </li>
                                         <li>
                                             <h4><span class="icon flaticon-phone-call"></span> Call Us</h4>
                                             <div class="text">
                                             <?php echo $contact[0]['mobilenumber'] ?></div>
                                         </li>
                                         <?php }?>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!--Footer Bottom-->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="row clearfix">
                 <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                     <div class="copyright-text">&copy; 2017 All Rights Reserved by KAANAl</div>
                 </div>
                 <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                     <div class="copyright-text">Designed by Appteq</div>
                 </div>
             </div>
         </div>

     </div>

 </footer>


 </div>
 <!--End pagewrapper-->

 <!--Scroll to top-->
 <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span>
 </div>



 <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/revolution.min.js"></script>
 <!-- count to -->
 <script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox-media.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/owl.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/script.js"></script>

 <!-- gmap helper -->
 <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

 <!-- thm custom script -->
 <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

 <!-- thm custom script -->
 <script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>

 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>