@include('header')
<div class="container">
	<div style="margin-top: 10px;" class="alert alert-danger" role="alert">This WILL NOT revise item details on Casels.com <a href="{{ URL::to('admincp') }}">Click HERE to revise an eBay Listing.</a></div>
			@if ($message = Session::get('alert'))
			{{ $message }}
			@endif
	<center>
		<div class="revise_listing" style="width: 400px;">
			@foreach(Inventory::where('id', '=', $id)->get() as $product)
			{{ Form::open(array('url' => '/admin/ebay/edit/'.$product->id, 'name' => 'editItem', 'method' => 'POST')) }}
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