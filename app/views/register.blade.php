@include('header')
<div id ="page-main-title">
	<div class="wrapper">
		<h1 id="page-h1">Sign Up</h1>
	</div>
</div>
<div class="container">
	<div id="sign-up-progress-wrap">
		<div class="progress" style="height:40px;">
		  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.333%" id="prog-1" >
		    <span class="sr-only">33% Complete</span>
		  </div>
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.333%" id="prog-2">
		    <span class="sr-only">33% Complete</span>
		  </div>
			<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.333%" id="prog-3" >
		    <span class="sr-only">33% Complete</span>
		  </div>
		</div>
		<h1>Step 1 of 3</h1>
	</div>

			@if ($message = Session::get('alert'))
			{{ $message }}
			@endif
	{{ Form::open(array('url' => 'register/new', 'style' => 'width: 50%; margin-top: 10px;padding: 40px;margin-bottom: 40px;','id' => 'su-form-resp')) }}
		<div id="su-part-1">
			{{ Form::label('first-name', 'First Name:', array('class' => 'su-label')) }}
			{{ Form::text('first-name', '', array('tabindex' => '', 'required' => 'true', 'class' => 'form-control', 'id' => 'fn-input')) }}
			{{ Form::label('last-name', 'Last Name:', array('class' => 'su-label')) }}
			{{ Form::text('last-name', '', array('tabindex' => '', 'required' => 'true', 'class' => 'form-control', 'id' => 'ln-input')) }}
		</div>

		<div id="su-part-2">
			{{ Form::label('username', 'Username:', array('class' => 'su-label')) }}
			{{ Form::text('username', '', array('tabindex' => '', 'required' => 'true', 'class' => 'form-control', 'id' => 'user-input')) }}
			{{ Form::label('email', 'Email:', array('class' => 'su-label')) }}
			{{ Form::email('email', '', array('tabindex' => '', 'required' => 'true', 'class' => 'form-control', 'id' => 'su-email-input')) }}
		</div>

		<div id="su-part-3">
			{{ Form::label('password', 'Password:', array('class' => 'su-label')) }}
			{{ Form::password('password', array('tabindex' => '', 'required' => 'true', 'class' => 'form-control')) }}
			{{ Form::label('pass_confirmation', 'Comfirm Password:', array('class' => 'su-label')) }}
			{{ Form::password('pass_confirmation', array('tabindex' => '', 'required' => 'true', 'class' => 'form-control')) }}
		</div>

		<div id="su-next-wrap">
			<h1 class="su-prev-1" id="su-btn-back">Back</h1>
			<h1 class="su-next-1" id="su-btn-next">Next</h1>
			<div id="su-submit-wrap">
				{{ Form::submit('Submit', array('tabindex' => '10', 'class' => 'btn btn-primary', 'style' => 'padding: 6px 10px;background-color: rgb(143, 0, 5) !important;font-size: 22px;border-radius: 0;border: 0;margin-top: -9px;line-height: 1.1;')) }}
			</div>
		</div>




	{{ Form::close() }}
</div>
<style>
input.btn.btn-primary:hover {
  background-color: #ff0008 !important;
}
</style>
@include('footer')
