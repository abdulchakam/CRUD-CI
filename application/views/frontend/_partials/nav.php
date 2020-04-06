<nav class="navbar navbar-expand-lg navbar-light bg-white topbar fixed-top mb-2 static-top shadow">
	<div class="container-fluid">
		<a class="navbar-brand text-primary" href="#">E-Dagang</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<form class="d-none d-sm-inline-block form-inline m-auto mw-100 navbar-search">
				<div class="input-group">
					<input class="form-control bg-light border-0 small" type="search" placeholder="Search">
					<div class="input-group-append">
						<button class="btn bg-gray-300" type="button">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>
				</div>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<?php if($this->session->userdata('username')) { ?>
					<li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$this->session->userdata('username')?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
                </a>
              </div>
            </li>
				<?php } else { ?>
					<li>
						<button type="button" class="btn btn-outline-primary btn-sm btn-block mt-3" data-toggle="modal" data-target="#masuk">
							Masuk
						</button>
					</li>
					&nbsp; &nbsp;
					<li>
					<a href="<?php echo site_url('register'); ?>" class="btn btn-primary btn-sm btn-block mt-3">Daftar</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	</nav>
<br>
<br>
<br>


<!-- Modal Masuk-->
<div class="modal fade" id="masuk" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<button type="button" class="close ml-auto m-2" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
			<h3 class="text-center mt-3">Masuk</h3>
      <div class="modal-body">
				<div class="container-fluid">
				<div class="row justify-content-md-center">
				<div class="col-10">
				<form action="<?php echo site_url('login') ?>" method="post">
						<div class="form-group">
						<label for="inputEmail3" class="col-sm-10 control-label">Username</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" name="fusername" required>
						</div>
						</div>
						<div class="form-group">
						<label for="inputPassword3" class="col-sm-10 control-label">Password</label>
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
    </div>
  </div>
</div>
<!-- End Modal Masuk -->


<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('login/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
</div>



