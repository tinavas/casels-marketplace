<!--START footer-->
<footer>
	<div class="wrapper">
		<div id="footer-1">
			<a href=".\"><img src={{ URL::asset('images/logo.png') }} alt="Casel's Logo" id="foot-logo"/></a>
		</div>
		<div id="footer-2">
			<h1 class="footer-header">Store Hours</h1>
			<p class="foot-text">Mon - Fri: 8:00 am - 10:00 pm</p>
			<p class="foot-text">Saturday 7:00 am - 10:00 pm</p>
			<p class="foot-text">Sunday: 7:00 am - 8:00 pm</p>
		</div>
		<div id="footer-3">
			<h1 class="footer-header">Address</h1>
			<p class="foot-text">8008 Ventnor Ave.</p>
			<p class="foot-text">Margate NJ 08402</p>
			<p class="foot-text">Phone: <a href="tel:16098232741" style="color:#323232;">609.823.2741</p></a>
			<p class="foot-text">Fax: 609.823.0894</p>
		</div>
		<div id="footer-4">
			<h1 class="footer-header">Quick Links</h1>
			<ul id="foot-links">
				<li>{{ HTML::link('', 'Home') }}</li>

				<li>{{ HTML::link('contact', 'Contact Us') }}</li>
				<li>{{ HTML::link('shop', 'Shop Now') }}</li>
				<li>{{ HTML::link('get-card', 'Casels Card') }}</li>
			</ul>
		</div>
		<div id="footer-5">
			<h1 class="footer-header">Connect</h1>
			<a href="#"><i class="fa fa-facebook-square"></i></a>
			<a href="#"><i class="fa fa-twitter-square"></i></a>
		</div>
		<div id="copy">
			<center>
				<p>
					&copy;2015 Casel's Marketplace | {{ HTML::link('privacy-policy', 'Privacy Policy', array('style' => 'color:#323232;')) }}  | {{ HTML::link('terms-of-use', 'Terms of Use', array('style' => 'color:#323232;')) }}
				</p>
				<a id="argyle" target="blank" style="color:#323232;" href="http://www.argyleinteractive.com">
					<img src="http://aidevserver.co/projects/casels/public/images/diamond-small.png">  Developed by Argyle Interactive  <img src="http://aidevserver.co/projects/casels/public/images/diamond-small.png">
				</a>
			</center>
		</div>
	</div>
</footer>
<!--END footer-->
</body>
</html>