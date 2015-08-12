<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('front-page');
	}

	public function getShop()
	{
		return View::make('shopsoon');
	}

	public function getComingSoon()
	{
		return View::make('shopsoon');
	}

	public function getAbout()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'About Us'],['pageContent' => "
			<p><img class='aligncenter size-full wp-image-44' src='./images/about/about_us_store.jpg' alt='' width='100%' height='auto'></p>
			<p>Since first opening our doors as a small grocery store in Atlantic City in 1929, Casel’s has been a family-owned market focused on bringing the finest quality ingredients to friends and neighbors. Today that tradition continues with the Seiden family- Howard, Randi, Rachel and Adam Seiden, who continue to bring that family atmosphere to Casel’s. They have owned the store since 1982, upon purchasing it from the original owners, Abe and Herman Casel. While other businesses have opened and closed, Casel’s continues to turn new visitors into life-long customers by combining the memories, tastes, and smells of eras past with today’s most exciting products from the region and around the world.</p>
			<p>Casel’s staff makes shopping a pleasure! You’d be hard pressed to find a more knowledgeable, passionate group of food fanatics anywhere. In fact, these folks get such a joy from Casel’s, it’s hard to get them to head home. Perhaps that’s why so many of our team members have been with Casel’s for 30 years or more, like Jack, Director of Store Operations, who started his Casel’s career as a part-time Stock Clerk in 1972. And George, our Head Baker, who has been creating Casel’s killer cinnamon buns from scratch for over three decades.</p>

			<p>Administrative Manager JoAnn joined the team more than 40 years ago in 1975 and has been ensuring smooth sailing ever since. And what began as after school jobs for Clem and Brian, have ripened into careers as Store Manager and Assistant Manager, respectively. Our team does what they love and love what they do. They also live to “talk food” so be sure and tell them all about that exciting new product or recipe you tried.</p>

			<p>At Casel’s, we go beyond the basics to surprise and entice you. A few times each year, Jack and Clem attend food shows to bring you artisan products, specialty foods, and ethnic brands you won’t find anywhere else. A popular stop for busy moms and professionals, our deli is full of pre-cooked meals, side-dishes, and sensational salads. Our butcher offers the finest cuts of quality meats, oceans of tasty treasures await your discovery in our seafood department, and our produce department is always brimming with farm-fresh fruits and vegetables each season.</p>
			<p style='text-align:center;font-family:lithos;font-size:18px;  margin: 40px 0 0 0;'><strong>CASEL’S VALUED SENIOR STAFF</strong></p>
			<div style='display:table;width:100%;height:auto;padding:40px 0;'>
				<div id='top-1-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Howard & Randi Seiden</strong><br />Owners<br>
				</div>
				<div id='top-2-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Jack Ewell</strong><br />Director of Store Operations<br>
				</div>
				<div id='top-3-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>JoAnn Sedlock</strong><br />Administrative Store Manager<br>
				</div>
				<div id='top-4-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Clemente Ortiz</strong><br />Operating Store Manager<br>
				</div>
				<div id='bot-1-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Phil Cappuccio</strong><br />Assistant Store Manager<br>
				</div>
				<div id='bot-2-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Brian Ungerer</strong><br />Assistant Store Manager<br>
				</div>
				<div id='bot-3-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Liliana Luna</strong><br />Front End Manager<br>
				</div>
				<div id='bot-4-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Robert O’Brien</strong><br />Meat Manager</p>
				</div>
				<div id='bot-1-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Jessica Velasquez</strong><br />Deli & Catering Manager<br>
				</div>
				<div id='bot-2-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Scott Adams</strong><br />Dairy Manager<br>
				</div>
				<div id='bot-3-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Stacey Youhas</strong><br />Bakery Manager<br>
				</div>
				<div id='bot-4-emp' class='emp-pic-prof'>
					<!--<img src='./images/sidebar.jpg' class='emp-headshot'><br />-->
					<strong>Joan Lucas</strong><br />Personal Shopper/Gift Basket Co-ordinator</p>
				</div>
			</div>
			<header id='myCarousel' class='carousel slide' style='height: 550px;margin:20px 0;padding: 10px;background-color: #EDE9E1;box-shadow: 0 0 3px rgba(0, 0, 0, 0.36);'>
					<!-- Indicators -->
					<ol class='carousel-indicators'>
						<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
						<li data-target='#myCarousel' data-slide-to='1'></li>
						<li data-target='#myCarousel' data-slide-to='2'></li>
						<li data-target='#myCarousel' data-slide-to='3'></li>
						<li data-target='#myCarousel' data-slide-to='4'></li>
						<li data-target='#myCarousel' data-slide-to='5'></li>
						<li data-target='#myCarousel' data-slide-to='6'></li>
						<li data-target='#myCarousel' data-slide-to='7'></li>
						<li data-target='#myCarousel' data-slide-to='8'></li>
						<li data-target='#myCarousel' data-slide-to='9'></li>
						<li data-target='#myCarousel' data-slide-to='10'></li>
						<li data-target='#myCarousel' data-slide-to='11'></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class='carousel-inner'>
						<div class='item active'>
							<div class='fill' style='background-image:url(./images/about/about-14.jpg);background-position:100%;'>
								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Our Meat Department offers a wide variety of choices. Beef, pork, chicken, fresh fish, and Empire products are part of our offerings. Try our Bell & Evans Chicken, you’ll taste the difference. Try our Sirloin Burgers for your grilling. One taste and you will never try another.
									  </p>
									</div>
								</div>
							</div>
						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-3.jpg);background-position:100%;'>
								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									 Be it chips, snacks, salsa, salad dressings, mustards, BBQ sauces or hundreds of other offerings. Casel’s has it!
									  </p>
									</div>
								</div>
							</div>
						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/bakery-3.jpg);'></div>

								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Casel's makes our breakfast danish from scratch, seven days per week. Famous for our delicious treats, our Sticky Buns are a must try. We have a variety of desserts that should satisfy any craving.
									  </p>
									</div>
								</div>

						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-5.jpg);'></div>

								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Worn out from the sun? Need a drink to give you that much needed natural energy boost this summer? Get your fruit servings 'on the go' and try Casels wide selection of fruit juices.
									  </p>
									</div>
								</div>

						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-12.jpg);'></div>

								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Pre-packaged and ready to go, we have a full line of nut mixes to satisfy the most health-conscious customers.
									  </p>
									</div>
								</div>

						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-1.jpg);'></div>

								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Stonewall Kitchen, a gourmet line with dozens of items rarely found all in one place. We have every sauce, jam, dressing, aioli, cracker, chip, baking mix, pancake mix, hand lotion and dish soap available. Check us out.
									  </p>
									</div>
								</div>

						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-8.jpg);'></div>

								<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Crab Cakes, made fresh daily in our Meat Department, are the best on the island. Once you try one, you won't go anywhere else.
									  </p>
									</div>
								</div>

						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-20.jpg);'></div>
							<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  Our Produce Department gets deliveries seven days per week. Jersey Fresh items from farm to Aisle One as soon as they become available. Our organic section keeps growing to meet your needs.
									  </p>
									</div>
								</div>
						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-10.jpg);'></div>
							<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									   Need something iconic for your next thank you? Casel's gift baskets are both delicious and entertaining. Johnsons Popcorn, Jelly Beans, and Beach Toys are just a few of your choices.
									  </p>
									</div>
								</div>
						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-16.jpg);'></div>
							<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									  A full line of Gluten Free items throughout our store. B Free Bread is one item that will satisfy your bread requests.
									  </p>
									</div>
								</div>
						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-17.jpg);'></div>
							<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									   Buy our recyclable bag and help the environment. When you shop, we credit you 5¢ for each bag you use instead of paper or plastic.
									  </p>
									</div>
								</div>
						</div>
						<div class='item'>
							<div class='fill' style='background-image:url(./images/about/about-18.jpg);'></div>
							<div class='wrapper'>
									<div class='carousel-caption'>
									  <p>
									 Create your own salad at Casel's with over twenty offerings and eight salad dressings.
									  </p>
									</div>
								</div>
						</div>
					</div>

					<!-- Controls -->
					<a class='left carousel-control' href='#myCarousel' data-slide='prev'>
						<span class='icon-prev'></span>
					</a>
					<a class='right carousel-control' href='#myCarousel' data-slide='next'>
						<span class='icon-next'></span>
					</a>
				</header>



			"]);
	}
	public function getCatering()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'Catering'],['pageContent' => '
			<p style="margin-bottom:20px">
			Our trays are the best in South Jersey. Our staff can accommodate any request. For the freshest sandwich, meat and smoked fish trays for all occasions…our catering department is at your service. Dessert trays, Fruit trays, Vegetable trays among others available. Call <a href="tel:16098232741" class="bold-link">609-823-2741.</a> Ask for Jessica, our Catering manager.
			</p>
			<center><a href="./images/catering/catering_brochure_new.pdf" target="_blank" id="view-brochure">View Brochure</a></center>

			<p></p>

			<div id="page-main-title" style="margin: 20px 0;"></div>
			<div id="catering-selector">
	<!--appitizer platters-->
				<h1 id="appitizers-sel" class="catering-title-selector">Appetizers & Desserts<span style="float:right;"><i class="fa fa-chevron-circle-down"></i></span></h1>
					<div id="appitizers-dropdown">
					<p>We can accomodate any request just call <a href="tel:16098232741" class="bold-link">609-823-2741.</a> Ask for Jessica, our Catering manager.</p>
						<div class="catering-sub-wrap-top">
							<div class="cat-left">
								<div class="catering-img-center">
									<img src="./images/catering/cheese.jpg">
								</div>

								<h1 class="catering-title">Cheese Tray</h1>
								<p>This tray offers a nice selection of cheeses and crackers that compliment anything else you may choose to serve.<br>
								Serves 8 -10 people.</p>
							</div>

							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/crudit.jpg">
								</div>

								<h1 class="catering-title">Crudite Tray</h1>
								<p>Delicious fresh veggies from our own produce department. Carrots, celery, peppers, cukes, mini tomatoes, broccoli and cauliflower will keep your guests happy, until the next platter.</p>
							</div>
						</div>

						<div class="catering-sub-wrap" style="margin:0;">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/cold-shrimp.jpg">
								</div>

								<h1 class="catering-title">Cold Shrimp Tray</h1>
								<p>A nice compliment for any occasion. A generous supply of freshly peeled shrimp with a center of cocktail sauce.<br>
								Serves 10 people.</p>
							</div>

							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/wings.jpg">
								</div>

								<h1 class="catering-title">Wings Tray</h1>
								<p>These wings come in a variety of flavors Buffalo, Barbecue, Mild or Zesty. Served with a blue cheese dressing, celery and extra sauce.<br>Serves 8 -10 people<p>
							</div>
						<div class="catering-sub-wrap" style="margin:0;">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/fruit.jpg">
								</div>
								<h1 class="catering-title">Cut Fruit Platter</h1>
								<p>Delicious fresh fruit picked that day from our own fruit department. If it’s not fresh you won’t see it on your platter.</p>
							</div>
							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/desert.jpg">
								</div>
								<h1 class="catering-title">Dessert Tray</h1>
								<p>Our delicious miniature Danish and Casel’s Classic Cinnamon Buns are baked from scratch. Order a tray to fit your needs.</p>
							</div>
						</div>
						</div>
					</div>
				<div id="page-main-title" style="margin: 20px 0;padding:0;"></div>


	<!--Party platters-->
				<h1 id="party-sel" class="catering-title-selector">Party Platters <span style="float:right;"><i class="fa fa-chevron-circle-down"></i></span></h1>
					<div id="party-dropdown">
					<p>We can accomodate any request just call <a href="tel:16098232741" class="bold-link">609-823-2741.</a> Ask for Jessica, our Catering manager.</p>
						<div class="catering-sub-wrap-top">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/sandwhich.jpg">
								</div>
								<h1 class="catering-title">Sandwich Platter</h1>
								<p>All of our meats are cooked fresh in our kitchen daily. Tell us your choices of meats and cheeses, the number of people that you would like to serve and we do the rest. Our trays include potato salad, pickles and olives. On the side we also supply cole slaw, russian dressing, mayonnaise and mustard. When you get the tray home, all you have to do is unwrap it.</p>
							</div>
							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/meat.jpg">
								</div>
								<h1 class="catering-title">Meat Tray</h1>
								<p>The only difference between this tray and our sandwich tray is that your guests make the sandwiches instead of us. We supply everything including rye bread and rolls. Casel’s takes into account that when making your own sandwich you may not make it as thick as we do on our sandwich tray but you will make more than one. It depends on what you want your guests to do.</p>
							</div>
						</div>
						<div class="catering-sub-wrap">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/smoked-fish.jpg">
								</div>
								<h1 class="catering-title">Smoked Fish Tray</h1>
								<p>Our famous homemade whitefish salad surrounded by kippered salmon, freshly sliced nova lox and our own chopped herring. Add tomatoes, red onions, black and green olives on a bed of lettuce and you have our tray. We include cream cheese, 1-1/2 bagels per person, and two choices of sliced cheese. Just tell us the number of people you are having and place your order. We usually count kids as a 1/2 person or less. We can substitute or add anything to meet your needs.</p>
							</div>
						</div>
					</div>
				<div id="page-main-title" style="margin: 20px 0;padding:0;"></div>


	<!--Dinners-->
				<h1 id="dinners-sel"  class="catering-title-selector">Dinners <span style="float:right;"><i class="fa fa-chevron-circle-down"></i></span></h1>

					<div id="dinners-dropdown">
						<p>We can accomodate any request just call <a href="tel:16098232741" class="bold-link">609-823-2741.</a> Ask for Jessica, our Catering manager and let us help you with your menu. Here are just four of the possibilities...</p>
						<div class="catering-sub-wrap-top">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/filet-dinner.jpg">
								</div>
								<h1 class="catering-title">Filet Dinner</h1>
								<p></p>
							</div>
							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/rib-roast.jpg">
								</div>
								<h1 class="catering-title">Rib Roast</h1>
								<p></p>
							</div>
						</div>
						<div class="catering-sub-wrap">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/pork-roast.jpg">
								</div>
								<h1 class="catering-title">Pork Roast</h1>
								<p></p>
							</div>
							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/turkey.jpg">
								</div>
								<h1 class="catering-title">Turkey Dinner</h1>
								<p></p>
							</div>
						</div>
					</div>
				<div id="page-main-title" style="margin: 20px 0;padding:0;"></div>


	<!--fruits and baskets-->
				<h1 id="baskets-sel"  class="catering-title-selector">Gift & Fruit Baskets<span style="float:right;"><i class="fa fa-chevron-circle-down"></i></span></h1>
					<div id="baskets-dropdown">
					<p>We can accomodate any request just call <a href="tel:16098232741" class="bold-link">609-823-2741.</a> Ask for Jessica, our Catering manager.</p>
						<div class="catering-sub-wrap-top">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/gift-basket.jpg">
								</div>
								<h1 class="catering-title">Gift Baskets</h1>
								<p></p>
							</div>
							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/fruit-basket.jpg">
								</div>
								<h1 class="catering-title">Fruit Basket</h1>
								<p></p>
							</div>
						</div>
						<div class="catering-sub-wrap">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/large-fruit.jpg">
								</div>
								<h1 class="catering-title">Luau Fruit Bowl</h1>
								<p></p>
							</div>
						</div>
					</div>
				<div id="page-main-title" style="margin: 20px 0;padding:0;"></div>


	<!--Desserts platters
				<h1 id="desserts-sel" class="catering-title-selector">Desserts <span style="float:right;"><i class="fa fa-chevron-circle-down"></i></span></h1>
					<div id="desserts-dropdown">
						<div class="catering-sub-wrap">
							<div class="cat-left" >
								<div class="catering-img-center">
									<img src="./images/catering/fruit.jpg">
								</div>
								<h1 class="catering-title">Cut Fruit Platter</h1>
								<p>Delicious fresh fruit picked that day from our own fruit department. If it’s not fresh you won’t see it on your platter.</p>
							</div>
							<div class="cat-right" >
								<div class="catering-img-center">
									<img src="./images/catering/desert.jpg">
								</div>
								<h1 class="catering-title">Dessert Tray</h1>
								<p>Our delicious miniature Danish and Casel’s Classic Cinnamon Buns are baked from scratch. Order a tray to fit your needs.</p>
							</div>
						</div>
					</div>
				<div id="page-main-title" style="margin: 20px 0;padding:0;"></div>-->
			</div>


	']);
	}
	public function getDelivery()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'Home Delivery'],['pageContent' => '
		<h3 style="font-family: lithosBlack;">Do your grocery shopping from home!</h3>
		<p>Delivery to your door is available at Casel’s. Order by noon for afternoon delivery, Monday - Friday. Just <strong>$12.50</strong>.</p>

		<p>To place your order please call <a href="tel:16098231805" class="bold-link">609-823-1805</a> and ask for our personal shopper, Joan Lucas. Or you can fax your order to <a href="tel:16098231805" class="bold-link">609-823-0894</a>. Also, you can email your order to <a href="mailto:JoAnn@casels.com." class="bold-link">JoAnn@casel’s.com.</a></p>

		<p>If you fax or email, please call JoAnn Sedlock, our Administrative Store Manager, to let her know you placed an order. There is no other business that takes the time and care in making sure the items you ordered are fresh and correctly picked. Casel’s personal service is something we take pride in.</p>

		<p>Casel’s has been a family-owned market focused on bringing the finest quality ingredients to friends and neighbors.</p>

		<div id="page-main-title">
		</div>

		<img src="./images/Casels-129.jpg" alt="Casels Home Delivery" />

		<!--<form method="POST" action="#">
			<div class="left-form-part">
				<p>First Name*:</p>
				<input type="text" tabindex="2" required name="first-name" id="first-name">
			</div>
			<div class="right-form-part">
				<p>Last Name*:</p>
				<input type="text" tabindex="3" required name="last-name" id="last-name">
			</div>

			<div class="left-form-part">
				<p>Email*:</p>
				<input type="email" tabindex="9" required name="email">
			</div>
			<div class="right-form-part">
				<p>Phone Number:</p>
				<input type="tel" tabindex="8"required name="phone-number">
			</div>
			<div class="full-form-part">
				<p>Message*:</p>
				<textarea required name="text-area"></textarea>
			</div>
			<div class="left-form-part">
				<div class="inner-form-left">
					<input type="submit" tabindex="10" value="submit" id="apply-submit">
				</div>
			</div>
		</form>-->

		']);
	}
	public function getCareers()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'Careers'],['pageContent' => '
			<p>
			<div id="careers-hover">
				<img src="./images/careers-ps.jpg" id="chover-hide">
				<a href="http://casels.com/PDFs/emp_app_form.pdf" id="chover-link">Apply Today</a>
			</div>

			From time to time, <strong>Casel’s</strong> has opportunities for hard-working, dependable, service-oriented individuals to serve our customers.<br>
			<p>We are currently looking to fill positions.</p>
			<br>Please feel free to fill out an application for employment, and we will contact you or keep your name on file for consideration. Click on the button below to download and print the application; you can fill it out and bring (or mail) it to our store.</p>
			<p style="text-align:center;margin-top:20px" ><a href="http://casels.com/PDFs/emp_app_form.pdf" id="car-link">Application for Employment <i class="fa fa-external-link"></i></a></p>
			<p>&nbsp;</p>
			<p><em>Casel’s is an equal opportunity employer.</em></p>']);
	}
	public function getContact()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'Contact Us'],['pageContent' => ' <style>
      #map-canvas {
        width: 100%;
        height: 400px;
      }
    </style>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(39.329528,-74.499246);
  var mapOptions = {
    zoom: 18,
    center: myLatlng,
	scrollwheel:false
  }
  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: "Hello World!"
  });
}

