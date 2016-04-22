@extends('template.bones')

@section('page-title')
    User Profile 
@endsection

@section('page-description')
	{{ $user->email }}
@stop

@section('page-ident')
	{{ Form::hidden('page_group_lev1','none',['id' => 'page_group_lev1',]) }}
	{{ Form::hidden('page_id','user-profile',['id' => 'page_id',]) }}
@endsection

@section('breadcrumbs')
    <li><a href="/user-manager">User Manager</a></li>
@stop

@section('content')
	<div class="row">
		{{ $user->name }}
	</div>
@stop