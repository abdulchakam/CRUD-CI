<!DOCTYPE html>
<html lang="en">
<head>
		<?php $this->load->view('frontend/_partials/head.php'); ?>
</head>
<body class="bg-gray-100" >
		<!-- Navbar Load View -->
			<?php $this->load->view('frontend/_partials/nav.php'); ?>
		<!-- End Navbar Load View  -->

		<!-- CONTENT -->
	<div class="container-fluid">
	<div class="row my-3 justify-content-md-center">
  <div class="col-sm-5">
	<div class="card" >
  <div class="card-body">
	<h3 class="text-center mt-3">Masuk</h3>


		<div><?=validation_errors()?></div>
		<div><?=$this->session->flashdata('error')?></div>
		<div class="row justify-content-md-center">
				<div class="col-10">
					<?=form_open('login', ['class'=>'form-horizontal'])?>
						<div class="form-group">
						<label for="username" class="col-sm-10 control-label">Username</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" name="fusername" required>
						</div>
						</div>
						<div class="form-group">
						<label for="password" class="col-sm-10 control-label">Password</label>
						<div class="col-sm-12">
							<input type="password" class="form-control" name="fpassword" required>
						</div>
						</div>
						<div class="form-group">
						<div class="col-sm-offset-2 col-sm-12">
							<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
							</div>
						</div>
						</div>
						<div class="col-12 my-3">
								<div class="form-group ">
									<div class="col-sm-offset-2 col-sm-8 m-auto">
										<button type="submit" class="btn btn-primary btn-sm btn-block">Sign in</button>
									</div>
									<p class="text-center text-gray-600 mt-3">Belum Punya Akun? <a href="<?php echo site_url('register'); ?>">Daftar</a> </p>
								</div>
						</div>		
						</div>
						</div>
					</form>
				</div>
				</div>
		</div>
		</div>
		<!-- END CONTENT  -->

		<!-- Load JS File -->
		<?php $this->load->view('frontend/_partials/js.php'); ?>
		<!-- End Load JS File -->
</body>
</html>
