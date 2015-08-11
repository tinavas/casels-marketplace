@include('header')
<div id="shop-now">
	<div id ="page-main-title" style="margin-bottom:0px">
		<div class="wrapper">
			<h1 id="page-h1">@if ($tag == 'arte')
												Arte Italica
											@elseif ($tag == 'caspari')
												Caspari Napkins
											@else
												{{ $tag }}
											@endif
											</h1>
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
	<!--this is repeatable for individual products-->
	@foreach(Inventory::where('tag', '=', $tag)->orderBy('created_at', 'DSC')->get() as $product)
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
                <a href="{{ URL::to('product/' . $product ->id) }}" class="learn-more"> Learn More</a>
                <a href="{{ URL::to('cart/addFromShop/' . $product ->id) }}" class="buy-now">Add To Cart</a>

        </div>
	</div>
	@endforeach
	<!--end repeatable-->
</div>
</div>
</div>
</div>
@include('footer')
