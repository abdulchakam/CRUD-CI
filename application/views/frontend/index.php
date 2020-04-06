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

		<!-- Tampilkan semua produk -->
	<div class="container">
		<div class="row mr-4 ">
			<!-- Produk -->
			<div class="col-md-8">
				<div class="row p-auto">
				<?php foreach($produks as $produk) : ?>
				<div class="col-sm-4">
				<div class="card mt-3 pt-2 " style="width: 14rem;">
					<div class="text-center">
						<img src="<?php echo base_url('upload/produk/'.$produk->produk_image) ?>" 
									class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h6 class="card-title text-title"><?php echo $produk->produk_nama ?></h5>
						<p class="card-tex text-caption">
						<?php
							echo (str_word_count($produk->produk_deskripsi) > 20 ? 
							substr($produk->produk_deskripsi,0,40)."..." :  $produk->produk_deskripsi);
						?>
						</p>
						<div class="harga">
							<p><?php echo 'Rp. ' .number_format($produk->produk_harga); ?></p>
						</div>
						
						<div class="col-10 m-3">
							<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" 
															data-type="minus" data-field="quantity[<?php echo $produk->produk_id;?>]">
												<i class="fas fa-minus"></i>
											</button>
									</span>
									<input type="text" name="quantity[<?php echo $produk->produk_id;?>]" 
												class="quantity form-control input-number" id="<?php echo $produk->produk_id;?>"  
												value="1" min="1" max="10" >
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" 
															data-type="plus" data-field="quantity[<?php echo $produk->produk_id;?>]">
													<i class="fas fa-plus icon"></i>
											</button>
									</span>
							</div>
						</div>

						<div class="text-center">
						<button class="add_cart btn btn-primary btn-sm btn-block" 
									data-produkid="<?php echo $produk->produk_id; ?>"
									data-produknama="<?php echo $produk->produk_nama; ?>" 
									data-produkharga="<?php echo $produk->produk_harga; ?>" > 
									<i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
				</div>
				</div>
				<?php endforeach; ?>
				</div>
			</div>
			<!-- End Produk -->

			<div class="col-md-4">
				<div class="card mt-3 shadow-sm rounded position-fixed" style="width: 25rem;">
					<div class="card-body">
						<h4 class="text-primary">Shopping Cart</h4>
						<div class="table-wrapper-scroll-y my-custom-scrollbar">
						<table class="table table-striped table-text"> 
							<thead class="bg-primary text-gray-100">
								<tr>
									<th>Produk</th>
									<th>Harga</th>
									<th>Qty</th>
									<th>Subtotal</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody id="detail_cart">
							
							</tbody>
						</table>
					</div>
						<!-- Button trigger modal -->
						<button type="button" class="checkout btn btn-success btn-sm btn-block mt-3" 
										data-toggle="modal" data-target="#checkout">
							Checkout
						</button>
				</div>
			</div>
		</div>
	</div>
		<!-- END CONTENT -->
		<br>
		<br>


<!-- Modal Checkout -->
<div class="modal fade" id="checkout" data-backdrop="static" tabindex="-1" 
			role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<h5>Belanja Anda</h5>
			<table class="table table-hover table-sm table-text"> 
							<thead>
								<tr class="bg-primary text-gray-100">
									<th scope="col">Produk</th>
									<th scope="col">Harga</th>
									<th scope="col">Qty</th>
									<th scope="col">Subtotal</th>
								</tr>
							</thead>

							<tbody id="detail_checkout">
							
							</tbody>
						</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <a href="<?php echo site_url('order'); ?>" class="btn btn-primary btn-sm">Checkout</a>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Checkout -->

		<!-- Load JS File -->
		<?php $this->load->view('frontend/_partials/js.php'); ?>
		<!-- End Load JS File -->

<script>
	// Javascript and AJAX Cart
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id = $(this).data("produkid");
			var produk_nama = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var quantity = $('#' + produk_id).val();
			
			$.ajax({
				url : "<?php echo base_url(); ?>cart/add_to_cart",
				method : "POST",
				data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		$('#detail_cart').load("<?php echo base_url(); ?>cart/load_cart");

		$(document).on('click','.hapus_cart', function(){
			var row_id = $(this).attr("id");

			$.ajax({
				url : "<?php echo base_url(); ?>cart/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success : function(data){
					$('#detail_cart').html(data);
				}
			});
			
		});

		$(document).on('click','.checkout', function(){
			$('#detail_checkout').load("<?php echo base_url(); ?>cart/load_checkout");
		});
	});
</script>

</body>
</html>
