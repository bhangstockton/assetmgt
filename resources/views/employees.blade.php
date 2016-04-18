@extends('template.bones')

@section('additional_css')
	<link rel="stylesheet" href="{{ asset('bower_components/adminlte/plugins/iCheck/square/_all.css') }}">
@stop

@section('additional_js')
	<script src="{{ asset('/bower_components/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
@stop

@section('page-title')
    Employees
@endsection

@section('page-ident')
	{{ Form::hidden('page_id','employees',['id' => 'page_id',]) }}
@endsection

@section('content')
	<input id="page_activetab" name="page_activetab" type="hidden" value="{{ Session::get('currtab') ? Session::get('currtab') : 'list' }}">

	<div class="row">
		<div class="col-md-12">
			<!-- TABBOX:  -->
			<div class="nav-tabs-custom" id='amstab'>
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs">
					<li id='tn_list'  class="active"><a href="#tc_list" data-toggle="tab">List</a></li>
					<li id='tn_new'><a href="#tc_new" data-toggle="tab">Add Employee</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
				</ul>
				<!-- Tab Content -->
				<div class="tab-content">
					<div id='tc_list' class="tab-pane active">
						<!-- TABTABLE: List of Employees -->
						<div class="box-body table-responsive no-padding">
						    <table class="table table-hover">
						    	<!-- headers -->
						        <tr>
						            <td style="border-top: 0px !important;"><b>ID</b></td>
						            <td style="border-top: 0px !important;"><b>Full Name</b></td>
						        </tr>
						        <!-- rows -->
						        @foreach ($employees as $employee)
						        	<tr>
										<td>{{ $employee->id }}</td>
										<td>{{ $employee->lastname .', '. $employee->firstname .' '. substr($employee->middlename,0,1) .'. '. $employee->suffix }}</td>
									</tr>
						        @endforeach
								
						    </table>
						</div>
						<!-- /TABTABLE: List of Employees -->
					</div>
					<!-- /.tab-pane -->
					<div id='tc_new' class="tab-pane">
						
						<!-- FORM: Add New Employee -->
						{{ Form::open(array('route' => 'employee.store')) }}
							<!-- TEXT: Lastname -->
							<div class="form-group">
							    {{ Form::text('lastname', '',[
							        'class' => 'form-control',
							        'placeholder' => 'Last Name',
							    ]) }}
							    {!! $errors->first('lastname', '<code>:message</code>') !!}
							</div>
							<!-- TEXT: Firstname -->
							<div class='form-group'>
							    {{ Form::text('firstname', '',[
							        'class' => 'form-control',
							        'placeholder' => 'First Name',
							    ]) }}
							    {!! $errors->first('firstname', '<code>:message</code>') !!}
							</div>
							<!-- TEXT: Middlename -->
							<div class='form-group'>
							    {{ Form::text('middlename', '',[
							        'class' => 'form-control',
							        'placeholder' => 'Middle Name',
							    ]) }}
							    {!! $errors->first('middlename', '<code>:message</code>') !!}
							</div>
							<!-- TEXT: Suffix -->
							<div class='form-group'>
							    <div class="row">
							    	<div class="col-xs-2">
							    		{{ Form::text('suffix', '',[
							    		    'class' => 'form-control',
							    		    'placeholder' => 'Suffix',
							    		]) }}
							    		{!! $errors->first('suffix', '<code>:message</code>') !!}
							    	</div>
							    </div>
							</div>
							<!-- TEXT: Posistion -->
							<div class='form-group'>
							    {{ Form::text('position', '',[
							        'class' => 'form-control',
							        'placeholder' => 'Position',
							    ]) }}
							    {!! $errors->first('position', '<code>:message</code>') !!}
							</div>
							<!-- Sex -->
							<div class="form-group">
							    <p>{{ Form::radio('sex','male', false, ['class'=>'square-blue']) }} &nbsp; Male</p>
							    <p>{{ Form::radio('sex','female', false, ['class'=>'square-blue']) }} &nbsp; Female</p>
							    {!! $errors->first('sex', '<code>:message</code>') !!}
							</div>
							<!-- /Sex -->
							<!-- TEXTA: Remarks -->
							<div class='form-group'>
							    {{ Form::textarea('remrks', '',[
							        'class' => 'form-control',
							        'placeholder' => 'Remarks',
							        'rows' => '3',
							    ]) }}
							    {!! $errors->first('remrks', '<code>:message</code>') !!}
							</div>
							<!-- submit -->
							{{ Form::button('<i class="fa fa-check"></i> &nbsp; Submit', [
							    "class" => "btn btn-primary",
							    "id"	=> "submit",
							    "type"  => "submit",
							]) }}
							<!-- /submit -->
						
						{{ Form::close() }}
						<!-- FORM: /Add New Employee -->
					</div>
					<!-- /.tab-pane -->
				</div>
			</div>
			<!-- /TABBOX -->
		</div>
			
	</div>
@stop