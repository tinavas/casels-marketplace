@include('header') @if ($message = Session::get('alert')) {{ $message }} @endif

<div id="page-main-title" style="margin-bottom:0px">
	<div class="wrapper">
		<h1 id="page-h1">Your Cart</h1>
	</div>
</div>
<div class="wrapper">

	<?php $cart=Cart::content(); ?>@foreach($cart as $row) @foreach(Inventory::where('id', '=', $row->id)->get() as $product)
	<div class="in-cart-item">
		<img src="{{ $row->options->size }}" class="desktop-cart-main-pic">
		<h1>
				{{ $row->name }}
			</h1>
		<img src="{{ $row->options->size }}" class="mobile-cart-main-pic">
		<p style="margin-bottom:15px;">
			Price:
			<label class="label label-info" style="font-size:16px;background-color: #8F0005;">${{ $row->price }}</label>
		</p>
		<p style="margin-bottom:15px;">
			Quantity:
			<label class="label label-default" style="font-weight:100;background-color: transparent;border: 1px solid rgb(143, 0, 5);color: #323232;font-size: 14px;">{{ $row->qty }}</label>
			<a href="cart/add/one/{{ $row->rowid }}" class="cart-qty-actions">Add One</a> |
			<a href="cart/add/one/{{ $row->rowid }}" class="cart-qty-actions">Remove One</a>
		</p>
		
		<p style="margin-bottom:15px;">
			Shipping:
			<label class="label label-warning" style="font-size: 14px;background-color: transparent; color:#323232;font-weight: 100;border: 1px solid rgb(143, 0, 5);">${{ $product->shipping }}</label>
		</p>
		<a href="cart/remove/{{ $row->rowid }}" class="btn btn-danger" style="float:right;border-color:#8F0005;color:#8F0005;background-color:rgba(143, 0, 5,.0);">Remove from Cart</a>
	</div>
	@endforeach @endforeach

	<table class="table table-hover" style="float:right;">
		<tbody style="float: right; margin-top:40px;">
			<tr>
				<th scope="row" ><strong>Sub-Total: </strong>${{ Cart::total() }}</th>
			</tr>
			<tr style="border-top:1px solid darkgray;">
				<th scope="row" ><strong>Total Price: </strong>
					<?php $total_shipping = 0; $cart=Cart::content(); ?>
					@foreach($cart as $row) 
						@foreach(Inventory::where('id', '=', $row->id)->get() as $product)
							<?php 
								//$total_shipping=0; 
								foreach(Inventory::where( 'id', '=', $row->id)->get() as $product) 
								{ 
									$total_shipping += $product->shipping; 
									//echo $total_shipping; } echo $total_shipping;
								}
							?>
						@endforeach
					@endforeach
					Tax: ${{ round(Cart::total() * 0.07, 1) }} |  Shipping: ${{ $total_shipping }}
				</th>
			</tr>
			<tr style="border-top: 1px solid darkgray;">
				<th scope="row">
					<?php 
						$Cart = new Cart();
						$tax = round($Cart::total() * 0.07, 2);					
						$total_price = $Cart::total() + $tax + $total_shipping; 
					?> 
					Total Price: ${{ $total_price }}
				</th>
			</tr>
			<tr>
				<th scope="row" style="color:red"><a href="checkout" class="view-cart-cta" style="padding: 15px 25px;text-align: center;font-size: 20px;">Checkout</a>
				</th>
			</tr>
		</tbody>
	</table>
</div>

@include('footer')