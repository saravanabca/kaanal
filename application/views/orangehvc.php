<!DOCTYPE html>
<html>

<?php require('component/head.php'); ?>

<body>
    <div class="page-wrapper">

        <?php require('component/header.php'); ?>


        <div class="sidebar-page-container" style="margin-top:-75px;">
            <!--Tabs Box-->
            <div class="auto-container">
                <div class="row clearfix">

                    <?php
                 for($i=0;$i<sizeof($orangehvcc);$i++)
                { ?>
                    <h2 class="service-title"
                        style="background:#0d9344; width:100%; padding:10px 0px; text-align:center; color:#FFFFFF;">
                        <?= $orangehvcc[$i]['orangehvc_title']; ?>

                        <a
                            href="<?php echo base_url(); ?>orangehvcgallerydata/<?php echo $orangehvcc[$i]['orangehvc_id']; ?>">
                            | &nbsp;Gallery </a>
                    </h2>

                    <div class="content-side col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <!--Single Service-->
                        <section class="services-single">
                            <div class="default-text-block orangehvc-1">
                                <p
                                    style="color:#000000; margin-top:10px; line-height:37px; line-height:36px; font-weight:700;">
                                    <?= $orangehvcc[$i]['orangehvc']; ?>

                                </p>
                            </div>
                        </section>

                    </div>
                    <?php } ?>

                    <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12" id="patient">
                        <!--Single Service-->
                        <section class="services-single">

                            <h2 class="service-title" style="margin-top:-25px;">Recorts</h2>
                            <!--Default Text Block-->



                            <div class="default-text-block tabs" id="custom-content">




                                <div style="margin-top:-10px;width:100%;height:700px">
                                    <table class="table-fill">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Year </th>
                                                <th class="text-left">Total patients</th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-hover">

                                            <tr>
                                                <td class="text-left">2013</td>
                                                <td class="text-left">400</td>
                                            </tr>


                                            <tr class="tosum">
                                                <td>Total Patients</td>
                                                <td>400</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <p> no result fount</p>


                            </div>



                        </section>

                    </div>
                    <!--End Content Side-->




                </div>
            </div>




        </div>

        <?php require('component/footer.php'); ?>

</body>

</html>