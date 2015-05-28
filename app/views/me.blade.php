@include('header')
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<div class="container">             
		<figure style="margin-top: 10px; margin-bottom: 10px;">
			<img style="margin-bottom: 10px;" src="{{ Auth::user()->picture }}" alt="" class="img-circle img-responsive">
			<figcaption>
					<center>
						<label class="label label-info" style="text-align: center; font-size: 14px;">
							@if(Auth::user()->admin == 1) 
								Administrator 
							@elseif(Auth::user()->admin == 0) 
								Regular User 
							@endif
						</label>
					</center>
				</h3>
				<h2 style="text-align: center;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
			</figcaption>
		</figure>         
	</div>
@include('footer')