<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Orangehvc Gallery</title>
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
			<div class="page-content">
				<div class="container-fluid">

               

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box d-sm-flex align-items-center justify-content-between">
								<h4 class="mb-sm-0 font-size-18">Orangehvc Gallery</h4>
								<p class="flex-space-1"></p>
								<a class="btn btn-primary" id="addNew">Add Orangehvc Gallery</a>
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
												<th>Orangehvc Gallery Title</th>
												<th>Orangehvc Gallery Image</th>
												
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
                                    <h5 class="modal-title" id="myModalLabel">Orangehvc Gallery</h5>
                                </div>
                                <form id="formModal">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">

										<label for="example-color-input" class="form-label">News Title</label>
                                           <select class="form-control" name="orangehvc_id" id="orangehvc_id">
                                                    <option value="">Select Gallery Name</option>
													<?php
														for($i=0;$i<sizeof($orangehvcgallery);$i++)
														{ ?>
                                                    <option value="<?= $orangehvcgallery[$i]['orangehvc_id']; ?>"><?= $orangehvcgallery[$i]['orangehvc_title']; ?></option>
                                                    <?php } ?> 
                                                </select>
                                                <h5 class="invalid-feedback orangehvc_id"></h5>

                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Orangehvc Gallery Image</label>
                                                <input class="form-control" type="file" id="image_url" name="image_url">
                                                <h5 class="invalid-feedback image_url"></h5>
                                                <img src="" id="user_uploaded_image" alt="not-image" width="100px" style="padding-top: 15px; display:none;">
                                            </div>
                                            
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
	<script src="<?php echo base_url(); ?>custom/orangehvcgallery.js"></script>
	
</body>

</html>