<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Partners Details</title>
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
								<h4 class="mb-sm-0 font-size-18">Partners Details</h4>
								<p class="flex-space-1"></p>
								<a class="btn btn-primary" id="addNew">Add Partners</a>
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
												<th>Partners Description</th>
												<th>Partners Image</th>
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
                                    <h5 class="modal-title" id="myModalLabel">Partners Details</h5>
                                </div>
                                <form id="formModal">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                           
										<div class="mb-3">
                                                <label for="example-color-input" class="form-label">Partners Description</label>
                                                <input class="form-control" type="text" id="partners_description" name="partners_description" placeholder="Enter Partners">
                                                <h5 class="invalid-feedback partners_description"></h5>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Partners Image</label>
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
	<script src="<?php echo base_url(); ?>custom/partners.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#partners_description")).then(function(e){e.ui.view.editable.element.style.height="200px"; partnersdescription = e}).catch(function(e){console.error(e)});
    </script>
</body>

</html>
