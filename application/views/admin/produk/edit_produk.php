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
					

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
          </div>
					<?php $this->load->view('admin/_partials/breadcrumb.php'); ?>

					<!-- CONTENT FORM EDIT  -->
					<div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
								<a href="<?php echo site_url('admin/produk/') ?>" class="text-gray-100"><i class="fas fa-arrow-left"></i> Kembali</a>
						</div>
            <div class="card-body">
							<form action="" method="post" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
								oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

								<input type="hidden" name="produk_id" value="<?php echo $produk->produk_id?>" />

								<div class="form-group">
									<label for="produk_nama">Name*</label>
									<input class="form-control <?php echo form_error('produk_nama') ? 'is-invalid':'' ?>"
									type="text" name="produk_nama" placeholder="Produk Nama"
									value="<?php echo $produk->produk_nama ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('produk_nama') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="produk_harga">Price</label>
									<input class="form-control <?php echo form_error('produk_harga') ? 'is-invalid':'' ?>"
										type="number" name="produk_harga" min="0" placeholder="Produk Harga" 
										value="<?php echo $produk->produk_harga ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('produk_harga') ?>
									</div>
								</div>


								<div class="form-group">
									<label for="produk_image">Photo</label>
									<input class="form-control-file <?php echo form_error('produk_image') ? 'is-invalid':'' ?>"
									type="file" name="produk_image" />
									<input type="hidden" name="old_image" value="<?php echo $produk->produk_image ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('produk_image') ?>
									</div>
								</div>

								<div class="form-group text-left">
									<label for="produk_deskripsi">Description*</label>
									<textarea class="form-control <?php echo form_error('produk_deskripsi') ? 'is-invalid':'' ?>"
										name="produk_deskripsi" placeholder="Produk Deskripsi..."><?php echo $produk->produk_deskripsi ?></textarea>
									<div class="invalid-feedback">
										<?php echo form_error('produk_deskripsi') ?>
									</div>
								</div>
								<input class="btn btn-success" type="submit" name="btn" value="Save" />
							</form>
						</div>
					</div>
					<!-- END CONTENT FORM EDIT  -->

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
	<?php $this->load->view('admin/_partials/scrolltopbutton.php') ?>

  <!-- Logout Modal-->
	<?php $this->load->view('admin/_partials/modal.php') ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('admin/_partials/js.php') ?>

</body>
</html>
