<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>contact Details</title>
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
								<h4 class="mb-sm-0 font-size-18">contact Details</h4>
								<p class="flex-space-1"></p>
								<!-- <a class="btn btn-primary" id="addNew">Add contact</a> -->
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
												<!--<th>Working Hours</th>-->
												<th>Address</th>
												<th>Mobile number</th>
                                                <th>Email</th>
                                                <!-- <th>Map src</th> -->
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
                                    <h5 class="modal-title" id="myModalLabel">contact Details</h5>
                                </div>
                                <form id="formModal">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!--<div class="mb-3">-->
                                            <!--    <label for="example-color-input" class="form-label">Working Hours</label>-->
                                            <!--    <textarea class="form-control" type="text" id="hour" name="hour" placeholder="Enter Working Hours" rows="5" cols="50"></textarea>-->
                                            <!--    <h5 class="invalid-feedback hour"></h5>-->
                                            <!--</div>-->
										 <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Address</label>
                                                <textarea class="form-control" type="text" id="address" name="address" placeholder="Enter Address" rows="4"></textarea>
                                                <h5 class="invalid-feedback address"></h5>
                                            </div>
                                          
                                            <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Mobile Number</label>
                                                <input class="form-control" type="text" id="mobilenumber" name="mobilenumber" placeholder="Enter Mobile Number">
                                                <h5 class="invalid-feedback mobilenumber"></h5>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Email</label>
                                                <input class="form-control" type="text" id="email" name="email" placeholder="Enter email">
                                                <h5 class="invalid-feedback email"></h5>
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
	<script src="<?php echo base_url(); ?>custom/contact.js"></script>
	
</body>

</html>
