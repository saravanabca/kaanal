<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>WTT surgery statistics Details</title>
	<!-- ========== top navigation Start ========== -->
	<?php require(APPPATH."views/admin/component/head.php"); ?>
</head>

<body>
	<div id="layout-wrapper">
		<!-- ========== top navigation Start ========== -->
		<?php require(APPPATH."views/admin/component/topnavbar.php"); ?>
		<!-- ========== Left Sidebar Start ========== -->
		<?php require(APPPATH."views/admin/component/sidenavbar.php"); ?>

        	


		<div class="main-content">
		        <div class="loading" id="loadder" style="display:none;"></div>
			<div class="page-content">
				<div class="container-fluid">

               

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box d-sm-flex align-items-center justify-content-between">
								<h4 class="mb-sm-0 font-size-18">WTT surgery statistics </h4>
								<p class="flex-space-1"></p>
								<a class="btn btn-primary" id="addNew">Add WTT surgery statistics</a>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<!-- main content start here -->
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
										<thead>
											<tr>
												<th>S.No</th>
												<th>Year</th>
												<th>Month</th>
                                                <th>Total surgery</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>

								</div>
							</div>
						</div> <!-- end col -->
					</div>
					<!-- main content ends here -->


					<!-- sample modal content -->
                    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">WTT surgery statistics</h5>
                                </div>
                                <form id="formModal">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                        <label for="example-color-input" class="form-label">News Title</label>
                                           <select class="form-control" name="wttyr_id" id="wttyr_id">
                                                    <option value="">Select WTT year</option>
													<?php
														for($i=0;$i<sizeof($wttyr);$i++)
														{ ?>
                                                    <option value="<?= $wttyr[$i]['wttyr_id']; ?>"><?= $wttyr[$i]['wttyr']; ?></option>
                                                    <?php } ?> 
                                                </select>

                                                <h5 class="invalid-feedback wttyr_id"></h5>

                                             <label for="example-color-input" class="form-label">Month</label>
                                              <select class="form-control" name="month" id="month">
                                                    <option value="">Select Month</option>
                                                    <option value="JANUARY">JANUARY </option>
                                                    <option value="FEBRAURY">FEBRAURY</option>
                                                    <option value="MARCH">MARCH</option>
                                                    <option value="APRIL">APRIL</option>
                                                    <option value="MAY">MAY</option>
                                                    <option value="JUNE">JUNE</option>
                                                    <option value="JULY">JULY</option>
                                                    <option value="AUGUST">AUGUST</option>
                                                    <option value="SEPTEMBER">SEPTEMBER</option>
                                                    <option value="OCTOBER">OCTOBER</option>
                                                    <option value="NOVEMBER">NOVEMBER</option>
                                                    <option value="DECEMBER">DECEMBER</option>
													
                                                </select>
                                                <h5 class="invalid-feedback month"></h5>
										 <!-- <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Month</label>
                                                <textarea class="form-control" type="text" id="name" name="name" placeholder="Enter the Center Name" rows="4"></textarea>
                                                <h5 class="invalid-feedback name"></h5>
                                            </div> -->
                                          
                                            <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Total surgery</label>
                                                <input class="form-control" type="text" id="totalsurgery" name="totalsurgery" placeholder="Enter Total surgery">
                                                <h5 class="invalid-feedback totalsurgery"></h5>
                                            </div>
                                         
                                            <!-- <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Map</label>
                                                <input class="form-control" type="text" id="map" name="map" placeholder="Enter map">
                                                <h5 class="invalid-feedback map"></h5>
                                            </div> -->
                                          
                                         

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="formSubmit">Save </button>
                                </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
				</div>
			</div>
			<!-- End Page-content -->
		</div>

	</div>


	<!-- ========== Footer Start ========== -->
	<?php require(APPPATH."views/admin/component/footer.php"); ?>
	<!-- custom banner script js -->
	<script src="<?php echo base_url(); ?>custom/wttsurgery.js"></script>
	
</body>

</html>
