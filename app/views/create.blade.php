@include('header')
<div class="container">
			@if ($message = Session::get('alert'))
			{{ $message }}
			@endif
		<div class="new_product" style="width: 400px;">
			{{ Form::open(array('url' => '/products/new/create', 'name' => 'addItem', 'enctype' => 'multipart/form-data')) }}
				<div class="form-group">	
					{{ Form::label('label_title', 'Title') }}
					{{ Form::text('title', 'Product Title', array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('label_category', 'Category ID') }}
					{{ Form::text('category', 'Category ID', array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('label_price', 'Price') }}
					<div class="input-group">
						<div class="input-group-addon">$</div>
							{{ Form::text('price', '0.00', array('class' => 'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('label_description', 'Description') }}
					{{ Form::text('description', 'Product Description', array('class' => 'form-control')) }}
				</div>

				<div class="form-group">	
					{{ Form::label('label_paypal', 'PayPal Email Address') }}
					{{ Form::email('paypal', 'PayPal@Email.com', array('class' => 'form-control')) }}
				</div>
			
				<div class="form-group">
					{{ Form::label('label_picture', 'Upload a Picture') }}
					{{ Form::file('image') }}
				</div>
			
				<div class="form-group">
					{{ Form::label('label_duration', 'eBay Listing Duration') }}
					<select class="form-control" name="duration">
					  <option>Days_1</option>
					  <option>Days_3</option>
					  <option>Days_5</option>
					  <option>Days_7</option>
					  <option>Days_10</option>
					</select>
				</div>
			
				<div class="form-group">
					{{ Form::label('label_condition', 'Item Condition') }}
					<select class="form-control" name="condition">
					  <option>1000</option>
					  <option>1500</option>
					  <option>1750</option>
					  <option>2000</option>
					</select>
				</div>
			
				<div class="form-group">
					{{ Form::label('label_condition', 'Quantity for eBay') }}
					<select class="form-control" name="q_ebay">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					</select>
				</div>
			
				<div class="form-group">
					{{ Form::label('label_condition', 'Quantity for Store') }}
					<select class="form-control" name="q_store">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					</select>
				</div>		
			
				<div class="form-group">
					{{ Form::submit('Add Product', array('class' => 'btn btn-primary', 'style' => 'float: right; margin: 5px;')) }}
				</div>
			{{ Form::close() }}
		</div>
</div>
@include('footer')