google.maps.event.addDomListener(window, "load", initialize);

    </script>
		 <script src="https://maps.googleapis.com/maps/api/js"></script>

		<div id="map-canvas">

		</div>
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3086.1763443021364!2d-74.49929099999996!3d39.32959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0ec0a0abca363%3A0xfead7dceed14182b!2sCasel&#39;s+Supermarket!5e0!3m2!1sen!2sus!4v1426100197875" width="100%" height="450" frameborder="0" scrollwheel="false" style="border:0;pointer-events:none;"></iframe>-->
			<div id="left-contact">
				<form method="POST" action="contact/send">
					<div class="left-form-part">
						<p>First Name*:</p>
						<input type="text" tabindex="2" required name="first-name" id="first-name">
					</div>
					<div class="right-form-part">
						<p>Last Name*:</p>
						<input type="text" tabindex="3" required name="last-name" id="last-name">
					</div>

					<div class="left-form-part">
						<p>Email*:</p>
						<input type="email" tabindex="9" required name="email">
					</div>
					<div class="right-form-part">
						<p>Phone Number:</p>
						<input type="tel" tabindex="8"required name="phone-number">
					</div>
					<div class="full-form-part">
						<p>Message*:</p>
						<textarea required name="message"></textarea>
					</div>
					<div class="left-form-part">
						<div class="inner-form-left">
							<input type="submit" name="submit" tabindex="10" value="submit" id="apply-submit">
						</div>
					</div>
				</form>
			</div>
			<div id="right-contact">
			<h1 style="font-size: 14px; font-family: lithosBlack;">Store Hours:</h1>
			<p style="font-size: 12px;">Mon - Fri: 8:00 am - 10:00 pm</p>
			<p style="font-size: 12px;">Saturday: 7:00 am - 10:00 pm</p>
			<p style="font-size: 12px;">Sunday: 7:00 am - 8:00 pm</p>
			<br />
			<h1 style="font-size: 14px; font-family: lithosBlack;">Address:</h1>
			<p style="font-size: 12px;">8008 Ventor Ave.</p>
			<p style="font-size: 12px;">Margate NJ 08402</p>
			<p style="font-size: 12px;">Phone: <a href="tel:16098232741" class="bold-link">609.823.2741</a></p>
			<p style="font-size: 12px;">Fax: 609.823.0894</p>
			<br />
			</div>
			']);
	}
	public function getCard()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('get-card');
	}
	public function getPrivacyPolicy()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'Privacy Policy'],['pageContent' => '
			Privacy Policy
We, the Operators of this Website, provide it as a public service to our users.
Your privacy is important to the us. Our goal is to provide you with a personalized online experience that provides you with the information, resources, and services that are most relevant and helpful to you. This Privacy Policy has been written to describe the conditions under which this web site is being made available to you. The Privacy Policy discusses, among other things, how data obtained during your visit to this web site may be collected and used. We strongly recommend that you read the Privacy Policy carefully. By using this web site, you agree to be bound by the terms of this Privacy Policy. If you do not accept the terms of the Privacy Policy, you are directed to discontinue accessing or otherwise using the web site or any materials obtained from it. If you are dissatisfied with the web site, by all means contact us; otherwise, your only recourse is to disconnect from this site and refrain from visiting the site in the future.
The process of maintaining a web site is an evolving one, and the Operators may decide at some point in the future, without advance notice, to modify the terms of this Privacy Policy. Your use of the web site, or materials obtained from the web site, indicates your assent to the Privacy Policy at the time of such use. The effective Privacy Policy will be posted on the web site, and you should check upon every visit for any changes.
Sites Covered by this Privacy Policy
This Privacy Policy applies to all the Operators-maintained web sites, domains, information portals, and registries.
Children’s Privacy
The Operators are committed to protecting the privacy needs of children, and we encourage parents and guardians to take an active role in their children’s online activities and interests. The Operators do not intentionally collect information from minors, and the Operators do not target its web site to children.
Links to Non-Operators Web Sites
The Operator’s web sites may provide links to third-party web sites for the convenience of our users. If you access those links, you will leave the Operators’s web site. the Operators do not control these third-party websites and cannot represent that their policies and practices will be consistent with this Privacy Policy. For example, other web sites may collect or use personal information about you in a manner different from that described in this document. Therefore, you should use other web sites with caution, and you do so at your own risk. We encourage you to review the privacy policy of any web site before submitting personal information.
Types of Information We Collect
Non-Personal Information
Non-personal information is data about usage and service operation that is not directly associated with a specific personal identity. The Operators may collect and analyze non-personal information to evaluate how visitors use the Operator’s websites.
Aggregate Information
The Operators may gather aggregate information, which refers to information your computer automatically provides to us and that cannot be tied back to you as a specific individual. Examples include referral data (the web sites you visited just before and just after our site), the pages viewed, time spent at our Website, and Internet Protocol (IP) addresses. An IP address is a number that is automatically assigned to your computer whenever you access the Internet. For example, when you request a page from one of our sites, our servers log your IP address to create aggregate reports on user demographics and traffic patterns and for purposes of system administration.
Log Files
Every time you request or download a file from the web site, the Operators may store data about these events and your IP address in a log file. The Operators may use this information to analyze trends, administer the website, track users’ movements, and gather broad demographic information for aggregate use or for other business purposes.
Cookies
Our site may use a feature of your browser to set a “cookie” on your computer. Cookies are small packets of information that a web site’s computer stores on your computer. The Operator’s web sites can then read the cookies whenever you visit our site. We may use cookies in a number of ways, such as to save your password so you don’t have to re-enter it each time you visit our site, to deliver content specific to your interests and to track the pages you’ve visited. These cookies allow us to use the information we collect to customize your experience so that your visit to our site is as relevant and as valuable to you as possible.
Most browser software can be set up to deal with cookies. You may modify your browser preference to provide you with choices relating to cookies. You have the choice to accept all cookies, to be notified when a cookie is set or to reject all cookies. If you choose to reject cookies, certain of the functions and conveniences of our web site may not work properly, and you may be unable to use those of the Operators’s services that require registration in order to participate, or you will have to re-register each time you visit our site. Most browsers offer instructions on how to reset the browser to reject cookies in the “Help” section of the toolbar. We do not link non-personal information from cookies to personally identifiable information without your permission.
Web Beacons
The Operator’s web site also may use web beacons to collect non-personal information about your use of our web site and the web sites of selected sponsors or members, your use of special promotions or newsletters, and other activities. The information collected by web beacons allows us to statistically monitor how many people are using our web site and selected sponsors’ sites; how many people open our emails; and for what purposes these actions are being taken. Our web beacons are not used to track your activity outside of our web site or those of our sponsors. The Operators do not link non-personal information from web beacons to personally identifiable information without your permission.
Personal Information
Personal information is information that is associated with your name or personal identity. The Operators use personal information to better understand your needs and interests and to provide you with better service. On some of the Operators web pages, you may be able to request information, subscribe to mailing lists, participate in online discussions, collaborate on documents, provide feedback, submit information into registries, register for events, apply for membership, or join technical committees or working groups. The types of personal information you provide to us on these pages may include name, address, phone number, e-mail address, user IDs, passwords, billing information, or credit card information.
Members-Only Web Sites
Information you provide on Operators’s membership applications is used to create a member profile, and some information may be shared with other of the Operator’s individual member representatives and organizations. Member contact information may be provided to other members on a secure web site to encourage and facilitate collaboration, research, and the free exchange of information among the Operator’s members, but we expressly prohibit members from using member contact information to send unsolicited commercial correspondence. The Operator’s members may be automatically added to the Operator’s mailing lists. From time to time, member information may be shared with event organizers and/or other organizations that provide additional benefits to the Operator’s members. By providing us with your personal information on the membership application, you expressly consent to our storing, processing, and distributing your information for these purposes.
How We Use Your Information
The Operators may use non-personal data that is aggregated for reporting about the Operator’s website usability, performance, and effectiveness. It may be used to improve the experience, usability, and content of the site.
The Operators may use personal information to provide services that support the activities of the Operator’s members and their collaboration on the Operator’s standards and projects. When accessing the Operator’s members-only web pages, your personal user information may be tracked by the Operators in order to support collaboration, ensure authorized access, and enable communication between members.
Credit card information may be collected to facilitate membership applications; or if you purchase a product or service from our website, such information will not be kept longer than necessary for providing the services requested. Credit card numbers are used only for processing payment and are not used for other purposes. Payment processing services may be provided by a third-party payment service, and a management company external to the Operators may provide support for the financial activities of the Operators. the Operators may share your personal information with its partners to facilitate these transactions.
Information Sharing
The Operators does not sell, rent, or lease any individual’s personal information or lists of email addresses to anyone for marketing purposes, and we take commercially reasonable steps to maintain the security of this information. However, the Operators reserve the right to supply any such information to any organization into which the Operators may merge in the future or to which it may make any transfer in order to enable a third party to continue part or all of its mission. We also reserve the right to release personal information to protect our systems or business, when we reasonably believe you to be in violation of our Terms of Use or if we reasonably believe you to have initiated or participated in any illegal activity. In addition, please be aware that in certain circumstances, the Operators may be obligated to release your personal information pursuant to judicial or other government subpoenas, warrants, or other orders.
In keeping with our open process, the Operators may maintain publicly accessible archives for the majority of our activities. For example, posting an email to any of the Operators’s-hosted public mail lists or discussion forums, subscribing to one of our newsletters or registering for one of our public meetings may result in your email address becoming part of the publicly accessible archives.
On some sites, anonymous users are allowed to post content and/or participate in forum discussions. In such a case, since no user name can be associated with such a user, the IP address number of a user is used as an identifier. When posting content or messages to a Operators site anonymously, your IP address may be revealed to the public.
If you are a registered member of an Operators website or email list, you should be aware that some items of your personal information may be visible to other members and to the public. The Operator’s member databases may retain information about your name, e-mail address, company affiliation (if an organizational member), and such other personal address and identifying data as you choose to supply. That data may be visible to other of the Operator’s members and to the public. Your name, e-mail address, and other information you may supply also may be associated in the Operator’s publicly accessible records with the Operator’s various committees, working groups, and similar activities that you join, in various places, including: (i) the permanently-posted attendance and membership records of those activities; (ii) documents generated by the activity, which may be permanently archived; and, (iii) along with message content, in the permanent archives of the Operator’s e-mail lists, which also may be public.
Please remember that any information (including personal information) that you disclose in public areas of our web site, such as forums, message boards, and newsgroups, becomes public information that others may collect, circulate, and use. Because we cannot and do not control the acts of others, you should exercise caution when deciding to disclose information about yourself or others in public forums such as these.
Given the international scope of the Operators websites, personal information may be visible to persons outside your country of residence, including to persons in countries that your own country’s privacy laws and regulations deem deficient in ensuring an adequate level of protection for such information. If you are unsure whether this Privacy Policy is in conflict with applicable local rules, you should not submit your information. If you are located within the European Union, you should note that your information will be transferred to the United States, which is deemed by the European Union to have inadequate data protection. Nevertheless, in accordance with local laws implementing European Union Directive 95/46/EC of 24 October 1995 (“EU Privacy Directive”) on the protection of individuals with regard to the processing of personal data and on the free movement of such data, individuals located in countries outside of the United States of America who submit personal information do thereby consent to the general use of such information as provided in this Privacy Policy and to its transfer to and/or storage in the United States of America.
If you do not want your personal information collected and used by the Operators, please do not visit the Operator’s website or apply for membership of any of the Operators websites or email lists.
Access to and Accuracy of Member Information
The Operators are committed to keeping the personal information of our members accurate. All the information you have submitted to us can be verified and changed. In order to do this, please email us a request. We may provide members with online access to their own personal profiles, enabling them to update or delete information at any time. To protect our members’ privacy and security, we also may take reasonable steps to verify identity, such as a user ID and password, before granting access to modify personal profile data. Certain areas of the Operator’s web sites may limit access to specific individuals through the use of passwords or other personal identifiers; a password prompt is your indication that a members-only resource is being accessed.
Security
The Operators make every effort to protect personal information by users of the web site, including using firewalls and other security measures on its servers. No server, however, is 100% secure, and you should take this into account when submitting personal or confidential information about yourself on any web site, including this one. Much of the personal information is used in conjunction with member services such as collaboration and discussion, so some types of personal information such as your name, company affiliation, and email address will be visible to other the Operator’s members and to the public. The Operators assume no liability for the interception, alteration, or misuse of the information you provide. You alone are responsible for maintaining the secrecy of your personal information. Please use care when use access this web site and provide personal information.
Opting Out
From time to time the Operators may email you electronic newsletters, announcements, surveys or other information. If you prefer not to receive any or all of these communications, you may opt out by following the directions provided within the electronic newsletters and announcements.
If you have questions regarding this privacy policy, please contact us.

Please contact info@argyleinteractive.com for any inquiries.

']);
	}
	public function getTerms()
	{
		date_default_timezone_set('America/New_York');
		$currenttime = date('H:a:w');
		list($hrs,$ampm,$day) = preg_split('/[: -]/', $currenttime);
		$final_time = $hrs;

		return View::make('internal',['pageTitle' => 'Terms of Use'],['pageContent' => '
			Terms of Use
Legal Notices
We, the Operators of this Website, provide it as a public service to our users.
Please carefully review the following basic rules that govern your use of the Website. Please note that your use of the Website constitutes your unconditional agreement to follow and be bound by these Terms and Conditions of Use. If you (the "User") do not agree to them, do not use the Website, provide any materials to the Website or download any materials from them.
The Operators reserve the right to update or modify these Terms and Conditions at any time without prior notice to User. Your use of the Website following any such change constitutes your unconditional agreement to follow and be bound by these Terms and Conditions as changed. For this reason, we encourage you to review these Terms and Conditions of Use whenever you use the Website.
These Terms and Conditions of Use apply to the use of the Website and do not extend to any linked third party sites. These Terms and Conditions and our Privacy Policy, which are hereby incorporated by reference, contain the entire agreement (the “Agreement”) between you and the Operators with respect to the Website. Any rights not expressly granted herein are reserved.
Permitted and Prohibited Uses
You may use the the Website for the sole purpose of sharing and exchanging ideas with other Users. You may not use the the Website to violate any applicable local, state, national, or international law, including without limitation any applicable laws relating to antitrust or other illegal trade or business practices, federal and state securities laws, regulations promulgated by the U.S. Securities and Exchange Commission, any rules of any national or other securities exchange, and any U.S. laws, rules, and regulations governing the export and re-export of commodities or technical data.
You may not upload or transmit any material that infringes or misappropriates any persons copyright, patent, trademark, or trade secret, or disclose via the the Website any information the disclosure of which would constitute a violation of any confidentiality obligations you may have.
You may not upload any viruses, worms, Trojan horses, or other forms of harmful computer code, nor subject the Websites network or servers to unreasonable traffic loads, or otherwise engage in conduct deemed disruptive to the ordinary operation of the Website.
You are strictly prohibited from communicating on or through the Website any unlawful, harmful, offensive, threatening, abusive, libelous, harassing, defamatory, vulgar, obscene, profane, hateful, fraudulent, sexually explicit, racially, ethnically, or otherwise objectionable material of any sort, including, but not limited to, any material that encourages conduct that would constitute a criminal offense, give rise to civil liability, or otherwise violate any applicable local, state, national, or international law.
You are expressly prohibited from compiling and using other Users personal information, including addresses, telephone numbers, fax numbers, email addresses or other contact information that may appear on the Website, for the purpose of creating or compiling marketing and/or mailing lists and from sending other Users unsolicited marketing materials, whether by facsimile, email, or other technological means.
You also are expressly prohibited from distributing Users personal information to third-party parties for marketing purposes. The Operators shall deem the compiling of marketing and mailing lists using Users personal information, the sending of unsolicited marketing materials to Users, or the distribution of Users personal information to third parties for marketing purposes as a material breach of these Terms and Conditions of Use, and the Operators reserve the right to terminate or suspend your access to and use of the Website and to suspend or revoke your membership in the consortium without refund of any membership dues paid.
The Operators note that unauthorized use of Users personal information in connection with unsolicited marketing correspondence also may constitute violations of various state and federal anti-spam statutes. The Operators reserve the right to report the abuse of Users personal information to the appropriate law enforcement and government authorities, and the Operators will fully cooperate with any authorities investigating violations of these laws.
User Submissions
The Operators do not want to receive confidential or proprietary information from you through the Website. Any material, information, or other communication you transmit or post ("Contributions") to the Website will be considered non-confidential.
All contributions to this site are licensed by you under the MIT License to anyone who wishes to use them, including the Operators.
If you work for a company or at a University, its likely that youre not the copyright holder of anything you make, even in your free time. Before making contributions to this site, get written permission from your employer.
User Discussion Lists and Forums
The Operators may, but are not obligated to, monitor or review any areas on the Website where users transmit or post communications or communicate solely with each other, including but not limited to user forums and email lists, and the content of any such communications. The Operators, however, will have no liability related to the content of any such communications, whether or not arising under the laws of copyright, libel, privacy, obscenity, or otherwise. The Operators may edit or remove content on the the Website at their discretion at any time.
Use of Personally Identifiable Information
Information submitted to the Website is governed according to the Operator’s current Privacy Policy and the stated license of this website.
You agree to provide true, accurate, current, and complete information when registering with the Website. It is your responsibility to maintain and promptly update this account information to keep it true, accurate, current, and complete. If you provides any information that is fraudulent, untrue, inaccurate, incomplete, or not current, or we have reasonable grounds to suspect that such information is fraudulent, untrue, inaccurate, incomplete, or not current, we reserve the right to suspend or terminate your account without notice and to refuse any and all current and future use of the Website.
Although sections of the Website may be viewed simply by visiting the Website, in order to access some Content and/or additional features offered at the Website, you may need to sign on as a guest or register as a member. If you create an account on the Website, you may be asked to supply your name, address, a User ID and password. You are responsible for maintaining the confidentiality of the password and account and are fully responsible for all activities that occur in connection with your password or account. You agree to immediately notify us of any unauthorized use of either your password or account or any other breach of security. You further agree that you will not permit others, including those whose accounts have been terminated, to access the Website using your account or User ID. You grant the Operators and all other persons or entities involved in the operation of the Website the right to transmit, monitor, retrieve, store, and use your information in connection with the operation of the Website and in the provision of services to you. The Operators cannot and do not assume any responsibility or liability for any information you submit, or your or third parties’ use or misuse of information transmitted or received using website. To learn more about how we protect the privacy of the personal information in your account, please visit our Privacy Policy.
Indemnification
You agree to defend, indemnify and hold harmless the Operators, agents, vendors or suppliers from and against any and all claims, damages, costs and expenses, including reasonable attorneys fees, arising from or related to your use or misuse of the Website, including, without limitation, your violation of these Terms and Conditions, the infringement by you, or any other subscriber or user of your account, of any intellectual property right or other right of any person or entity.
Termination
These Terms and Conditions of Use are effective until terminated by either party. If you no longer agree to be bound by these Terms and Conditions, you must cease use of the Website. If you are dissatisfied with the Website, their content, or any of these terms, conditions, and policies, your sole legal remedy is to discontinue using the Website. The Operators reserve the right to terminate or suspend your access to and use of the Website, or parts of the Website, without notice, if we believe, in our sole discretion, that such use (i) is in violation of any applicable law; (ii) is harmful to our interests or the interests, including intellectual property or other rights, of another person or entity; or (iii) where the Operators have reason to believe that you are in violation of these Terms and Conditions of Use.
WARRANTY DISCLAIMER
THE WEBSITE AND ASSOCIATED MATERIALS ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS. TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, THE OPERATORS DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF INTELLECTUAL PROPERTY. THE OPERATORS MAKE NO REPRESENTATIONS OR WARRANTY THAT THE WEBSITE WILL MEET YOUR REQUIREMENTS, OR THAT YOUR USE OF THE WEBSITE WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR FREE; NOR DO THE OPERATORS MAKE ANY REPRESENTATION OR WARRANTY AS TO THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE WEBSITE. THE OPERATORS MAKE NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE WEBSITE OR THE INFORMATION, CONTENT, MATERIALS, OR PRODUCTS INCLUDED ON THE WEBSITE.
IN NO EVENT SHALL THE OPERATORS OR ANY OF THEIR AGENTS, VENDORS OR SUPPLIERS BE LIABLE FOR ANY DAMAGES WHATSOEVER (INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF PROFITS, BUSINESS INTERRUPTION, LOSS OF INFORMATION) ARISING OUT OF THE USE, MISUSE OF OR INABILITY TO USE THE WEBSITE, EVEN IF THE OPERATORS HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THIS DISCLAIMER CONSTITUTES AN ESSENTIAL PART OF THIS AGREEMENT. BECAUSE SOME JURISDICTIONS PROHIBIT THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU.
YOU UNDERSTAND AND AGREE THAT ANY CONTENT DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE WEBSITE IS AT YOUR OWN DISCRETION AND RISK AND THAT YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA OR BUSINESS INTERRUPTION THAT RESULTS FROM THE DOWNLOAD OF CONTENT. THE OPERATORS SHALL NOT BE RESPONSIBLE FOR ANY LOSS OR DAMAGE CAUSED, OR ALLEGED TO HAVE BEEN CAUSED, DIRECTLY OR INDIRECTLY, BY THE INFORMATION OR IDEAS CONTAINED, SUGGESTED OR REFERENCED IN OR APPEARING ON THE WEBSITE. YOUR PARTICIPATION IN THE WEBSITE IS SOLELY AT YOUR OWN RISK. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM THE OPERATORS OR THROUGH THE OPERATORS, THEIR EMPLOYEES, OR THIRD PARTIES SHALL CREATE ANY WARRANTY NOT EXPRESSLY MADE HEREIN. YOU ACKNOWLEDGE, BY YOUR USE OF THE THE WEBSITE, THAT YOUR USE OF THE WEBSITE IS AT YOUR SOLE RISK.
LIABILITY LIMITATION. UNDER NO CIRCUMSTANCES AND UNDER NO LEGAL OR EQUITABLE THEORY, WHETHER IN TORT, CONTRACT, NEGLIGENCE, STRICT LIABILITY OR OTHERWISE, SHALL THE OPERATORS OR ANY OF THEIR AGENTS, VENDORS OR SUPPLIERS BE LIABLE TO USER OR TO ANY OTHER PERSON FOR ANY INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL LOSSES OR DAMAGES OF ANY NATURE ARISING OUT OF OR IN CONNECTION WITH THE USE OF OR INABILITY TO USE THE THE WEBSITE OR FOR ANY BREACH OF SECURITY ASSOCIATED WITH THE TRANSMISSION OF SENSITIVE INFORMATION THROUGH THE WEBSITE OR FOR ANY INFORMATION OBTAINED THROUGH THE WEBSITE, INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOST PROFITS, LOSS OF GOODWILL, LOSS OR CORRUPTION OF DATA, WORK STOPPAGE, ACCURACY OF RESULTS, OR COMPUTER FAILURE OR MALFUNCTION, EVEN IF AN AUTHORIZED REPRESENTATIVE OF THE OPERATORS HAS BEEN ADVISED OF OR SHOULD HAVE KNOWN OF THE POSSIBILITY OF SUCH DAMAGES.
THE OPERATORS TOTAL CUMULATIVE LIABILITY FOR ANY AND ALL CLAIMS IN CONNECTION WITH THE WEBSITE WILL NOT EXCEED FIVE U.S. DOLLARS ($5.00). USER AGREES AND ACKNOWLEDGES THAT THE FOREGOING LIMITATIONS ON LIABILITY ARE AN ESSENTIAL BASIS OF THE BARGAIN AND THAT THE OPERATORS WOULD NOT PROVIDE THE WEBSITE ABSENT SUCH LIMITATION.
General
The Website is hosted in the United States. The Operators make no claims that the Content on the Website is appropriate or may be downloaded outside of the United States. Access to the Content may not be legal by certain persons or in certain countries. If you access the Website from outside the United States, you do so at your own risk and are responsible for compliance with the laws ofyour jurisdiction. The provisions of the UN Convention on Contracts for the International Sale of Goods will not apply to these Terms. A party may give notice to the other party only in writing at that partys principal place of business, attention of that partys principal legal officer, or at such other address or by such other method as the party shall specify in writing. Notice shall be deemed given upon personal delivery or facsimile, or, if sent by certified mail with postage prepaid, 5 business days after the date of mailing, or, if sent by international overnight courier with postage prepaid, 7 business days after the date of mailing. If any provision herein is held to be unenforceable, the remaining provisions will continue in full force without being affected in any way. Further, the parties agree to replace such unenforceable provision with an enforceable provision that most closely approximates the intent and economic effect of the unenforceable provision. Section headings are for reference purposes only and do not define, limit, construe or describe the scope or extent of such section. The failure of the Operators to act with respect to a breach of this Agreement by you or others does not constitute a waiver and shall not limit the Operators rights with respect to such breach or any subsequent breaches. Any action or proceeding arising out of or related to this Agreement or Users use of the Website must be brought in the courts of Belgium, and you consent to the exclusive personal jurisdiction and venue of such courts. Any cause of action you may have with respect to your useof the Website must be commenced within one (1) year after the claim or cause of action arises. These Terms set forth the entire understanding and agreement of the parties, and supersedes any and all oral or written agreements or understandings between the parties, as to their subject matter. The waiver of a breach of any provision of this Agreement shall not be construed as a waiver ofany other or subsequent breach.
Links to Other Materials
The Website may contain links to sites owned or operated by independent third parties. These links are provided for your convenience and reference only. We do not control such sites and, therefore, we are not responsible for any content posted on these sites. The fact that the Operators offer such links should not be construed in any way as an endorsement, authorization, or sponsorship of that site, its content or the companies or products referenced therein, and the Operators reserve the right to note its lack of affiliation, sponsorship, or endorsement on the Website. If you decide to access any of the third party sites linked to by the Website, you do this entirely at your own risk. Because some sites employ automated search results or otherwise link you to sites containing information that may be deemed inappropriate or offensive, the Operators cannot be held responsible for the accuracy, copyright compliance, legality, or decency of material contained in third party sites, and you hereby irrevocably waive any claim against us with respect to such sites.
Notification Of Possible Copyright Infringement
In the event you believe that material or content published on the Website may infringe on your copyright or that of another, please contact us.

Please contact info@argyleinteractive.com for any inquiries.
 ']);
	}
}
