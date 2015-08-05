@include('header') @foreach(Inventory::where('id', '=', $id)->get() as $product)

<div id="individual-products">
	<div class="wrapper">
		<div id="main-content">
			<div id="top-wrap">
				<div id="product-picture-desktop">
					<img style="width: 100%; height: auto;" src="{{ $product ->picture_id }}" />
				</div>
				<div id="product-main-info">
					<h1 id="main-info-product-title">{{ $product ->title }}</h1>
					
					<div id="product-picture-mobile">
						<img style="width: 100%; height: auto;" src="{{ $product ->picture_id }}" />
					</div>
					<div id="price">
						<p>Price:<span>${{ $product ->price }}</span></p>
						<p>
							Shipping:<span>${{ $product ->shipping }}</span>
						</p>
					</div>
					<div id="stock-management">
						@if($product ->type == 1) 
							@if($getitemstatusresponse->Item->ListingStatus == 'Active') 
								@if($product ->inventory == 1)
									<label class="label label-info">Only 1 Left In Stock</label>
								@else($product ->inventory == 0)
									<label class="label label-danger">0 Left In Stock</label>
								@endif 
							@elseif($getitemstatusresponse->Item->ListingStatus == 'Completed')
								<label class="label label-danger">0 Left In Stock</label>
							@elseif($getitemstatusresponse->Item->ListingStatus == 'Ended')
								<label class="label label-danger">0 Left In Stock</label>
							@endif
						
						@elseif($product ->type == 0)
							@if($product ->inventory == 0)
								<label class="label label-danger">0 Left In Stock</label>
							@elseif($product ->inventory == 1)
								<label class="label label-info">Only 1 Left In Stock</label>
							@else
								<label class="label label-success">{{ $product ->inventory }} Left In Stock</label>
							@endif
						@endif
					</div>
					@if($product ->type == 1) 
						@if($getitemstatusresponse->Item->ListingStatus == 'Active') 
							@if($product ->inventory == 1)
								<div id="delivery-estimation">
									<p><span>Estimated Delivery:</span> 3-5 Business Day's</p>
								{{ Form::open(array('name' => 'addToCart', 'url' => '/cart/add/' . $id, 'method' => 'POST')) }}
									<input type="submit" value="Add To Cart" id="buy-now" />
								{{ Form::close() }}								
								</div>
							@else($product ->inventory == 0)
							@endif 
						
						@elseif($getitemstatusresponse->Item->ListingStatus == 'Completed')					
						@elseif($getitemstatusresponse->Item->ListingStatus == 'Ended')
						@endif 
					
					@elseif($product ->type == 0)
						@if($product ->inventory == 0)
						
						@elseif($product ->inventory == 1)
								<div id="delivery-estimation">
									<p><span>Estimated Delivery:</span> 3-5 Business Day's</p>
									<input type="submit" value="Buy Now" id="buy-now">
								</div>
						@else
							<div id="delivery-estimation">
								<p><span>Estimated Delivery:</span> 3-5 Business Day's</p>
							</div>			
							<div id="quantity-cart" style="margin-top:20px;">
								{{ Form::open(array('name' => 'addToCart', 'url' => '/cart/add/' . $id, 'method' => 'POST')) }}
									<p style="display:inline;">Quantity:</p>
									<input type="number" min="1" max="5" required aria-required="true" name="quantity" value="1" id="quantity">
									<input type="submit" value="Add To Cart" id="buy-now" />
								{{ Form::close() }}
							</div>		
						@endif
					@endif
				</div>
			</div>
			<div id="tabbed-section">
				<ul id="tabs">
					<li class="tabActive" id="lblDescription">Description</li>
					<li id="lblReturns">Returns</li>
				</ul>
				<div id="description-text">
					<?php
						$body = chunk_split($product ->description, 240,"<br/><br/>");
					?>
					<p>
						{{ $body }}
					</p>
				</div>
				<div id="details-text">

				</div>
				<div id="returns-text">
					<h1>
						Return policy	
					</h1>
					<ul style="margin-left: 30px;">
						<li>After receiving the item, contact seller <b>within 30 days</b> for your money back.</li>
						<li>Buyer pays return shipping</li>
					</ul>
				</div>
				<!--<div id="reviews-text">
					Nulla consectetur quis tortor nec euismod. Curabitur tempus sagittis auctor. Sed ultrices, neque at porta cursus, sem nibh scelerisque ex, ac accumsan diam lacus vitae ante. Phasellus imperdiet in urna et tincidunt. Nam ullamcorper nulla quis aliquet
					bibendum. Duis pretium elit eget felis pharetra, nec placerat eros cursus. Vivamus accumsan molestie iaculis.Nulla consectetur quis tortor nec euismod. Curabitur tempus sagittis auctor. Sed ultrices, neque at porta cursus, sem nibh scelerisque ex,
					ac accumsan diam lacus vitae ante. Phasellus imperdiet in urna et tincidunt. Nam ullamcorper nulla quis aliquet bibendum. Duis pretium elit eget felis pharetra, nec placerat eros cursus. Vivamus accumsan molestie iaculis.Nulla consectetur quis tortor
					nec euismod. Curabitur tempus sagittis auctor. Sed ultrices, neque at porta cursus, sem nibh scelerisque ex, ac accumsan diam lacus vitae ante. Phasellus imperdiet in urna et tincidunt. Nam ullamcorper nulla quis aliquet bibendum. Duis pretium elit
					eget felis pharetra, nec placerat eros cursus. Vivamus accumsan molestie iaculis.
				</div>-->
			</div>
		</div>


		<div id="side-bar">
			<img src="" id="sidebar-img-ind">
			<h1 id="sidebar-title">Apply to Become a Casel's Preferred Customer</h1>
			<a href="http://aidevserver.co/projects/casels/public/get-card" id="sidebar-cta">Apply Now</a>
		</div>
	</div>
</div>
@endforeach @include('footer')
