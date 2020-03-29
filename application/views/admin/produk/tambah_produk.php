<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php'); ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
		<?php $this->load->view('admin/_partials/sidebar.php'); ?>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
					<?php $this->load->view('admin/_partials/navbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
						<?php if ($this->session->flashdata('success')): ?>
								<div class="alert alert-success" role="alert">
										<?php echo $this->session->flashdata('success'); ?>
								</div>
						<?php endif; ?>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
          </div>
					<?php $this->load->view('admin/_partials/breadcrumb.php'); ?>

				<!-- CONTENT FORM ADD -->
				<div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
								<a href="<?php echo site_url('admin/produk/') ?>" class="text-gray-100"><i class="fas fa-arrow-left"></i> Kembali</a>
						</div>
            <div class="card-body">
							<form action="<?php echo site_url('admin/produk/add') ?>" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label for="produk_nama">Nama Produk*</label>
									<input class="form-control <?php echo form_error('produk_nama') ? 'is-invalid':'' ?>"
									type="text" name="produk_nama" placeholder="Produk Nama" />
									<div class="invalid-feedback">
										<?php echo form_error('produk_nama') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="produk_harga">Harga*</label>
									<input class="form-control <?php echo form_error('produk_harga') ? 'is-invalid':'' ?>"
									type="number" name="produk_harga" min="0" placeholder="Produk Harga" />
									<div class="invalid-feedback">
										<?php echo form_error('produk_harga') ?>
									</div>
								</div>


								<div class="form-group">
									<label for="produk_image">Foto</label>
									<input class="form-control-file <?php echo form_error('produk_image') ? 'is-invalid':'' ?>"
									type="file" name="produk_image" />
									<div class="invalid-feedback">
										<?php echo form_error('produk_image') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="produk_deskripsi">Deskripsi*</label>
									<textarea class="form-control <?php echo form_error('produk_deskripsi') ? 'is-invalid':'' ?>"
									name="produk_deskripsi" placeholder="Produk Deskripsi..."></textarea>
									<div class="invalid-feedback">
										<?php echo form_error('produk_deskripsi') ?>
									</div>
								</div>
								<input class="btn btn-outline-primary" type="submit" name="btn" value="Save" />
							</form>
						</div>
				<!-- END CONTENT FORM ADD -->
					<div class="card-footer small text-muted">
						* required fields
					</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
		<?php $this->load->view('admin/_partials/footer.php') ?>
      <!-- End of Footer -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->



  <!-- Logout Modal-->
	<?php $this->load->view('admin/_partials/modal.php') ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('admin/_partials/js.php') ?>

</body>

</html>
