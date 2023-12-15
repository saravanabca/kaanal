<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Review Image</title>
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
								<h4 class="mb-sm-0 font-size-18">Review Image</h4>
								<p class="flex-space-1"></p>
								<a class="btn btn-primary" id="addNew">Add Review Image</a>
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
                                                <th>Review Title</th>
												<th>Review Image</th>
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
                                    <h5 class="modal-title" id="myModalLabel">Review Image</h5>
                                </div>
                                <form id="formModal">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                           

                                        <div class="mb-3">
                                                <label for="example-color-input" class="form-label">Reviewer Name or Title <span style="color:red">(optional)</span></label>
                                                <input class="form-control" type="text" id="reviewname" name="reviewname" placeholder="Enter reviewname">
                                                <h5 class="invalid-feedback reviewname"></h5>
                                            </div>
                                                
                                        <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Review Image</label>
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
	<script src="<?php echo base_url(); ?>custom/review.js"></script>
	
</body>

</html>
