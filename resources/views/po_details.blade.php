@extends('template.bones')

@section('sysmod-title')
    AMS
@stop

@section('page-icon')
	
@stop

@section('page-title')
    Purchase Order Details
@endsection

@section('page-ident')
	{{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
	{{ Form::hidden('page_group_lev2','none',['id' => 'page_group_lev2',]) }}
	{{ Form::hidden('page_id','pageid',['id' => 'page_id',]) }}
@endsection

@section('breadcrumbs')
    <li><a href="#">Purchase Order Details</a></li>	
@stop

@section('content')
	<div class="row">
	<!-- TABBOX: PO Details -->
	<div class="nav-tabs-custom">
		<!-- Nav Tabs -->
		<ul class="nav nav-tabs">
			<li id='tn_po_details' class="active"><a href="#tc_po_details" data-toggle="tab">PO Details</a></li>
			<li id='tn_'><a href="#tc_" data-toggle="tab">Tab 2</a></li>
			<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
		</ul>
		<!-- Tab Content -->
		<div class="tab-content">
			<div id='tc_po_details' class="tab-pane active">
			<!-- TEXT: ID -->
				<div class='form-group'>
				    {{ Form::label('ID') }}
				    {{ Form::text('id', '',[
				        'class' => 'form-control',
				        'placeholder' => 'ID',
				    ]) }}
				    {{ $errors->first('id', '<code>:message</code>') }}
				</div>
				<!-- TEXT: PO ID -->
				<div class='form-group'>
				    {{ Form::label('PO ID') }}
				    {{ Form::text('po_id', '',[
				        'class' => 'form-control',
				        'placeholder' => 'PO ID',
				    ]) }}
				    {{ $errors->first('po_id', '<code>:message</code>') }}
				</div>
				<!-- TEXT: ITEM Name -->
				<div class='form-group'>
				    {{ Form::label('Item Name') }}
				    {{ Form::text('item_name', '',[
				        'class' => 'form-control',
				        'placeholder' => 'Item Name',
				    ]) }}
				    {{ $errors->first('item_name', '<code>:message</code>') }}
				</div>
				<!-- TEXT: Item Description -->
				<div class='form-group'>
				    {{ Form::label('Item Description') }}
				    {{ Form::text('item_desc', '',[
				        'class' => 'form-control',
				        'placeholder' => 'Item Description',
				    ]) }}
				    {{ $errors->first('item_desc', '<code>:message</code>') }}
				</div>
				<!-- TEXT: Item Quantity -->
				<div class='form-group'>
				    {{ Form::label('Item Quantity') }}
				    {{ Form::text('item_qty', '',[
				        'class' => 'form-control',
				        'placeholder' => 'Item Quantity',
				    ]) }}
				    {{ $errors->first('item_qty', '<code>:message</code>') }}
				</div>
				<!-- TEXT: Item Unit -->
				<div class='form-group'>
				    {{ Form::label('Item Unit') }}
				    {{ Form::text('item_unit', '',[
				        'class' => 'form-control',
				        'placeholder' => 'Item Unit',
				    ]) }}
				    {{ $errors->first('item_unit', '<code>:message</code>') }}
				</div>
				<!-- TEXT: Item Unit Price -->
				<div class='form-group'>
				    {{ Form::label('Item Unit Price') }}
				    {{ Form::text('item_unit_price', '',[
				        'class' => 'form-control',
				        'placeholder' => 'Item Unit Price',
				    ]) }}
				    {{ $errors->first('item_unit_price', '<code>:message</code>') }}
				</div>
			</div>
			<!-- /.tab-pane 
			<div id='tc_' class="tab-pane">
				The European languages are members of the same family. Their separate existence is a myth.
				For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
				in their grammar, their pronunciation and their most common words. Everyone realizes why a
				new common language would be desirable: one could refuse to pay expensive translators. To
				achieve this, it would be necessary to have uniform grammar, pronunciation and more common
				words. If several languages coalesce, the grammar of the resulting language is more simple
				and regular than that of the individual languages.
			</div>
			<!-- /.tab-pane -->

			<!-- Add Item -->
			{{ Form::button('<i class="fa fa-check"></i> &nbsp; Add Item', [
			    "class" => "btn btn-primary",
			    "id"	=> "submit",
			    "type"  => "submit",
			]) }}
			<!-- /Add Item -->
			<!-- Delete -->
			{{ Form::button('<i class="fa fa-check"></i> &nbsp; Delete', [
			    "class" => "btn btn-danger",
			    "id"	=> "submit",
			    "type"  => "submit",
			]) }}
			<!-- /Delete -->
		</div>
	</div>
	<!-- /TABBOX -->
	</div>
@stop