@extends('template.bonesLogin')

@section('page-title')
	Login
@endsection

@section('content')

				
<div class="login-box">

	<div class="login-logo" style='line-height: 0.6;'>
		<b>Workflow</b>MS&reg;<br>
		<span style='font-size: 16px;'>for Philippine National Railways</span>
	</div>
	<div>
		
	</div>
	
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>
		<form method="POST" action="{{ url('/login') }}">
			{!! csrf_field() !!}
		
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
				<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
				<span class="glyphicon glyphicon-envelope  form-control-feedback"></span>
				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
		
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>

			<div class="row">
				<div class="col-xs-8">
					<div class="form-group">
					    <p>{{ Form::checkbox('remember','', false, ['class'=>'square-blue']) }} &nbsp; Remember Me</p>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		
		</form>

		<div class="social-auth-links text-center">
		  	<a href="{{ url('/password/reset') }}" class="btn btn-block btn-social btn-facebook btn-flat">
		  		<i class="fa fa-question"></i>
		  		Forgot Your Password?
		  	</a>
			<a href="#" class="btn btn-block btn-social btn-google btn-flat">
				<i class="fa fa-info"></i>
				About <b>Workflow</b>MS
			</a>
		</div>

	</div>
	
</div>
				
			
@endsection
