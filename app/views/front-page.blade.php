@include('header')
<script>
	function parallax() {
		//var prlx_lyr_1 = document.getElementById('main-picture-home');
		//prlx_lyr_1.style.top = (110-(window.pageYOffset / 7.5)) + 'px';
		var prlx_lyr_2 = document.getElementById('home-text');
		prlx_lyr_2.style.top = (200 - (window.pageYOffset / 2)) + 'px';
	}
	window.addEventListener("scroll", parallax, false);

	$(window).load(function() {
		$('.home-logo-animater').animate(
			{left:"0"},

				1500,
				'easeInOutExpo'
			);
		$('.home-text-animater').delay(500).animate(
			{left:"0"},

				1500,
				'easeInOutExpo'
			);

		var pictures = ['url(images/home/Casels-38.jpg)','url(images/home/Casels-42.jpg)','url(images/home/Casels-100.jpg)','url(images/home/home-salad.jpg)','url(images/home/gluten-home.jpg)','url(images/home/Casels-36.jpg)'],
        textalign =['left','right','right','left','right','right','right'],
			i = 0,
        $body = $('#main-picture-home');

    	setInterval(function(){
			$body.css('background', pictures[i % pictures.length]).css('background-size','cover');
			$('#home-text').css('text-align', textalign[i % textalign.length]);
			i++;

							  }, 7000);

		var $changer = $("#home-text-changing"),
			words = ['Baked Goods','Fresh Produce','Crab Cakes','Fresh Salads','Gluten Free','Everything'],
			w = 0;

		setInterval(function(){ $changer.text(words[w++ % words.length]).fadeIn()},7000);
	});
</script>
<div id="main-picture-home">
	<div id="home-text">
		<div class="wrapper">
			<div class="home-logo-animater">
				<img src={{ URL::asset( 'images/logo-new.png') }} alt="Casel's Logo" id="mobile-nav-logo" class="home-logo-animater" style="width:300px;margin-bottom:15px;" /><br />
			</div>
			<div class="home-text-animater">
				<h1 class="carousel-main">"The Best of <br/><span id="home-text-changing">Everything</span>"</h1>
				<p class="carousel-sub">Hand Selected for the Best Quality</p>
				<p><a class="carousel-btn" href="#">Learn more</a></p>
			</div>
		</div>
	</div>
</div>




<div id="under-home-wrap">
	 <div id="shop-bar">
		 <div class="wrapper">
			<h1>Checkout Casel's Online Marketplace Today!</h1>
			<a href="shop" id="shop-bar-link">Shop Now</a>
		 </div>
	</div>
	<div id="main-actions">
		<div class="wrapper">
			@if ($message = Session::get('alert'))
			{{ $message }}
			@endif
			@if ($errors->has())
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						{{ $error }}<br>
					@endforeach
				</div>
			@endif

			<div id="mobile-phone-dir">
				<a href="get-card" class="no-dec-link">
					<div id="top-main-leftmob">
						<div class="top-main-wrapmob">
							<div class="top-main-innermob">
								<h1 class="top-main-titlemob" id="top-title-1"><i class="fa fa-compass"></i></h1>
								<a href="https://www.google.com/maps/place/Casel's+Marketplace/@39.3295905,-74.4992907,17z/data=!3m1!4b1!4m2!3m1!1s0x89c0ec0a0abca363:0xfead7dceed14182b" id="top-main-cta-2mob">Get Directions</a>
							</div>
						</div>
					</div>
				</a>
				<a href="shop" class="no-dec-link">
					<div id="top-main-rightmob">
					  <div class="top-main-wrapmob">
						  <div class="top-main-innermob">
							  <h1 class="top-main-titlemob" id="top-title-2"><i class="fa fa-mobile"></i></h1>
								<a href="tel:16098232741" id="top-main-cta-2mob">Call Us</a>
						  </div>
					  </div>
					</div>
				</a>
			</div>


			<div id="top-main-left">
				<div class="top-main-wrap">
					<div class="top-main-inner">
						<a href="get-card" class="no-dec-link"><h1 class="top-main-title" id="top-title-1">Apply to Become A Casel's Preferred Customer</h1></a>
						{{ HTML::link('get-card', 'Learn More', array('class' => 'top-main-cta', 'id' => 'top-main-cta-1')) }}

					</div>
				</div>
			</div>
			<div id="top-main-right">
			  <div class="top-main-wrap">
				  <div class="top-main-inner">
					  <a href="shop" class="no-dec-link"><h1 class="top-main-title" id="top-title-2">Shop Casel's Online</h1></a>
					  {{ HTML::link('shop', 'Shop Now', array('class' => 'top-main-cta', 'id' => 'top-main-cta-2')) }}
				  </div>
			  </div>
			</div>
		</div>
	</div>

	<div id="secondary-actions">
		<div class="wrapper">
			<div id="secondary-main-left">
				<div class="secondary-main-wrap">
					<div class="secondary-main-inner">
						<a href="delivery" class="no-dec-link"><h1 class="secondary-main-title" id="secondary-title-1">Home Delivery</h1></a>
						{{ HTML::link('delivery', 'Learn More', array('class' => 'secondary-main-cta', 'id' => 'bottom-cta-1')) }}
					</div>
				</div>
			</div>
			<div id="secondary-main-center">
				<div class="secondary-main-wrap">
					<div class="secondary-main-inner">
						<a href="catering" class="no-dec-link"><h1 class="secondary-main-title" id="secondary-title-2">Casel's Catering</h1></a>
						{{ HTML::link('catering', 'Learn More', array('class' => 'secondary-main-cta', 'id' => 'bottom-cta-2')) }}
					</div>
				</div>
			</div>
			<div id="secondary-main-right">
			  <div class="secondary-main-wrap">
				  <div class="secondary-main-inner">
					  <a href="http://casels.s3.amazonaws.com/bam_store/PDF/current_circular.pdf" class="no-dec-link"><h1 class="secondary-main-title" id="secondary-title-3">Save with Casel's Weekly Circular</h1></a>
					  <a href="http://casels.s3.amazonaws.com/bam_store/PDF/current_circular.pdf" class="secondary-main-cta" id="bottom-cta-3">View Now</a>
				  </div>
			  </div>
			</div>
		</div>
	</div>


	<div id="email-list">
		<h1 id="mailing-list-main">Sign up for our mailing list</h1>
		<h2 id="mailing-list-sub">Stay up to date with all of our deals and new products</h2>
		<div id="email-form">
			{{ Form::open(array('url' => 'email')) }}
				{{ Form::email('mailingListEmail', '', array('id' => 'email-input', 'placeholder' => 'Enter your email...')) }}
				{{ Form::submit('Submit', array('id' => 'email-submit')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>
<!--END home page-->
@include('footer')
