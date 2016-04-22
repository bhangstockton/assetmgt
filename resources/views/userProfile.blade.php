@extends('template.bones')

@section('page-title')
    User Profile <small>{{ $user->email }}</small>
@endsection

@section('page-description')
	jdsj
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