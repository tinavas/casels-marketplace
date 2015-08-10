@include('header')
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
@include('footer')