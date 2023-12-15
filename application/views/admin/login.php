<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php require("component/head.php"); ?>
</head>
<style>

</style>
<body class="loginn-bg">

	<div class="auth-page">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-lg-4"></div>
				<div class="col-xxl-12 col-lg-4 col-md-5" style="background-color:white;height:500px;margin-top:30px">
					<div class="auth-full-page-content d-flex p-sm-5 p-4">
						<div class="w-100">
							<div class="d-flex flex-column h-100">
								<div class="mb-4 mb-md-5 text-center">
									<a href="index.html" class="d-block auth-logo">
										<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" height="50" class="mainLogoLarge"> <span class="logo-txt mainProjectName"></span>
									</a>
								</div>
								<div class="">
									<div class="text-center">
										<h5 class="mb-0">Welcome Back !</h5>
									</div>
									<form class="mt-4 pt-2" method="post" action="<?php echo base_url(); ?>admin/Login/LoginCheck">
										<input type="hidden" name="type" value="A">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
										</div>
										<div class="mb-3">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1">
													<label class="form-label">Password</label>
												</div>
											</div>

											<div class="input-group auth-pass-inputgroup">
												<input type="password" class="form-control" name="password" placeholder="Enter password" data aria-label="Password"
													aria-describedby="password-addon">   
												<button class="btn btn-light shadow-none ms-0" type="button"  id="password-addon"><i
														class="mdi mdi-eye-outline"></i></button>
											</div>
										</div>
										
										<div class="mb-3">
											<button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
					<!-- end auth full page content -->
				</div>
				<div class="col-lg-4"></div>
				<!-- end col -->
				
			<!-- end row -->
		</div>
		<!-- end container fluid -->
	</div>
	<?php require("component/footer.php"); ?>
	<script>
		$('.footer').hide();
	</script>
</body>

</html>
