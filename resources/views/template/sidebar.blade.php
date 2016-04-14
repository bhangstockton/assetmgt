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
		{{-- EDMS NAV--}}
		<ul class="sidebar-menu">
			<li id='ememo' class="treeview">
				<a href="#">
					<i class="fa fa-stop"></i> <span>eMEMO</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id='ememo-dashboard'><a href="{{ url('ememo/dashboard') }}"><i class="fa fa-caret-right"></i>Dashboard</a></li>
					<li id='ememo-tasks'>
						<a href="#"><i class="fa fa-caret-right"></i>Tasks <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li id='ememo-documents-list'><a href="#"><i class="fa fa-caret-right"></i>List</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-caret-right"></i>Incoming</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i>Releases</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i>Pending</a></li>
				</ul>
			</li>
		</ul>
		{{-- EMEMO NAV--}}
		<ul class="sidebar-menu">
			<li id='edms' class="treeview">
				<a href="#">
				<i class="fa fa-stop"></i> <span>EDMS</span>
				<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id='edms-dashboard'><a href="{{ url('edms/dashboard') }}"><i class="fa fa-caret-right"></i>Dashboard</a></li>
					<li id='edms-documents'>
						<a href="#"><i class="fa fa-caret-right"></i>Documents <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li id='edms-documents-list'><a href="#"><i class="fa fa-caret-right"></i>List</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-caret-right"></i>Level One</a></li>
				</ul>
			</li>
		</ul>
		{{-- WMS NAV --}}
		<ul class="sidebar-menu">
			<!-- Optionally, you can add icons to the links -->
			<li id='dashboard'><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li id='sysmods'><a href="{{ url('/sysmods') }}"><i class="fa fa-th-large"></i> <span>System Modules</span></a></li>
			<li id='sysmods_list'>
				<a href="#"><i class="fa fa-th-large"></i>System Modules<i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li id='ememo-documents-list'><a href="{{ url('edms/dashboard') }}"><i class="fa fa-caret-right"></i>EDMS</a></li>
					<li id='ememo-documents-list'><a href="{{ url('ememo/dashboard') }}"><i class="fa fa-caret-right"></i>eMEMO</a></li>
				</ul>
			</li>
			<li id='admin'>
				<a href="#"><i class="fa fa-gear"></i>Administration<i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li id='user-manager'><a href="{{ url('admin/user/manager') }}"><i class="fa fa-caret-right"></i>User Manager</a></li>
					<li id='system-settings'><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i> <span>System Settings</span> </a></li>
					<li id='sysmod-manager'><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i> <span>Sysmod Manager</span> </a></li>
					<li id='issues-manager'><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i> <span>Issues Manager</span> </a></li>
					<li id='faq-manager'><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i> <span>FAQ Manager</span> </a></li>
					<li id='userman-manager'><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i> <span>User Manual Manager</span> </a></li>
					<li id='logs'><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i> <span>Logs</span> </a></li>
				</ul>
			</li>
			<li id='pageid'><a href="{{ url('/supplier') }}"><i class="fa fa-truck"></i> <span>Supplier</span> </a></li>
			<li id='pageid'><a href="{{ url('/office') }}"><i class="fa fa-institution"></i> <span>Offices</span> </a></li>
			<li id='pageid'><a href="{{ url('/employees') }}"><i class="fa fa-users"></i> <span>Employees</span> </a></li>
			<li id='pageid'><a href="{{ url('/purchase') }}"><i class="fa fa-folder"></i> <span>Purchase Order</span> </a></li>
			<li><a href="{{ url('bower_components/adminlte/index.html') }}"><i class="fa fa-link"></i> <span>AdminLTE Template</span></a></li>

		</ul>

		<!-- /.sidebar-menu -->

	</section>
	<!-- /.sidebar -->
</aside>