@include('header')
<div class="container">
	<div style="margin-top: 10px;" class="alert alert-danger" role="alert">This WILL NOT revise item details on eBay. <a href="/admin/products/edit/eBay{{ $id }}">Click HERE to revise an eBay Listing.</a></div>
			@if ($message = Session::get('alert'))
			{{ $message }}
			@endif
	<center>
		<div class="revise_listing" style="width: 400px;">
			@foreach(Inventory::where('id', '=', $id)->get() as $product)
			{{ Form::open(array('url' => '/admin/products/edit/save/'.$product->id, 'name' => 'editItem', 'method' => 'POST')) }}
				<div class="form-group">	
					{{ Form::label('label_title', 'Title') }}
					{{ Form::text('title', $product ->title, array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('label_price', 'Price') }}
					<div class="input-group">
						<div class="input-group-addon">$</div>
							{{ Form::text('price', $product ->price, array('class' => 'form-control')) }}
					</div>
				</div>
			
				<div class="form-group">
					{{ Form::label('label_length', 'Length') }}
					{{ Form::text('length', 'Length', array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('label_width', 'Width') }}
					{{ Form::text('width', 'Width', array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('label_height', 'height') }}
					{{ Form::text('height', 'Height', array('class' => 'form-control')) }}
				</div>
			
				<div class="form-group">
					{{ Form::label('label_description', 'Description') }}
					{{ Form::textarea('description', $product ->description, array('class' => 'form-control')) }}
				</div>
			
				<div class="form-group">
					{{ Form::submit('Add Product', array('class' => 'btn btn-primary', 'style' => 'float: right; margin: 5px;')) }}
				</div>
			{{ Form::close() }}
			@endforeach
		</div>
	</center>
</div>
@include('footer')