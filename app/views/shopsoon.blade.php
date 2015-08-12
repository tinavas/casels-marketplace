@include('header')
<style type="text/css">
	.login-container {
		width: 100%;
		height: 100%;
		position: relative;
		background: url(images/shopsoon-bg.jpg);
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
      width: 500px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      max-width: 99%;
  }
	#userinput {} #password {
		margin-top: 20px;
	}
	#login-logo {
		max-width: 100%;
	}
  #coming-soon-p {
    font-size: 16px;
    font-weight: bold;
    font-style: italic;
}
#coming-soon-header {
    font-family: 'lithosBlack';
    color: #8F0005;
    text-shadow: 1px 1px 3px black;
    font-size: 50px;
}
</style>

<div class="login-container">
	@if ($message = Session::get('alert')) {{ $message }} @endif
	<div id="form-wrapper-login">
		<div style="padding-bottom:20px;text-align:center;display:table;">
			<a href=".\">
				<img src={{ URL::asset( 'images/logo-new.png') }} alt="Casel's Logo" id="login-logo" style="padding-top:0;" />
			</a>
      <h1 id="coming-soon-header">
        Relax! Our store is coming soon!
      </h1>
      <p id="coming-soon-p">Enter you email below to be the first to know when we launch!</p>
		</div>
    {{ Form::open(array('url' => 'email')) }}
      {{ Form::email('mailingListEmail', '', array('id' => 'email-input', 'placeholder' => 'Enter your email...')) }}
      {{ Form::submit('Submit', array('id' => 'email-submit')) }}
    {{ Form::close() }}
	</div>
</div>
