@include('header')
<!--START apply for card page-->
			@if ($message = Session::get('alert'))
			{{ $message }}
			@endif
			<div id="apply-for-card">
				<div id ="page-main-title">
					<div class="wrapper">
						<h1 id="page-h1">Apply for Your Casel's Card</h1>
					</div>
				</div>
				<div class="wrapper">
					<div id="right-apply-card" class="rac-mobile">
						<div id="right-apply-inner">
							<img src="./images/apply-card.png">
							<p></p>
						</div>
					</div>
					<div id="left-apply-form">
						{{ Form::open(array('url' => 'get-card/apply')) }}
							<div class="left-form-part">
								{{ Form::label('first-name', 'First Name:', array('class' => '')) }}
								{{ Form::text('first-name', '', array('tabindex' => '2', 'required' => 'true', 'id' => 'first-name')) }}
							</div>
							<div class="right-form-part">
								{{ Form::label('last-name', 'Last Name:', array('class' => '')) }}
								{{ Form::text('last-name', '', array('tabindex' => '3', 'required' => 'true', 'id' => 'last-name')) }}
							</div>

							<div class="left-form-part">
								{{ Form::label('street-1', 'Street Address 1:', array('class' => '')) }}
								{{ Form::text('street-1', '', array('tabindex' => '4', 'required' => 'true')) }}
							</div>
							<div class="right-form-part">
								{{ Form::label('street-2', 'Street Address 2:', array('class' => '')) }}
								{{ Form::text('street-2', '', array('tabindex' => '5')) }}
							</div>

							<div class="left-form-part">
								{{ Form::label('city', 'City:', array('class' => '')) }}
								{{ Form::text('city', '', array('tabindex' => '4', 'required' => 'true')) }}
							</div>
							<div class="right-form-part">
								<div class="inner-form-left">
									{{ Form::label('state', 'State:', array('class' => '')) }}
									{{ Form::text('state', '', array('tabindex' => '6', 'required' => 'true')) }}
								</div>
								<div class="inner-form-right">
									{{ Form::label('zip-code', 'Zip Code:', array('class' => '')) }}
									{{ Form::text('zip-code', '', array('tabindex' => '7', 'required' => 'true')) }}
								</div>
							</div>

							<div class="left-form-part">
								{{ Form::label('tel', 'Phone Number:', array('class' => '')) }}
								{{ Form::text('tel', '', array('tabindex' => '8', 'required' => 'true')) }}
							</div>

							<div class="left-form-part">
								{{ Form::label('email', 'Email:', array('class' => '')) }}
								{{ Form::email('email', '', array('tabindex' => '9', 'required' => 'true')) }}
							</div>

							<div class="left-form-part">
								<div class="inner-form-left">
									{{ Form::submit('Submit', array('tabindex' => '10', 'id' => 'apply-submit')) }}
								</div>
							</div>
						{{ Form::close() }}
					</div>
					<div id="right-apply-card" class="rac-normal">
						<div id="right-apply-inner">
							<img src="./images/apply-card.png">
							<p></p>
						</div>
					</div>
				</div>
			</div>
		<!--END apply for card page-->
@include('footer')
