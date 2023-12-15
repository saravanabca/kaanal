<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar">

        <!--Sidebar Widget / Styled Nav-->
        <div class="widget sidebar-widget downloads">
            <nav class="nav-outer">
                <ul>
                    <li><a href="<?php echo base_url(); ?>wttcenters">WTT Centers</a></li>




                    <button class="dropdown-btn">WTT Patient Statistics
                        <i class="fa fa-caret-down"></i>
                    </button>

                    <div class="dropdown-container">
                        <?php
                                         for($i=0;$i<sizeof($wttyr);$i++)
                                        { ?>
                        <div class="wttdrop"> <a
                                href="<?php echo base_url();?>wttpatient/<?php echo $wttyr[$i]['wttyr_id']; ?>"><?= $wttyr[$i]['wttyr']; ?>
                            </a> </div>
                        <!-- <div class="wttdrop"> <a href="#">2022</a></div> -->
                        <!-- <a href="#">Link 1</a><br>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a> -->
                        <?php } ?>
                    </div>


                    <button class="dropdown-btn">WTT Surgery Statistics
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <?php
                                         for($i=0;$i<sizeof($wttyr);$i++)
                                        { ?>
                        <div class="wttdrop"> <a
                                href="<?php echo base_url();?>wttsurgery/<?php echo $wttyr[$i]['wttyr_id']; ?>"><?= $wttyr[$i]['wttyr']; ?></a>
                        </div>
                        <!-- <div class="wttdrop"> <a href="#">Link 1</a></div> -->
                        <!-- <a href="#">Link 1</a><br>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a> -->
                        <?php } ?>
                    </div>







                    <!-- <li><a href="wtt_Surgery_statistics.html">WTT Surgery Statistics</a></li> -->
                </ul>




            </nav>
        </div>
        <iframe width="100%" height="200" style="margin-top:-18px;" src="https://www.youtube.com/embed/wlvaOTNXv5c"
            frameborder="0" allowfullscreen></iframe>


    </aside>
</div>