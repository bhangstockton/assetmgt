@extends('template.bones')

@section('sysmod-title')
    Purchase Order
@stop

@section('page-icon')
	
@stop

@section('page-title')
    Purchase Order
@endsection

@section('page-ident')
	{{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
	{{ Form::hidden('page_group_lev2','none',['id' => 'page_group_lev2',]) }}
	{{ Form::hidden('page_id','pageid',['id' => 'page_id',]) }}
@endsection

@section('breadcrumbs')
    <li><a href="#">Purchase Order</a></li>
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<!-- TABBOX: Purchase Information -->
			<div class="nav-tabs-custom">
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs">
					<li id='tn_list_purchase' class="active"><a href="#tc_list_purchase" data-toggle="tab">List of Purchase Orders</a></li>
					<li id='tn_add_po'><a href="#tc_add_po" data-toggle="tab">Add Purchase Order</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
				</ul>
				<!-- Tab Content -->
				<div class="tab-content">
					<div id='tc_list_purchase' class="tab-pane active">
						This is where the list shows.
					</div>
					<!-- /.tab-pane -->
					<div id='tc_add_po' class="tab-pane">
						<!-- TEXT: PO Reference No. -->
						<div class='form-group'>
							<div class="row">
								<div class="col-xs-2">
								    {{ Form::label('PO Reference No.') }}
								    {{ Form::text('po_ref_no', '',[
								        'class' => 'form-control',
								        'placeholder' => 'PO Reference No.',
								    ]) }}
								    {{ $errors->first('po_ref_no', '<code>:message</code>') }}
								</div>
								<!-- TEXT: Date Requested -->
								<div class="col-xs-2">
								    {{ Form::label('Date Requested') }}
								    {{ Form::text('date_requested', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Date Requested',
								    ]) }}
								    {{ $errors->first('date', '<code>:message</code>') }}
								</div>
								<!-- TEXT: Requesting Personnel -->
								<div class="col-xs-4">
								    {{ Form::label('Requesting Personnel') }}
								    {{ Form::text('requesting_personnel', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Requesting Personnel',
								    ]) }}
								    {{ $errors->first('requesting_personnel', '<code>:message</code>') }}
								</div>
								<!-- TEXT: Approving Personnel -->
								<div class="col-xs-4">
								    {{ Form::label('Approving Personnel') }}
								    {{ Form::text('approving', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Approving Personnel',
								    ]) }}
								    {{ $errors->first('approving', '<code>:message</code>') }}
								</div>
							</div>
						</div>
						<!-- TEXT: Date Approved -->
						<div class='form-group'>
							<div class="row">
								<div class="col-xs-2">
								    {{ Form::label('Date Approved') }}
								    {{ Form::text('approved_date', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Date Approved',
								    ]) }}
								    {{ $errors->first('approved_date', '<code>:message</code>') }}
							    </div>
							</div>
						</div>
						<!-- TEXTA: Remarks -->
						<div class='form-group'>
						    {{ Form::label('Remarks') }}
						    {{ Form::textarea('remarks', '',[
						        'class' => 'form-control',
						        'placeholder' => 'Remarks',
						        'rows' => '3',
						    ]) }}
						    {{ $errors->first('remarks', '<code>:message</code>') }}
						</div>
						<!-- Add PO -->
						{{ Form::button('<i class="fa fa-check"></i> &nbsp; Add Purchase Order', [
						    "class" => "btn btn-primary",
						    "id"	=> "submit",
						    "type"  => "submit",
						]) }}
						<!-- /Add PO -->
					</div>
					<!-- /.tab-pane -->
				</div>
				
			</div>
			<!-- /TABBOX -->
		</div>
	</div>
@stop