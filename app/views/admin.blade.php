@include('header')
<style type="text/css">
	nav {
		display: none;
	}
	body {
		overflow: hidden;
	}
</style>
<script type="text/javascript">
	$(window).load(function() {
		$('#admin-loading-space').fadeOut();
		$('body').css('overflow', 'auto');
	});
</script>
<div id="admin-loading-space">
	<div id="landing-center">
		<i class="fa fa-spinner fa-spin" style="font-size:50px; color:white;"></i>
	</div>
</div>
<div id="admin-top-nav">
	<a href="http://aidevserver.co/projects/casels/public">
		<div id="view-site-cta">
			<h1>
			<i class="fa fa-globe"></i>View Site
		</h1>
		</div>
	</a>

	<div id="new-list-cta-wrap">
		{{ HTML::link('#', 'Create New Listing', array('class' => 'btn btn-success', 'style' => 'float: right;', 'id' => 'new-listing-cta-head')) }}
	</div>

</div>
<div id="admin-side-nav">
	<ul>
		<li style="border-top:1px solid #f1f1f1;" class="active-side" id="order-side-cta">
			<i class="fa fa-cubes"></i>
			<span class="nav-sub">Orders</span>
		</li>
		<li id="inventory-side-cta">
			<i class="fa fa-list-alt"></i>
			<span class="nav-sub">Inventory</span>
		</li>
		<li id="users-side-cta">
			<i class="fa fa-users"></i>
			<span class="nav-sub">Users</span>
		</li>
		<li id="card-side-cta">
			<i class="fa fa-credit-card"></i>
			<span class="nav-sub">Card Requests</span>
		</li>
	</ul>
</div>


