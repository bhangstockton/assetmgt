@extends('template.bones')

@section('sysmod-title')
    AMS
@stop

@section('page-icon')
	
@stop

@section('page-title')
    Supplier
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
					<li id='tn_add_supplier'><a href="#tc_add_supplier" data-toggle="tab">Add Supplier</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
				</ul>
				<!-- Tab Content -->
				<div class="tab-content">
					<div id='tc_list' class="tab-pane active">
						<!-- TABTABLE: List of Suppliers -->
						<div class="box-body table-responsive no-padding">
						    <table class="table table-hover">
						    	<!-- headers -->
						        <tr>
						            <td style="border-top: 0px !important;"><b>ID</b></td>
						            <td style="border-top: 0px !important;"><b>Supplier Name</b></td>
						            <td style="border-top: 0px !important;"><b>Address</b></td>
						        </tr>
						        <!-- rows -->
								@foreach ($suppliers as $supplier)
									<tr>
										<td>{{ $supplier->id }}</td>
										<td>{{ $supplier->name }}</td>
										<td>{{ $supplier->address1 }}</td>
										<td>
											<!-- BTN: delete -->
											{{ Form::button('<i class="fa fa-trash"></i> &nbsp; Delete', [
												'onclick' => "location.href='". url('/')."'",
											    "class" => "btn btn-danger btn-xs",
											]) }}
											<!-- BTN: /delete -->
										</td>
									</tr>
								@endforeach
						    </table>
						</div>
						<!-- /TABTABLE: List of Suppliers -->
					</div>
					<!-- /.tab-pane -->
					<div id='tc_add_supplier' class="tab-pane">
						<!-- TEXT: Supplier's Name -->
						<div class='form-group'>
						    {{ Form::label('Name of Supplier') }}
						    {{ Form::text('name', '',[
						        'class' => 'form-control',
						        'placeholder' => 'Supplier\'s Name',
						    ]) }}
						    {{ $errors->first('name', '<code>:message</code>') }}
						</div>
						<!-- --------------- -->
						<!-- TEXT: Address 1 -->
						<div class='form-group'>
							<div class="row">

							   <!-- TEXTA: Address 1 -->
							   	<div class="col-xs-4">
							       {{ Form::label('Address 1') }}
							       {{ Form::textarea('address_1', '',[
							           'class' => 'form-control',
							           'placeholder' => 'Address 1',
							           'rows' => '3',
							       ]) }}
							       {{ $errors->first('address_1', '<code>:message</code>') }}
							   </div>
							   <!-- TEXTA: Address 2 -->
								<div class="col-xs-4">
							    {{ Form::label('Address 2') }}
							    {{ Form::textarea('address', '',[
							        'class' => 'form-control',
							        'placeholder' => 'Address 2',
							        'rows' => '3',
							    ]) }}
							    {{ $errors->first('address', '<code>:message</code>') }}
								</div>
								<!-- TEXT: TIN -->
						
								<div class="col-xs-4">
							    {{ Form::label('TIN No.') }}
							    {{ Form::text('tin', '',[
							        'class' => 'form-control',
							        'placeholder' => 'TIN No.',
							    ]) }}
							    {{ $errors->first('tin', '<code>:message</code>') }}
						    	</div>
							</div>
							
						
					</div>
						<!-- TEXT: President -->
						<div class='form-group'>
						    {{ Form::label('President') }}
						    {{ Form::text('president', '',[
						        'class' => 'form-control',
						        'placeholder' => 'President',
						    ]) }}
						    {{ $errors->first('president', '<code>:message</code>') }}
						</div>
						<!-- TEXT: Contact Person -->
						<div class='form-group'>
						    {{ Form::label('Contact Person') }}
						    {{ Form::text('contactp', '',[
						        'class' => 'form-control',
						        'placeholder' => 'Contact Person',
						    ]) }}
						    {{ $errors->first('contactp', '<code>:message</code>') }}
						</div>
						<!-- ------------------- -->
						<!-- ------------------- -->
						<div class='form-group'>
							<div class="row">

								<!-- TEXT: Contact No. 1 -->
								<div class="col-xs-4">
								    {{ Form::label('Contact No. 1') }}
								    {{ Form::text('contact_1', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Contact No. 1',
								    ]) }}
								    {{ $errors->first('contact_1', '<code>:message</code>') }}
								</div>
								
								<!-- TEXT: Contact No. 2 -->
								<div class="col-xs-4">
								    {{ Form::label('Contact No. 2') }}
								    {{ Form::text('contact_2', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Contact No. 2',
								    ]) }}
								    {{ $errors->first('contact_2', '<code>:message</code>') }}
							    </div>
								
								<!-- TEXT: Fax No. -->
								<div class="col-xs-4">
								    {{ Form::label('Fax No.') }}
								    {{ Form::text('fax', '',[
								        'class' => 'form-control',
								        'placeholder' => 'Fax No.',
								    ]) }}
								    {{ $errors->first('fax', '<code>:message</code>') }}
							    </div>

							</div>
						</div>

						<!-- ----------------------- -->
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
						<!-- Add Supplier -->
						{{ Form::button('<i class="fa fa-check"></i> &nbsp; Add Supplier', [
						    "class" => "btn btn-primary",
						    "id"	=> "submit",
						    "type"  => "submit",
						]) }}
						<!-- /Add Supplier -->
					</div>
					<!-- /.tab-pane -->
				</div>
			</div>
			<!-- /TABBOX -->
		</div>
	</div>
@stop