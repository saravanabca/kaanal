  <!-- Right Sidebar -->
  <div class="right-bar">
  	<div data-simplebar class="h-100">
  		<div class="rightbar-title d-flex align-items-center bg-dark p-3">

  			<h5 class="m-0 me-2 text-white">Theme Customizer</h5>

  			<a href="javascript:void(0);" class="right-bar-toggle ms-auto">
  				<i class="mdi mdi-close noti-icon"></i>
  			</a>
  		</div>

  		<!-- Settings -->
  		<hr class="m-0" />

  		<div class="p-4">
  			<h6 class="mb-3">Layout</h6>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
  				<label class="form-check-label" for="layout-vertical">Vertical</label>
  			</div>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
  				<label class="form-check-label" for="layout-horizontal">Horizontal</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
  				<label class="form-check-label" for="layout-mode-light">Light</label>
  			</div>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
  				<label class="form-check-label" for="layout-mode-dark">Dark</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild"
  					onchange="document.body.setAttribute('data-layout-size', 'fluid')">
  				<label class="form-check-label" for="layout-width-fuild">Fluid</label>
  			</div>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed"
  					onchange="document.body.setAttribute('data-layout-size', 'boxed')">
  				<label class="form-check-label" for="layout-width-boxed">Boxed</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed"
  					value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
  				<label class="form-check-label" for="layout-position-fixed">Fixed</label>
  			</div>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable"
  					value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
  				<label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light"
  					onchange="document.body.setAttribute('data-topbar', 'light')">
  				<label class="form-check-label" for="topbar-color-light">Light</label>
  			</div>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
  					onchange="document.body.setAttribute('data-topbar', 'dark')">
  				<label class="form-check-label" for="topbar-color-dark">Dark</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

  			<div class="form-check sidebar-setting">
  				<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
  					value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
  				<label class="form-check-label" for="sidebar-size-default">Default</label>
  			</div>
  			<div class="form-check sidebar-setting">
  				<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
  					value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
  				<label class="form-check-label" for="sidebar-size-compact">Compact</label>
  			</div>
  			<div class="form-check sidebar-setting">
  				<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small"
  					onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
  				<label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

  			<div class="form-check sidebar-setting">
  				<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
  					value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
  				<label class="form-check-label" for="sidebar-color-light">Light</label>
  			</div>
  			<div class="form-check sidebar-setting">
  				<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark"
  					onchange="document.body.setAttribute('data-sidebar', 'dark')">
  				<label class="form-check-label" for="sidebar-color-dark">Dark</label>
  			</div>
  			<div class="form-check sidebar-setting">
  				<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
  					value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
  				<label class="form-check-label" for="sidebar-color-brand">Brand</label>
  			</div>

  			<h6 class="mt-4 mb-3 pt-2">Direction</h6>

  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
  					value="ltr">
  				<label class="form-check-label" for="layout-direction-ltr">LTR</label>
  			</div>
  			<div class="form-check form-check-inline">
  				<input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
  					value="rtl">
  				<label class="form-check-label" for="layout-direction-rtl">RTL</label>
  			</div>

  		</div>

  	</div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <footer class="footer">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-sm-6">
  				<script>
  					document.write(new Date().getFullYear())

  				</script> © company name.
  			</div>
  		</div>
  	</div>
  </footer>

  <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/libs/node-waves/waves.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/libs/feather-icons/feather.min.js"></script>
  <!-- pace js -->
  <script src="<?php echo base_url(); ?>assets/admin/libs/pace-js/pace.min.js"></script>
  
  <!-- alertifyjs js -->
  <script src="<?php echo base_url(); ?>assets/admin/libs/alertifyjs/build/alertify.min.js"></script>

  <!-- Required datatable js -->
  <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- Sweet Alerts js -->
  <script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>
  <script src="<?php echo base_url(); ?>custom/settings.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
