@include('header')
<style type="text/css">
	.login-container {
		width: 100%;
		height: 100%;
		position: relative;
		background: url(images/login-bg.jpg);
		background-size: cover;
		background-position: 50%;
	}
	nav {
		display: none;
	}
	#user-lable {
		position: absolute;
		margin-bottom: 0px;
		padding-top: 6px;
		left: 15px;
	}
	#pass-lable {
		position: absolute;
		margin-bottom: 0px;
		padding-top: 26px;
		left: 15px;
	}
	#form-wrapper-login {
		width: 300px;
		position: absolute;
		left: 50%;
		top: 50%;
		margin: -140px 0px 0px -150px;
	}
	#userinput {} #password {
		margin-top: 20px;
	}
	#login-logo {
		max-width: 100%;
	}
</style>

<div class="login-container">
	@if ($message = Session::get('alert')) {{ $message }} @endif
	<div id="form-wrapper-login">
		<div style="padding-bottom:20px;text-align:center;display:table;">
			<a href=".\">
				<img src={{ URL::asset( 'images/logo.png') }} alt="Casel's Logo" id="login-logo" style="padding-top:0;" />
			</a>
		</div>
		{{ Form::open(array('url' => 'login/auth', 'style' => 'width: 100%;')) }} {{ Form::label('username', 'Username:', array('id' => 'user-lable')) }} {{ Form::text('username', '', array('tabindex' => '1', 'required' => 'true', 'class' => 'form-control', 'id'
		=> 'userinput', 'autocomplete' => 'off')) }} {{ Form::label('password', 'Password:', array('id' => 'pass-lable')) }} {{ Form::password('password', array('tabindex' => '2', 'required' => 'true', 'class' => 'form-control', 'autocomplete' => 'off')) }}
		{{ Form::submit('Login', array('tabindex' => '10', 'class' => 'btn btn-primary', 'style' => ' margin-top: 20px; margin-bottom: 5px;width:100%; background-color: #5191d6;')) }} {{ Form::close() }}
		<a href="#" style="color: white;float:left;font-size: 12px;">Forgot Password?</a>

		<a href="http://aidevserver.co/projects/casels/public/register" style="color: white;float:right;font-size: 12px;">Register -&gt;</a>
	
	</div>
</div>
