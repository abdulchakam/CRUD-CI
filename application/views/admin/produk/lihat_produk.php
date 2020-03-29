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
            <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
          </div>
					<?php $this->load->view('admin/_partials/breadcrumb.php'); ?>

          <!-- TABLE CONTENT -->
					<div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
								<a href="<?php echo site_url('admin/produk/add') ?>" class="text-gray-100"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
											<th>Gambar</th>
											<th>Nama</th>
											<th>Harga</th>
											<th>Deskripsi</th>
											<th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
											<th>Gambar</th>
											<th>Nama</th>
											<th>Harga</th>
											<th>Deskripsi</th>
											<th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($produks as $produk): ?>
											<tr>
												<td width="100">
													<img src="<?php echo base_url('upload/produk/'.$produk->produk_image) ?>" width="64" />
												</td>
												<td width="200">
													<?php echo $produk->produk_nama ?>
												</td>
												<td width="200">
													<?php echo 'Rp. ' .number_format($produk->produk_harga); ?>
												</td>
												<td>
													<?php
														//Membatasi jumlah huruf yang ditampilkan jika huruf lebih dari 30
														//Maka tampilkan hanya 45 huruf dengan tambahan ...., 
														//jika tidak lebih dari 30 tampilkan apa adanya 
														echo (str_word_count($produk->produk_deskripsi) > 30 ? 
														substr($produk->produk_deskripsi,0,45)."..." :  $produk->produk_deskripsi);
													?>
												</td>
												<td width="170">
													<a href="<?php echo site_url('admin/produk/edit/'.$produk->produk_id) ?>"
														class="btn btn-outline-primary btn-sm fas fa-edit"> Edit</a> &nbsp;
													<a onclick="deleteConfirm('<?php echo site_url('admin/produk/delete/'.$produk->produk_id) ?>')"
														href="#!" class="btn btn-outline-danger btn-sm fas fa-trash-alt"> Hapus</a>
												</td>
											</tr>
										<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
					<!--END TABLE CONTENT  -->

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

	<!-- Function Java Script Memanggil Modal Delete  -->
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>	

</body>
</html>
