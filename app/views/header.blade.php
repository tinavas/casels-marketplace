<?php
date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$time = $hrs;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Casel's Marketplace | Home Page</title>
	
	<link rel="shortcut icon" type="image/png" href="http://aidevserver.co/projects/casels/public/images/favicon.png"/> 
	
	<!-- StyleSheets -->
	{{ HTML::style('css/bootstrap.css'); }} 
	{{ HTML::style('css/style.css'); }} {{ HTML::style('css/responsive.css'); }} 
	{{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); }} 
	{{ HTML::style('//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css');
	}}
	{{ HTML::style('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css'); }}

	<!-- End StyleSheets -->

	<!-- Fonts -->
	{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Yellowtail
'); }}
	<!-- End Fonts -->

	<!-- JavaScript -->
	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'); }} {{ HTML::script('//code.jquery.com/ui/1.11.3/jquery-ui.js'); }} {{ HTML::script('js/bootstrap.js'); }} {{ HTML::script('js/site.js'); }}
	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'); }}

	<!-- End JavaScript -->
	<script>
		(function() {
			var _fbq = window._fbq || (window._fbq = []);
			if (!_fbq.loaded) {
				var fbds = document.createElement('script');
				fbds.async = true;
				fbds.src = '//connect.facebook.net/en_US/fbds.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(fbds, s);
				_fbq.loaded = true;
			}
			_fbq.push(['addPixelId', '803020533109524']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript>
		<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=803020533109524&amp;ev=PixelInitialized" />
	</noscript>
</head>

<body>
	
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NDGK4G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDGK4G');</script>
<!-- End Google Tag Manager -->
	
	<!--START header-->
	<nav>
		<div id="mobile-nav-wrap">
			<div id="top-mobile-nav">
				<div class="wrapper">
					<div id="left-mobile">
						<i class="fa fa-bars" id="mobile-bars"></i>
					</div>
					<div id="right-mobile">
						<ul class="nav nav-tabs" style="float:right;border-bottom:0;">
							@if(Auth::check())


							<li>{{ HTML::link('profile', Auth::user()->first_name, array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false')) }}

								<ul class="dropdown-menu" role="menu" style="left: auto;right: 0;">
									@If(Auth::user()->admin==1)
									<li>{{ HTML::link('admin', 'Admin CP') }}</li>
									@else @endif
									<li>{{ HTML::link('logout', 'Log Out') }}</li>
								</ul>
							</li>
							<!--PUT DROP DOWN FOR PROFILE-->
							@else
							<li>{{ HTML::link('login', 'Login') }}</li>
							<li>{{ HTML::link('register', 'Sign Up', array('style' => 'background-color:rgb(44, 126, 213);color:white;')) }}</li>
							@endif
							<li role="presentation" class="dropdown">
								<a id="cart-bg" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding: 5px 10px;border-radius: 0px;background: transparent;color: #FFFFFF;font-size: 17px;margin-top: 7px;border: 1px solid #2C7ED5;">
									<i class="fa fa-shopping-cart"></i>
									<span class="caret"></span>
								</a>
								<?php $cart=Cart::content(); ?>
								<ul class="dropdown-menu" role="menu" style="left: auto;right: 0;width:250px;">
									@foreach($cart as $row)
									<li>
										<div class="cart-row">
											<img src="{{ $row->options->size }}">
											<h1>
													{{ $row->name }}
												</h1>
											<p>
												<label class="label label-info" style="margin-left: 30px;">${{ $row->price }}</label>
											</p>
										</div>
									</li>

									@endforeach
									<li style="text-align:center;">
										<a href="cart" class="view-cart-cta">View Cart</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="hours-check-mobile">
				<center>
					
					
					@if($day == 0 )
							@if($time > 07 and $time > 20)
								<span style="color:rgb(143, 0, 5);">Sorry We're closed! We open tomorrow at 8am.</span>
								@elseif($time > 08)
										<span style="color:green;" class="sun">We're Open Today  Until 8pm!</span>
								@else <span style="color:rgb(143, 0, 5);">Sorry We're Closed! We Open Today at 7am.</span>
							@endif
					@elseif($day == 1 or 2 or 3 or 4 or 5)
								@if($time > 08 and $time > 22)
								<span style="color:rgb(143, 0, 5);">Sorry We're closed! We open tomorrow at 8am.</span>
								@elseif($time > 08)
										<span style="color:green;" class="joe">We're Open Today Until 10pm!</span>
								@else <span style="color:rgb(143, 0, 5);">Sorry We're Closed! We Open Today at 8am.</span>
								@endif
							
						@elseif($day == 6)
							@if($time > 07 and $time >22)
								<span style="color:rgb(143, 0, 5);">Sorry We're closed! We open tomorrow at 8am.</span>
								@elseif($time > 08)
										<span style="color:green;" class="sat">We're Open Today Until 10pm!</span>
								@else <span style="color:rgb(143, 0, 5);">Sorry We're Closed! We Open Today at 7am.</span>
							@endif
						@else
					@endif
				
				
				</center>
			</div>
			
			
			
			<div id="mobile-nav-links">
				<div class="wrapper">
					<ul>
						<li>{{ HTML::link('', 'Home') }}</li>
						<li>{{ HTML::link('about', 'About Us') }}</li>
						<li>{{ HTML::link('catering', 'Catering') }}</li>
						<li>{{ HTML::link('delivery', 'Home Delivery') }}</li>
						<li>{{ HTML::link('careers', 'Careers') }}</li>
						<li>{{ HTML::link('contact', 'Contact Us') }}</li>
						<li>{{ HTML::link('shop', 'Shop Now', array('id' => 'shop-nav')) }}</li>
					</ul>

					<form method="POST" action="search" id="sub-nav-form" style="text-align: center;padding: 0;margin: 0 auto;width:100%;">
						<input type="text" name="search" placeholder="Search Items..." tabindex="1" id="nav-search" style="width: 70% !important;border-top-left-radius: 3px;border-bottom-left-radius: 3px;">
						<input type="submit" name="submit" tabindex="2" id="submit-nav-form" style="width: 30%;">
					</form>

				</div>
			</div>
		</div>
		<div id="mobile-banner">
		<a href="http://aidevserver.co/projects/casels/public/"><img src={{ URL::asset( 'images/logo-new.png') }} alt="Casel's Logo" id="mobile-nav-logo" /></a>
		</div>
		<!--FORM ABOVE TEST SWAP WITH NAV-->


		<div id="main-nav">
			<div class="nav-wrapper">
				<a href="http://aidevserver.co/projects/casels/public/">
					<img src={{ URL::asset( 'images/logo-new.png') }} alt="Casel's Logo" id="nav-logo" />
				</a>
				<form method="POST" action="search" id="sub-nav-form">
					<span id="all-cover">
							    <span>All</span>
					<span class="caret"></span>
					</span>
					<select name="category" id="search-selector">
						<option>Home-Goods</option>
						<option>Board-Games</option>
						<option>Silverware</option>
						<option>Antiques</option>
					</select>


					<input type="text" name="search" placeholder="Search Items..." tabindex="1" id="nav-search" style="width: 75%;" />
					<input type="submit" name="submit" tabindex="2" id="submit-nav-form" />
				</form>
				<div id="featured-area">
					<!--<h1>
						New Summer Hours!
					</h1>
					<a href="https://www.facebook.com/Casels?fref=ts">Click to Connect</a>-->
					<a href="http://aidevserver.co/projects/casels/public/contact"><img src="http://aidevserver.co/projects/casels/public/images/summer-banner.jpg" id="header-news-annoucement"></a>
				</div>
			</div>
		</div>
		<div id="sub-clearfix"></div>
		<div id="sub-nav">
			<div class="nav-wrapper">
				<div id="left-fixed-drop">
					<i class="fa fa-bars" id="mobile-bars"></i>
				</div>
				<ul class="nav nav-tabs" style="float:left;" id="department-main">
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding: 0;border-radius: 0px;background: transparent;color: white;margin-right: 40px;border: 0;">
							<span style="font-size:11px;">Shop by</span> 
							<br /> <span style="font-weight:bold;">Department</span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Home Goods</a>
							</li>
							<li><a href="#">Board Games</a>
							</li>
							<li><a href="#">Silverware</a>
							</li>
							<li><a href="#">Antiques</a>
							</li>
						</ul>
					</li>
				</ul>


				<!--NAV UNDER TEST-->

				<div id="right-nav">
					<ul>
						<li>{{ HTML::link('', 'Home') }}</li>
						<li>{{ HTML::link('about', 'About Us') }}</li>
						<li>{{ HTML::link('catering', 'Catering') }}</li>
						<li>{{ HTML::link('delivery', 'Home Delivery') }}</li>
						<li>{{ HTML::link('careers', 'Careers') }}</li>
						<li>{{ HTML::link('contact', 'Contact Us', array('id' => 'contact-nav')) }}</li>
						<li>{{ HTML::link('shop', 'Shop Now', array('id' => 'shop-nav')) }}</li>
					</ul>
				</div>
				<form method="POST" action="search" id="sub-nav-form" class="sub-fixed-form">
					<span id="all-cover">
							    <span>All</span>
					<span class="caret"></span>
					</span>
					<select name="category" id="search-selector">
						<option>Home-Goods</option>
						<option>Board-Games</option>
						<option>Silverware</option>
						<option>Antiques</option>
					</select>


					<input type="text" name="search" placeholder="Search Items..." tabindex="1" id="nav-search" style="width: 70%;" />
					<input type="submit" name="submit" tabindex="2" id="submit-nav-form" />
				</form>

				<ul class="nav nav-tabs" style="float:right;" id="cart-main">
					@if(Auth::check())
					<li>{{ HTML::link('profile/me', Auth::user()->first_name ) }}</li>
					<!--PUT DROP DOWN FOR PROFILE-->
					@If(Auth::user()->admin==1)
					<li>{{ HTML::link('admin', 'Admin CP') }}</li>
					@else @endif
					<li>{{ HTML::link('logout', 'Log Out', array('style' => 'margin-right:10px;')) }}</li>
					@else
					<li>{{ HTML::link('login', 'Login') }}</li>
					<li>{{ HTML::link('register', 'Sign Up', array('style' => 'margin-right:10px;')) }}</li>
					@endif
					<li role="presentation" class="dropdown">
						<a id="cart-bg" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding: 8px 15px;border-radius: 0px;background: transparent;color: white;font-size: 17px;margin-top: 0;border: 1px solid (7, 49, 73);border-bottom:0;">
							<i class="fa fa-shopping-cart"></i>
							<span class="caret"></span>
						</a>
						<?php $cart=Cart::content(); ?>
						<ul class="dropdown-menu" role="menu" style="left: auto;right: 0; width:250px;">
							@foreach($cart as $row)
							<li>
								<div class="cart-row">
									<img src="{{ $row->options->size }}">
									<h1>
												{{ $row->name }}
											</h1>
									<p>
										<label class="label label-info" style="margin-left: 30px;">${{ $row->price }}</label>
									</p>
								</div>
							</li>

							@endforeach
							<li style="text-align:center;">
								<a href="cart" class="view-cart-cta">View Cart</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="hours-check-">
				<center>
					
					
					@if($day == 0 )
							@if($time > 07 and $time > 20)
								<span style="color:rgb(143, 0, 5);">Sorry We're closed! We open tomorrow at 8am.</span>
								@elseif($time > 08)
										<span style="color:green;" class="sun">We're Open Today  Until 8pm!</span>
								@else <span style="color:rgb(143, 0, 5);">Sorry We're Closed! We Open Today at 7am.</span>
							@endif
					@elseif($day == 1 or 2 or 3 or 4 or 5)
								@if($time > 08 and $time > 22)
								<span style="color:rgb(143, 0, 5);">Sorry We're closed! We open tomorrow at 8am.</span>
								@elseif($time > 08)
										<span style="color:green;" class="week">We're Open Today Until 10pm!</span>
								@else <span style="color:rgb(143, 0, 5);">Sorry We're Closed! We Open Today at 8am.</span>
								@endif
							
						@elseif($day == 6)
							@if($time > 07 and $time >22)
								<span style="color:rgb(143, 0, 5);">Sorry We're closed! We open tomorrow at 8am.</span>
								@elseif($time > 08)
										<span style="color:green;" class="sat">We're Open Today Until 10pm!</span>
								@else <span style="color:rgb(143, 0, 5);">Sorry We're Closed! We Open Today at 7am.</span>
							@endif
						@else
					@endif
				
				
				</center>
				<i class="fa fa-times" id="hide-hours" style="float:right;margin-top: -22px;margin-right: 15px;font-size:22px;color:rgb(143,0,5);"></i>	
			</div>
		</div>
		<div id="sub-nav-expandable">
			<ul>
				<li>{{ HTML::link('', 'Home') }}</li>
				<li>{{ HTML::link('about', 'About Us') }}</li>
				<li>{{ HTML::link('catering', 'Catering') }}</li>
				<li>{{ HTML::link('delivery', 'Home Delivery') }}</li>
				<li>{{ HTML::link('careers', 'Careers') }}</li>
				<li>{{ HTML::link('contact', 'Contact Us') }}</li>
				<li>{{ HTML::link('shop', 'Shop Now', array('id' => 'shop-nav')) }}</li>
			</ul>
		</div>
	</nav>
	<!--END header-->