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
          <h1 class="h3 mb-0 text-gray-800">Detail Invoices</h1>
        </div>
				<?php $this->load->view('admin/_partials/breadcrumb.php'); ?>
					<div class="card">
						<h5 class="card-header">Detail Invoices</h5>
						<div class="card-body">
							<h5 class="card-title">Items Ordered in Invoice #<?=$invoice->id?></h5>
							
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-12">
									<table id="myTable" 
												class="table table-striped table-bordered table-hover table-sm text-table">
										<thead>
											<tr class="bg-primary text-gray-100">
												<th>ID Produk</th>
												<th>Nama Produk</th>
												<th>Jumlah</th>
												<th>Harga</th>
												<th>Subtotal</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$total = 0;
												foreach($orders as $order) : 
												$subtotal = $order->quantity * $order->produk_harga;
												$total += $subtotal;
											?>
											<tr>
												<td><?=$order->produk_id?></td>
												<td><?=$order->produk_nama?></td>
												<td><?=$order->quantity?></td>
												<td><?php echo 'Rp. ' .number_format($order->produk_harga);?></td>
												<td><?php echo 'Rp. ' .number_format($subtotal); ?></td>
											</tr>
											<?php endforeach; ?>
										</tbody>
										<tfoot class="table-warning">
											<tr>
												<td colspan="4" align="center">Total</td>
												<td><?php echo 'Rp. ' .number_format($total); ?></td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>
					</div>
          <!-- Content Row -->
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

	<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
</body>

</html>
