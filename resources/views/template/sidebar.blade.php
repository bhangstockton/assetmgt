<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('bower_components/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ 'something' }}</p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		

		
		<!-- search form (Optional) -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
			</div>
		</form>
		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<!-- Optionally, you can add icons to the links -->
			<li id='dashboard'><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li id='supplier'><a href="{{ url('/supplier') }}"><i class="fa fa-tty"></i> <span>Supplier</span> </a></li>
			<li id='offices'><a href="{{ url('/office') }}"><i class="fa fa-institution"></i> <span>Offices</span> </a></li>
			<li id='employees'><a href="{{ url('/employee') }}"><i class="fa fa-users"></i> <span>Employees</span> </a></li>
			<li id='purchase_order'><a href="{{ url('/purchase') }}"><i class="fa fa-folder"></i> <span>Purchase Order</span> </a></li>
			<li id='purchase_order_details'><a href="{{ url('/po_details') }}"><i class="fa fa-folder"></i> <span>Purchase Order Details</span> </a></li>
			<li id='user-manager'><a href="{{ url('/user-manager') }}"><i class="fa fa-users"></i> <span>User Manager</span> </a></li>
			<li id='brand'><a href="{{ url('/brand') }}"><i class="fa fa-users"></i> <span>Brands</span> </a></li>
			<li><a href="{{ url('bower_components/adminlte/index.html') }}"><i class="fa fa-link"></i> <span>AdminLTE Template</span></a></li>

		</ul>

		<!-- /.sidebar-menu -->

	</section>
	<!-- /.sidebar -->
</aside>