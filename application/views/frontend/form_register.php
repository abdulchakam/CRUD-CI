<!DOCTYPE html>
<html lang="en">
<head>
		<?php $this->load->view('frontend/_partials/head.php'); ?>
</head>
<body class="bg-gray-100" >
		<!-- Navbar Load View -->
			<?php $this->load->view('frontend/_partials/nav.php'); ?>
		<!-- End Navbar Load View  -->
	<div class="container-fluid">
	<div class="row my-3 justify-content-md-center">
  <div class="col-sm-6">
	<div class="card" >
  <div class="card-body">
		<h3 class="text-center mt-3">Daftar Sekarang</h3>
			<p class="text-center text-gray-600">Sudah Punya Akun? <a href="<?php echo site_url('login'); ?>">Masuk</a> </p>
			<div class="container-fluid">
						<?php if ($this->session->flashdata('success')): ?>
								<div class="alert alert-success" role="alert">
										<?php echo $this->session->flashdata('success'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
								</div>
						<?php endif; ?>
						</div>
      <div class="modal-body">
				<div class="row justify-content-md-center">
				<div class="col-10">
				<form action="<?php echo site_url('register/add') ?>" method="post">
				
					<div class="form-group">
						<label class="col-sm-10 control-label">Username</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" name="fusername" placeholder="Username " required	>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-10 control-label">Email</label>
						<div class="col-sm-12">
							<input type="email" class="form-control" name="femail" placeholder="Email" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-10 control-label">Password</label>
						<div class="col-sm-12">
							<input type="password" class="form-control" name="fpassword" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Group</label>
						<div class="col-sm-12">
						<select name="fgroup">
										<option>--Pilih--
										<option value="2">Member            
									</select>
					</div>
					</div>
					<div class="col-12 my-3">
					<div class="form-group ">
						<div class="col-sm-offset-2 col-sm-8 m-auto">
							<button type="submit" class="btn btn-primary btn-sm btn-block">Daftar</button>
						</div>
					</div>
					</div>
				</form>
		</div>
		</div>
		</div>
		</div>
		<!-- END CONTENT -->

		<!-- Load JS File -->
			<?php $this->load->view('frontend/_partials/js.php'); ?>
		<!-- End Load JS File -->
</body>
</html>
