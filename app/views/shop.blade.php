@include('header')
<!--START show now page-->
			<div id="shop-now">
				<div id ="page-main-title" style="margin-bottom:0px">
					<div class="wrapper">
						<h1 id="page-h1">Casel's Marketplace</h1>
					</div>
				</div>

				<header id="myCarousel" class="carousel slide shophome" style="margin-bottom:40px;display:none;">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="fill" style="background-image:url('./images/shop-3.jpg');background-position:100%;">
								<div class="wrapper">
<!-- 									<h1 class="shop-slider-main">The GG Collection Acanthus<br>Storage Canisters</h1>
									<p class="shop-slider-sub">Gracious Goods For The Home</p>
									<p><a class="shop-blue-slider-btn" href="http://aidevserver.co/projects/casels/public/product/10">Learn more</a></p> -->
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fill" style="background-image:url('./images/shop-banner-1.jpg');background-position:100%;">
								<div class="wrapper">
<!-- 									<h1 class="shop-slider-main">The GG Collection Acanthus<br>Metal Chargers Trays</h1>
									<p class="shop-slider-sub">Gracious Goods For The Home</p>
									<p><a class="shop-red-slider-btn" href="http://aidevserver.co/projects/casels/public/product/8">Learn more</a></p> -->
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fill" style="background-image:url('./images/shop-banner-2.jpg');background-position:100%;">
								<div class="wrapper">
<!-- 									<h1 class="shop-slider-main">The GG Collection Acanthus<br>Metal Chargers Trays</h1>
									<p class="shop-slider-sub">Gracious Goods For The Home</p>
									<p><a class="shop-red-slider-btn" href="http://aidevserver.co/projects/casels/public/product/8">Learn more</a></p> -->
								</div>
							</div>
						</div>
						<!--<div class="item">
							<div class="fill" style="background-image:url('http://placehold.it/1900x1080&amp;text=Slide Three');"></div>
							<div class="carousel-caption">
								<h2>Caption 3</h2>
							</div>
						</div>-->
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</header>

				<div id="content">
					<div class="wrapper">
						<div id="featured-products-area">
							<div id="main-featured-area-1">
								<img src="./images/shop-feat-1.jpg" class="shop-f-img">
								<div class="shop-f-ab">
									<h1 class="shop-f-head">
										Arte Italica
									</h1>
									<a href="{{ URL::to('tag/arte') }}" class="sf-cta">View Now</a>
								</div>
							</div>
							<div id="main-featured-area-2">
								<img src="./images/shop-feat-2.jpg" class="shop-f-img">
								<div class="shop-f-ab">
									<h1 class="shop-f-head">
										Caspari Napkins
									</h1>
									<a href="{{ URL::to('tag/caspari') }}" class="sf-cta">View Now</a>
								</div>
							</div>
							<div id="main-featured-area-3">
								<img src="./images/shop-feat-3.jpg" class="shop-f-img">
								<div class="shop-f-ab">
									<h1 class="shop-f-head">
										Winning Solutions
									</h1>
									<a href="#" class="sf-cta">View Now</a>
								</div>
							</div>
						</div>

						<form method="post" action="search" id="specific-search-refine">
							<div id="refine-search">
								<div id="refine-search-input">
									<div id="mobile-refiner">
									<i class="fa fa-bars"></i>
									<p>Refine</p>
									</div>
									<input type="text" name="search" id="search-refiner" placeholder="Search Items...">
								</div>
								<div id="shop-refine-mobile-drop">
									<div id="department">
										<p style="font-weight:bold;">Department:</p>
										<div class="form-group">
											<select name="category" id="category">
												<option>Home-Goods</option>
												<option>Board-Games</option>
												<option>Silverware</option>
												<option>Antiques</option>
												<option>Tableware</option>
											</select>
										</div>
									</div>
									<div id="min-max">
										<p style="font-weight:bold;">
											Min Price:
										</p>
										<input name="minprice">
										<p style="font-weight:bold;">
											Max Price:
										</p>
										<input name="maxprice">
									</div>
									<!--<div id="price-selector">
										<p>
											<label for="amount">Price range:</label>
											<input type="text" id="amount" name="amount" readonly style="border:0;">
										</p>
										<div id="slider-range"></div>
									</div>-->
									<div id="submit-refine">
										<input type="submit" name="submit" value="submit">
									</div>
								</div>
							</div>
						</form>
						<div id="product-list">
							<!--this is repeatable for individual products-->
							@foreach(Inventory::where('inventory', '>=', '1')->orderBy('created_at', 'DSC')->get() as $product)
							<div class="product-individual-wrap">
								<div class="product-picture-list">
									<img style="width: 100%; height: auto;" src="{{ $product ->picture_id }}" />
								</div>
								<div class="product-info">
									<h3 class="product-name">{{ $product ->title }}</h3>
									<div class="product-rating">
<!-- 										<p>
		                                    <span class="glyphicon glyphicon-star"></span>
		                                    <span class="glyphicon glyphicon-star"></span>
		                                    <span class="glyphicon glyphicon-star"></span>
		                                    <span class="glyphicon glyphicon-star-empty"></span>
		                                    <span class="glyphicon glyphicon-star-empty"></span>
		                                </p> -->
										<strong>${{ $product ->price }}</strong>
                  				</div>
									<div class="product-picture-list-mobile">
										<img style="width: 100%; height: auto;" src="{{ $product ->picture_id }}" />
									</div>
									<p class="product-description">
										<?php
										$body = null;
											//$body = chunk_split ($product ->description, 180,"<br/><br/>");
											if (strlen($product->description) > 10)
											   $body = substr($product->description, 0, 240) . '...';
										?>
										<p>
											{{ $body }}
										</p>
									</p>
								</div>
								<div class="cta-product">
			                            <a href="product/{{ $product ->id }}" class="learn-more"> Learn More</a>
			                            <a href="cart/addFromShop/{{ $product ->id }}" class="buy-now">Add To Cart</a>

		                        </div>
							</div>
							@endforeach
							<!--end repeatable-->
						</div>

						<!--<div id="side-bar" class="shop-now-side">
							<img src="./images/sidebar.jpg" id="sidebar-img">
							<h1 id="sidebar-title">Apply to Become a Casel's Preferred Customer</h1>
							{{ HTML::link('get-card', 'Apply Now', array('id' => 'sidebar-cta')) }}

						</div>-->
					</div>
				</div>

			</div>
		<!--END shop now page-->
@include('footer')