<div id="main-admin-content">
	<div id="order-management">
		<div id="page-main-title">
			<h1 class="admin-tb-title">Orders</h1>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Search Requests...">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
		@foreach(Orders::orderBy('created_at', 'DSC')->get() as $order)
		<!--START REDESING FOR ORDERS-->
		<div class="individual-inventory-wrap">
			<div class="user-title-top-wrap">
				<h1>{{ $order ->first_name }} {{ $order ->last_name }}</span></h1>
				<a href="/products/remove/id-here/auth-key" class="btn btn-danger desktop-ban" style="float:right;margin-top:10px;">Mark Shipped</a>
				<h2 class="user-name"><span class="bold">Email:</span> {{ $order ->payer_email }}</h2>	
				<a href="/products/remove/id-here/auth-key" class="btn btn-danger mobile-ban">Mark Shipped</a>
			</div>
			<div class="items-bottom-wrap bg-{{ $order ->id }}">
				<div class="items-under">
					<h2 class="user-card-under-info"><span class="bold">Order ID #:</span> {{ $order ->id }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Address:</span> {{ $order ->address }} {{$order ->address_2}}</h2>
					<h2 class="user-card-under-info"><span class="bold">City:</span> {{ $order ->city }}</h2>
					<h2 class="user-card-under-info"><span class="bold">State:</span> {{ $order ->state }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Zip:</span> {{ $order ->zip }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Phone:</span> {{ $order ->phone }}</h2>
				</div>
				<div class="drop-clicker" id="{{ $order ->id }}">
					<i class="fa fa-bars"></i>
				</div>
			</div>
			<div class="description-droplet {{ $order ->id }}">
				<p>{{ $order ->description }}</p>
				<center>
					<h2 class="user-card-under-info"><span class="bold">Date:</span> {{ $order ->created_at }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Store ID:</span> {{ $order ->product_id }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Ebay ID:</span> {{ $order ->ebay_id }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Item Title:</span> {{ $order ->title }}</h2>
					<h2 class="user-card-under-info"><span class="bold">Quantity:</span> {{ $order ->qty }}</h2>
				</center>
				<div style="text-align:center;">
					<a href="mailto:{{ $order ->payer_email }}" class="btn btn-info" style="margin-top:5px;">Email Buyer</a>
				</div>
			</div>
		</div>

		@endforeach

	</div>

	<div id="current-inventory">
		<div id="page-main-title">
			<h1 class="admin-tb-title">Current Inventory</h1>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Search Requests...">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
		@foreach(Inventory::orderBy('created_at', 'DSC')->get() as $product)
		<div class="individual-inventory-wrap">
			<div class="items-top-title-wrap">
				<h1>{{ $product ->title }}</h1>
				@if($product ->inventory == 1)
				<label class="label label-warning" style="clear:both;float:left;">Only 1 Left In Stock</label>
				@elseif($product ->inventory == 0)
				<label class="label label-danger" style="clear:both;float:left;">0 Left In Stock</label>
				@else
				<label class="label label-success" style="clear:both;float:left;">{{ $product ->inventory }} Left In Stock</label>
				@endif
			</div>
			<div class="items-bottom-wrap bg-{{ $product ->id }}">
				<div class="items-under">
					<h2 class="user-under-info"><span class="bold">Product ID #:</span> {{ $product ->product_id }}</h2>
					<h2 class="user-under-info testing"><span class="bold">ID #:</span> {{ $product ->id }}</h2>
					<h2 class="user-under-info"><span class="bold">Condition:</span> {{ $product ->condition }}</h2>
				</div>
				<div class="drop-clicker" id="{{ $product ->id }}">
					<i class="fa fa-bars"></i>
				</div>
			</div>
			<div class="description-droplet {{ $product ->id }}">
				<p>{{ $product ->description }}</p>
				<center>
					<img src="{{ $product ->picture_id }}" />
				</center>
				<div style="text-align:center;">
					<a href="admin/products/edit/{{ $product ->id }}" class="btn btn-info" style="margin-top:5px;">Revise Listing</a>
					<a href="admin/products/remove/{{ $product ->id }}" class="btn btn-danger" style="margin-top:5px;">Deactivate Listing</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<div id="user-management">
		<div id="page-main-title">
			<h1 class="admin-tb-title">User Management</h1>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Search Requests...">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
		@foreach(User::orderBy('created_at', 'DSC')->get() as $user)
		<div class="individual-inventory-wrap">
			<div class="user-title-top-wrap">
				<h1>{{ $user ->first_name }} {{ $user ->last_name }}</span></h1>
				@if($user ->admin == 1)
				<label class="label label-success" style="margin-left: 15px;">admin</label>
				@else
				<label class="label label-warning" style="margin-left: 15px;">user</label>
				@endif
				<a href="/users/ban/{{ $user->id }}" class="btn btn-danger desktop-ban" style="float:right;margin-top:10px;">Ban User</a>
				<h2 class="user-name"><span style="font-family:lithosBlack">User Name:</span> {{ $user ->username }}</h2>
			</div>
			<div class="user-bottom-wrap">
				<h2 class="user-under-info"><span class="bold">Email:</span> {{ $user ->email }}</h2>
				<h2 class="user-under-info"><span class="bold">ID #:</span> {{ $user ->id }}</h2>
				<h2 class="user-under-info"><span class="bold">IP:</span> {{ $user ->ip }}</h2>
			</div>
		</div>
		@endforeach
	</div>

	<div id="card-requests">
		<div id="page-main-title">
			<h1 class="admin-tb-title">Card Requests</h1>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Search Requests...">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
		@foreach(Cards::orderBy('created_at', 'DSC')->get() as $card)
		<div class="individual-inventory-wrap">
			<div class="user-title-top-wrap">
				<h1>{{ $card ->first_name }} {{ $card ->last_name }}</span></h1>
				<a href="/products/remove/id-here/auth-key" class="btn btn-danger desktop-ban" style="float:right;margin-top:10px;">Mark Complete</a>
				<h2 class="user-name"><span class="bold">Email:</span> {{ $card ->email }}</h2>	
				<a href="/products/remove/id-here/auth-key" class="btn btn-danger mobile-ban">Ban User</a>
			</div>
			<div class="card-under">
				<h2 class="user-card-under-info"><span class="bold">ID #:</span> {{ $card ->id }}</h2>
				<h2 class="user-card-under-info"><span class="bold">Address:</span> {{ $card ->street_one }} {{$card ->street_two}}</h2>
				<h2 class="user-card-under-info"><span class="bold">City:</span> {{ $card ->city }}</h2>
				<h2 class="user-card-under-info"><span class="bold">State:</span> {{ $card ->state }}</h2>
				<h2 class="user-card-under-info"><span class="bold">Zip:</span> {{ $card ->zip }}</h2>
				<h2 class="user-card-under-info"><span class="bold">Phone:</span> {{ $card ->phone }}</h2>
			</div>
		</div>
		@endforeach
	</div>


	<div id="create-new-listing-wrap">
		<div id="page-main-title">
			<h1 class="admin-tb-title">Create New Listing</h1>	
		</div>
		@if ($message = Session::get('alert')) {{ $message }} @endif

		<div id="create-timer">
			<div class="progress" style="height:20px;">
				<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.333%" id="prog-1">
					<span class="sr-only">33% Complete</span>
				</div>
				<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.333%" id="prog-2">
					<span class="sr-only">33% Complete</span>
				</div>
				<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.333%" id="prog-3">
					<span class="sr-only">33% Complete</span>
				</div>
			</div>
		</div>
		<div class="new_product" style="width: 60%;">
			{{ Form::open(array('url' => '/products/new/create', 'name' => 'addItem', 'enctype' => 'multipart/form-data')) }}

			<div id="create-part-one">
				<div class="form-group">
					{{ Form::label('label_title', 'Title') }} {{ Form::text('title','', array('class' => 'form-control', 'placeholder' => 'Product Title', 'id' => 'item-title')) }}
				</div>
				<div class="form-group">
					{{ Form::label('label_price', 'Price') }}
					<div class="input-group" style="position:static">
						<div class="input-group-addon">$</div>
						{{ Form::text('price', '', array('class' => 'form-control','placeholder' =>'0.00', 'id' => 'item-price', 'style' => 'position:static;')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('label_description', 'Description') }} {{ Form::textarea('description', '', array('class' => 'form-control', 'placeholder' => 'Product Description', 'id' => 'description')) }}
				</div>
				<div class="form-group">
					{{ Form::label('label_picture', 'Upload a Picture') }}
					<div style="position:relative;"><span id="browse-over">Browse</span>{{ Form::file('image', array('id' => 'image-uploader')) }}</div>

				</div>
				<p id="picture-name"></p>
				<div class="form-group">
					<label>Upload to eBay as well?</label>
					<select class="form-control" id="on_ebay" name="on_ebay">
						<option value="default" disabled="disabled">Select one--</option>
						<option>No</option>
						<option>Yes</option>
					</select>
				</div>
			</div>

			<div id="create-part-two">

				<div class="form-group">
					{{ Form::label('label_paypal', 'PayPal Email Address') }} {{ Form::email('paypal', 'PayPal@Email.com', array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('label_category', 'Category ID') }} {{ Form::text('category', '', array('class' => 'form-control', 'placeholder' => 'Category ID', 'id' => 'item-category')) }}
				</div>


				<div class="form-group">
					{{ Form::label('label_duration', 'eBay Listing Duration') }}
					<select class="form-control" name="duration" id="item-duration">
						<option>Select</option>
						<option>Days_1</option>
						<option>Days_3</option>
						<option>Days_5</option>
						<option>Days_7</option>
						<option>Days_10</option>
					</select>
				</div>

				<div class="form-group">
					{{ Form::label('label_condition', 'Item Condition') }}
					<select class="form-control" name="condition" id="item-condition">
						<option>Select</option>
						<option>1000</option>
						<option>1500</option>
						<option>1750</option>
						<option>2000</option>
					</select>
				</div>

				<div class="form-group">
					{{ Form::text('length','', array('class' => 'form-control', 'placeholder' => 'Product length', 'id' => 'item-length')) }}
				</div>
				<div class="form-group">
					{{ Form::text('width','', array('class' => 'form-control', 'placeholder' => 'Product width', 'id' => 'item-width')) }}
				</div>
				<div class="form-group">
					{{ Form::text('height','', array('class' => 'form-control', 'placeholder' => 'Product height', 'id' => 'item-height')) }}
				</div>
			</div>

			<div id="create-part-two-store">

				<div class="form-group">
					{{ Form::label('label_paypal', 'PayPal Email Address') }} {{ Form::email('paypal', 'PayPal@Email.com', array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('label_condition', 'Item Condition') }}
					<select class="form-control" name="condition" id="item-condition-store">
						<option>Select</option>
						<option>New</option>
						<option>Used</option>
						<option>Refurbished</option>
					</select>
				</div>

				<div class="form-group">
					{{ Form::text('length','', array('class' => 'form-control', 'placeholder' => 'Product length', 'id' => 'item-length')) }}
				</div>
				<div class="form-group">
					{{ Form::text('width','', array('class' => 'form-control', 'placeholder' => 'Product width', 'id' => 'item-width')) }}
				</div>
				<div class="form-group">
					{{ Form::text('height','', array('class' => 'form-control', 'placeholder' => 'Product height', 'id' => 'item-height')) }}
				</div>
			</div>

			<div id="create-part-three">
				<div class="form-group">
					{{ Form::label('label_condition', 'Quantity for eBay') }}
					<select class="form-control" name="q_ebay" id="ebay-item-qty">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
				</div>

				<div class="form-group">
					{{ Form::label('label_condition', 'Quantity for Store') }}
					<select class="form-control" name="q_store" id="store-item-qty">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
				</div>
				<div class="form-group">
					<label for="store-tag">Store Tag #</label>
					<input type="text" class="form-control" name="store-tag" id="store-tag" />
				</div>
			</div>
			
			<div id="create-part-three-store" style="display:none;">
				<div class="form-group">
					{{ Form::label('label_condition', 'Quantity for Store') }}
					<select class="form-control" name="q_store" id="store-item-qty">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
				</div>
				<div class="form-group">
					<label for="store-tag">Store Tag #</label>
					<input type="text" class="form-control" name="store-tag" id="store-tag" />
				</div>
			</div>
			 
			<div id="create-buttons-part">
				<div id="create-next-prev">
					<div id="create-submit">
						<div class="form-group">
							{{ Form::submit('Submit', array('style' => 'float: right; margin: 5px;','id' => 'create-submit-btn')) }}
						</div>
					</div>
					<h1 id="create-next" class="cl-next-1">
						Next
					</h1>
					<h1 id="create-previous" class="cl-previous-1">
						Previous
					</h1>
				</div>

			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>