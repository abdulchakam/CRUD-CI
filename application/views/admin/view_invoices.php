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
          <h1 class="h3 mb-0 text-gray-800">Invoices</h1>
        </div>
				<?php $this->load->view('admin/_partials/breadcrumb.php'); ?>
					<div class="card">
						<h5 class="card-header">Invoices</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-12">
								
									<table id="myTable" 
													class="table table-striped table-bordered table-hover table-sm">
										<thead>
											<tr class="bg-primary text-gray-100">
												<th>Invoice ID</th>
												<th>Date</th>
												<th>Due Date</th>
													<th>Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($invoices as $invoice) : ?>
											<tr>
												<td><?=$invoice->id?></td>
												<td><?=$invoice->date?></td>
												<td><?=$invoice->due_date?></td>
												<td><?=$invoice->status?></td>
												<td>
													<?=anchor(	'admin/invoices/detail/' . $invoice->id,'Details',
																			['class'=>'btn btn-default btn-sm btn-outline-primary'])
													?> 
																			</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
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
