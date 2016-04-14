@extends('template.bones')

@section('sysmod-title')
    AMS
@stop

@section('page-icon')
	
@stop

@section('page-title')
    Offices
@endsection

@section('page-ident')
	{{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
	{{ Form::hidden('page_group_lev2','none',['id' => 'page_group_lev2',]) }}
	{{ Form::hidden('page_id','pageid',['id' => 'page_id',]) }}
@endsection

@section('breadcrumbs')
    <li><a href="#">AMS</a></li>
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<!-- TABBOX: Information -->
			<div class="nav-tabs-custom">
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs">
					<li id='tn_list' class="active"><a href="#tc_list" data-toggle="tab">List</a></li>
					<li id='tn_add_supplier'><a href="#tc_add_supplier" data-toggle="tab">Add Offices</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Tab Content -->
	<div class="tab-content">
					<div id='tc_list' class="tab-pane active">
						<!-- TABTABLE: List of Suppliers -->
						<div class="box-body table-responsive no-padding">
						    <table class="table table-hover">
						    	<!-- headers -->
						        <tr>
						            <td style="border-top: 0px !important;"><b>ID</b></td>
						            <td style="border-top: 0px !important;"><b>Office Name</b></td>
						            <td style="border-top: 0px !important;"><b>Address</b></td>
						            <td class='text-center' style="width: 7%; border-top: 0px !important;"><b><i class="fa fa-bolt"></i> </b></td>
						        </tr>
						    </table>
						</div>
					</div>
			</div>
	</div>

@stop