<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" 
		href="<?php echo site_url('admin/') ?>">
	<div class="sidebar-brand-icon">
		<i class="fas fa-user-astronaut"></i>
	</div>
	<div class="sidebar-brand-text mx-3">MY Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="<?php echo site_url('admin/') ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		<i class="fas fa-fw fa-cog"></i>
		<span>Produk</span>
	</a>
	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?php echo site_url('admin/produk/add') ?>"><i class="fa fa-plus"></i> Tambah Produk</a>
			<a class="collapse-item" href="<?php echo site_url('admin/produk') ?>"><i class="fa fa-eye"></i> Lihat Produk</a>
		</div>
	</div>
</li>

<li class="nav-item">
	<a class="nav-link collapsed" href="<?php echo site_url('admin/invoices') ?>" >
		<i class="fas fa-fw fa-cog"></i>
		<span>Invoices</span>
	</a>
</li>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
	<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
