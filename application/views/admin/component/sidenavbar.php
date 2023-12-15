<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <!-- Settings menu -->

                <?php if ($this->session->userdata('user_type_admin') == "true" && $this->session->userdata('user_type_settings') == "true") {?>

                <li id="menu_settings">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/Settings">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Settings</span>
                    </a>
                </li>
                <?php }?>


                <!-- Home -->

                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; Home</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/banner">
                                <span data-key="t-dashboard">&#10146; Banner</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/hospitaldetails">
                                <span data-key="t-dashboard">&#10146; Hospital Details</span>
                            </a>
                        </li>
                        <!-- <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/banner">
                                <span data-key="t-dashboard">&#10146; Banner Images</span>
                            </a>
                        </li> -->
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/about">
                                <span data-key="t-dashboard">&#10146; About Details</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/video">
                                <span data-key="t-dashboard">&#10146; Our Videos</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/profile">
                                <span data-key="t-dashboard">&#10146; Profile Details</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/chart">
                                <span data-key="t-dashboard">&#10146; Charts</span>
                            </a>
                        </li>

                        <!--<li id="menu_counter">-->
                        <!--    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/service">-->
                        <!--        <span data-key="t-dashboard">&#10146; Services</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/event">
                                <span data-key="t-dashboard">&#10146; Events</span>
                            </a>
                        </li>
                         <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/team">
                                <span data-key="t-dashboard">&#10146; Team</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/teamdetails">
                                <span data-key="t-dashboard">&#10146; Team Details</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="javascript:void(0)" class="has-arrow"><span
                                    data-key="t-authentication">&#10146; Our Team</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li id="menu_counter">
                                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/home_title">
                                        <span data-key="t-dashboard">&#10146; Our Team</span>
                                    </a>
                                </li>
                                <li id="menu_counter">
                                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/home_title">
                                        <span data-key="t-dashboard">&#10146; Team Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/inaugration">
                                <span data-key="t-dashboard">&#10146; Inaugration Function</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/testimonial">
                                <span data-key="t-dashboard">&#10146; Testimonial</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- About  -->


                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; About</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/abouttrust">
                                <span data-key="t-dashboard">&#10146; About Trust</span>
                            </a>
                        </li>
                       
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/representatives">
                                <span data-key="t-dashboard">&#10146; Trust Representatives</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/aboutprofile">
                                <span data-key="t-dashboard">&#10146; Representatives profile</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/review">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Reviews</span>
                    </a>
                </li>
                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/reviewvideo">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Review video</span>
                    </a>
                </li>
                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/getreview">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Get Reviews</span>
                    </a>
                </li>
                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/kaanalservices">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Services</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; Communtity Services</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/communtityservices">
                                <span data-key="t-dashboard">&#10146; Communtity Services</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/wttcenters">
                                <span data-key="t-dashboard">&#10146; WTT Centers</span>
                            </a>
                        </li>
                       </ul>
                </li>

                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; WTT Statistics</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                       <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/wttyr">
                                <span data-key="t-dashboard">&#10146; WTT Year</span>
                            </a>
                        </li>
                        
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/wttpatient">
                                <span data-key="t-dashboard">&#10146; WTT patient statistics</span>
                            </a>
                        </li>

                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/wttsurgery">
                                <span data-key="t-dashboard">&#10146; WTT Surgery statistics</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; Orange HVC</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/orangehvc">
                                <span data-key="t-dashboard">&#10146; Orange HVC Details</span>
                            </a>
                        </li>
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/orangehvcgallery">
                                <span data-key="t-dashboard">&#10146; Orange HVC Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>

              

                <!-- <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/ProductsDetails">
                       
                        <span data-key="t-dashboard">&#10038; Community Services</span>
                    </a>
                </li> -->




                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; Rehabilitation</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/rehabilitation">
                                <span data-key="t-dashboard">&#10146; Rehabilitation description</span>
                            </a>
                        </li>
                        <li id="menu_dashboard">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/rehabilitationimage">
                                <!-- <i data-feather="archive"></i> -->
                                <span data-key="t-dashboard">&#10146; Rehabilitation Images</span>
                            </a>
                        </li>
                    </ul>
                </li>




                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/appeal">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Appeal</span>
                    </a>
                </li>

                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/donation">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Donations</span>
                    </a>
                </li>



                <li>
                    <a href="javascript:void(0)" class="has-arrow"><span
                            data-key="t-authentication">&#10038; News & Events</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li id="menu_counter">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/newstitle">
                                <span data-key="t-dashboard">&#10146; News Title</span>
                            </a>
                        </li>
                        <li id="menu_dashboard">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/newsdescription">
                                <!-- <i data-feather="archive"></i> -->
                                <span data-key="t-dashboard">&#10146; News Description</span>
                            </a>
                        </li>
                        <li id="menu_dashboard">
                            <a href="<?php echo base_url(); ?>admin/KaanalAdmin/newsimage">
                                <!-- <i data-feather="archive"></i> -->
                                <span data-key="t-dashboard">&#10146; News Image</span>
                            </a>
                        </li>
                    </ul>
                </li>


               
                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/partners">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Partners</span>
                    </a>
                </li>

                <li id="menu_dashboard">
                    <a href="<?php echo base_url(); ?>admin/KaanalAdmin/contact">
                        <!-- <i data-feather="archive"></i> -->
                        <span data-key="t-dashboard">&#10038; Contact Us</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->