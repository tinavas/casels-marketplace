@include('header')
<!--START show now page-->
			<div id="shop-now">
				<div id ="page-main-title" style="margin-bottom:0px">
					<div class="wrapper">
						<h1 id="page-h1">Search Results</h1>
					</div>
				</div>

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

								<?php
									$cat = Input::get('category');

									if($cat == "Home-Goods")
									{
										$results = Inventory::where('title', 'LIKE', '%'. $search_query .'%')
											->where('category', '=', 'Home-Goods')
											->get();
										$array_keys = count($results);

										for ($i = 0; $i < $array_keys; $i++)
										{
											echo '
												<div class="product-individual-wrap">
													<div class="product-picture-list">
														<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
													</div>
													<div class="product-info">
														<h3 class="product-name">' . $results[$i]["title"] . '</h3>
														<div class="product-rating">
															<p>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
															</p>
															<strong>$' . $results[$i]["price"] . '</strong>
													</div>
														<div class="product-picture-list-mobile">
															<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
														</div>
														<p class="product-description">
															' . $results[$i]["description"] . '
														</p>
													</div>
													<div class="cta-product">
															<a href="product/' . $results[$i]["id"] . '" class="learn-more"> Learn More</a>
															<a href="cart/addFromShop/' . $results[$i]["id"] . '" class="buy-now">Add To Cart</a>`
													</div>
												</div>';
										}
									}

									elseif($cat == "Board-Games")
									{
										$results = Inventory::where('title', 'LIKE', '%'. $search_query .'%')
											//->orWhere('description', 'LIKE', '%'. $search_query .'%')
											->where('category', '=', 'Board-Games')
											->get();
										$array_keys = count($results);

										for ($i = 0; $i < $array_keys; $i++)
										{
											echo '
												<div class="product-individual-wrap">
													<div class="product-picture-list">
														<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
													</div>
													<div class="product-info">
														<h3 class="product-name">' . $results[$i]["title"] . '</h3>
														<div class="product-rating">
															<p>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
															</p>
															<strong>$' . $results[$i]["price"] . '</strong>
													</div>
														<div class="product-picture-list-mobile">
															<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
														</div>
														<p class="product-description">
															' . $results[$i]["description"] . '
														</p>
													</div>
													<div class="cta-product">
															<a href="product/' . $results[$i]["id"] . '" class="learn-more"> Learn More</a>
															<a href="cart/addFromShop/' . $results[$i]["id"] . '" class="buy-now">Add To Cart</a>`
													</div>
												</div>';
										}
									}

									elseif($cat == "Tableware")
									{
										$results = Inventory::where('title', 'LIKE', '%'. $search_query .'%')
											->orWhere('description', 'LIKE', '%'. $search_query .'%')
											->Where('category', '=', 'Silverware')
											->get();

										$array_keys = count($results);
										for ($i = 0; $i < $array_keys; $i++)
										{
											echo '
												<div class="product-individual-wrap">
													<div class="product-picture-list">
														<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
													</div>
													<div class="product-info">
														<h3 class="product-name">' . $results[$i]["title"] . '</h3>
														<div class="product-rating">
															<p>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
															</p>
															<strong>$' . $results[$i]["price"] . '</strong>
													</div>
														<div class="product-picture-list-mobile">
															<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
														</div>
														<p class="product-description">
															' . $results[$i]["description"] . '
														</p>
													</div>
													<div class="cta-product">
															<a href="product/' . $results[$i]["id"] . '" class="learn-more"> Learn More</a>
															<a href="cart/addFromShop/' . $results[$i]["id"] . '" class="buy-now">Add To Cart</a>`
													</div>
												</div>';
										}
									}
									elseif($cat == "Antiques")
									{
										$results = Inventory::where('title', 'LIKE', '%'. $search_query .'%')
											//->orWhere('description', 'LIKE', '%'. $search_query .'%')
											->Where('category', '=', 'Antiques')
											->get();
										$array_keys = count($results);

										for ($i = 0; $i < $array_keys; $i++)
										{
											echo '
												<div class="product-individual-wrap">
													<div class="product-picture-list">
														<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
													</div>
													<div class="product-info">
														<h3 class="product-name">' . $results[$i]["title"] . '</h3>
														<div class="product-rating">
															<p>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
															</p>
															<strong>$' . $results[$i]["price"] . '</strong>
													</div>
														<div class="product-picture-list-mobile">
															<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
														</div>
														<p class="product-description">
															' . $results[$i]["description"] . '
														</p>
													</div>
													<div class="cta-product">
															<a href="product/' . $results[$i]["id"] . '" class="learn-more"> Learn More</a>
															<a href="cart/addFromShop/' . $results[$i]["id"] . '" class="buy-now">Add To Cart</a>`
													</div>
												</div>';
										}
									}

									elseif($cat == "Silverware")
									{
										$results = Inventory::where('title', 'LIKE', '%'. $search_query .'%')
											//->orWhere('description', 'LIKE', '%'. $search_query .'%')
											->Where('category', '=', 'Silverware')
											->get();
										$array_keys = count($results);

										for ($i = 0; $i < $array_keys; $i++)
										{
											echo '
												<div class="product-individual-wrap">
													<div class="product-picture-list">
														<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
													</div>
													<div class="product-info">
														<h3 class="product-name">' . $results[$i]["title"] . '</h3>
														<div class="product-rating">
															<p>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
																<span class="glyphicon glyphicon-star-empty"></span>
															</p>
															<strong>$' . $results[$i]["price"] . '</strong>
													</div>
														<div class="product-picture-list-mobile">
															<img style="width: 100%; height: auto;" src="' . $results[$i]["picture_id"] . '" />
														</div>
														<p class="product-description">
															' . $results[$i]["description"] . '
														</p>
													</div>
													<div class="cta-product">
															<a href="product/' . $results[$i]["id"] . '" class="learn-more"> Learn More</a>
															<a href="cart/addFromShop/' . $results[$i]["id"] . '" class="buy-now">Add To Cart</a>`
													</div>
												</div>';
										}									
									}
								?>
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
