@extends('template.bones')

@section('page-title')
    Brand
@endsection

@section('page-ident')
	{{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
	{{ Form::hidden('page_id','brand',['id' => 'page_id',]) }}
@endsection

@section('breadcrumbs')
    <!-- <li><a href="#"></a></li> -->
@stop

@section('content')
<input id="page_activetab" name="page_activetab" type="hidden" value="{{ Session::get('currtab') ? Session::get('currtab') : 'list' }}">

	<div class="row">
		<div class="col-md-12">
			<!-- TABBOX: Brand -->
			<div class="nav-tabs-custom">
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs">
					<li id='tn_list' class="active"><a href="#tc_list" data-toggle="tab">List of Brand</a></li>
					<li id='tn_add'><a href="#tc_add" data-toggle="tab">Add Brand</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
				</ul>
				<!-- Tab Content -->
				<div class="tab-content">
					<div id='tc_list' class="tab-pane active">
						<!-- TABTABLE: List of Brand -->
						<div class="box-body table-responsive no-padding">
						    <table class="table table-hover">
						    	<!-- headers -->
						        <tr>
						            <td style="border-top: 0px !important;"><b>#</b></td>
						            <td style="border-top: 0px !important;"><b>Name</b></td>
						            <td style="border-top: 0px !important;"><b>Product Lines</b></td>
						             <td class='text-center' style="width: 7%; border-top: 0px !important;"><b><i class="fa fa-bolt"></i> </b></td>
						        </tr>
						        <!-- rows -->
								@foreach ($brands as $brand)
									<tr>
										<td>{{ $brand->id }}</td>
										<td>{{ $brand->name }}</td>
								@endforeach
						    </table>
						</div>
						<!-- /TABTABLE: List of Brand -->
					</div>
					<!-- /.tab-pane -->
					<div id='tc_add' class="tab-pane">
						
					</div>
					<!-- /.tab-pane -->
				</div>
			</div>
			<!-- /TABBOX -->
		</div>
	</div>
@stop