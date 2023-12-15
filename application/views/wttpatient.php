<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>
<style>
.wttdrop a {
    color: black;
}


.dropdown-btn {
    display: block;
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
    margin-top: 10px;
}

.dropdown-container {
    display: none;
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

                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12" id="patient">
                        <!--Single Service-->
                        <section class="services-single">

                            <h2 class="service-title" style="margin-top:-25px;">WTT Patient Statistics</h2>
                            <!--Default Text Block-->

                            <?php
                                for($i=0;$i<sizeof($wttyr);$i++){
                                   

                            ?>

                            <div class="default-text-block tabs" id="custom-content_<?= $i; ?>">

                                <?php
                               
                               if(isset($wttpatient[0])){
                           ?>
                                <div style="margin-top:-10px;width:100%;height:700px">
                                    <table class="table-fill">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Year <?= $wttpatient[0]['wttyr']; ?></th>
                                                <th class="text-left">Total patients</th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-hover">
                                            <?php
                                            for($j=0;$j<sizeof($wttpatient);$j++)
                                            { 
                                                ?>
                                            <tr>
                                                <td class="text-left"><?= $wttpatient[$j]['month']; ?></td>
                                                <td class="text-left"><?= $wttpatient[$j]['totalpatients']; ?></td>
                                            </tr>

                                            <?php 
                                            }?>
                                            <tr class="tosum">
                                                <td>Total Patients</td>
                                                <td><?= $wttyr[$i]['totalyearpatients']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                } else {  ?>

                                <p> no result fount</p>
                                <?php } ?>

                            </div>

                            <?php
                                }
                            ?>

                        </section>

                    </div>
                    <!--End Content Side-->



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