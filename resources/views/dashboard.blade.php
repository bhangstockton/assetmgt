@extends('template.bones')

@section('sysmod-title')
    AMS
@stop

@section('page-icon')
	
@stop

@section('page-title')
    Dashboard
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
		<!-- Box: Title -->
		<div class="col-md-12">
		    <div class="box box-default">
		        <div class="box-header with-border">
		            <h3 class="box-title">Title</h3> 
		            <div class="box-tools pull-right">
		                <span class="badge">0</span>
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            </div>
		        </div>
		        <div class="box-body">
		            The body of the box
		        </div>
		        <div class="box-footer">
		           
		        </div>
		    </div>
		</div>
	</div>
@stop