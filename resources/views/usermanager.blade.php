@extends('template.bones')

@section('page-title')
    User Manager 
@stop

@section('page-ident')
	{{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
	{{ Form::hidden('page_id','user-manager',['id' => 'page_id',]) }}
@stop

@section('breadcrumbs')
    <!-- <li><a href="#"></a></li> -->
@stop

@section('content')
	<input id="page_activetab" name="page_activetab" type="hidden" value="{{ Session::get('currtab') ? Session::get('currtab') : 'list' }}">
	
	<div class="row">
		<div class="col-md-12">
			<!-- TABBOX:  -->
			<div class="nav-tabs-custom" id='amstab'>
				<!-- Nav Tabs -->
				<ul class="nav nav-tabs">
					<li id='tn_list' class="active"><a href="#tc_list" data-toggle="tab">User List</a></li>
					<li id='tn_new'><a href="#tc_new" data-toggle="tab">Add New User</a></li>
					<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-medkit"></i></a></li>
				</ul>
				<!-- Tab Content -->
				<div class="tab-content">
					<div id='tc_list' class="tab-pane active">
						<!-- TABTABLE: User List -->
						<div class="box-body table-responsive no-padding">
						    <table class="table table-hover">
						    	<!-- headers -->
						        <tr>
						            <td style="border-top: 0px !important;"><b>#</b></td>
						            <td style="border-top: 0px !important;"><b>Name</b></td>
						            <td style="border-top: 0px !important;"><b>Email</b></td>
						        </tr>
						        <!-- rows -->
						        @foreach ($users as $user)
						        	<tr>
						        		<td>{{ $user->id }}</td>
						        		<td>{{ $user->name }}</td>
						        		<td>{{ $user->email }}</td>
						        	</tr>
						        @endforeach
						    </table>
						</div>
						<!-- /TABTABLE: User List -->
					</div>
					<!-- /.tab-pane -->
					<div id='tc_new' class="tab-pane">
						<!-- FORM: -->
						{{ Form::open([
						    "url" => "user-manager",
						    "autocomplete" => "off",
						    "files" => false,
						]) }}
							
							<!-- TEXT: Name -->
							<div class='form-group'>
							    {{ Form::text('name', '',[
							        'class' => 'form-control',
							        'placeholder' => 'Full Name',
							    ]) }}
							    {!! $errors->first('name', '<code>:message</code>') !!}
							</div>
						
						{{ Form::close() }}
						<!-- FORM:  -->
					</div>
					<!-- /.tab-pane -->
				</div>
			</div>
			<!-- /TABBOX -->
		</div>
	</div>
@stop