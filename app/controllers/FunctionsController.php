<?php
class FunctionsController extends BaseController {

	public function getEmail()
	{
		$Emails = new Emails();

		$userEmail = array(
			'email' => Input::get('mailingListEmail')
		);

		$rules = array(
			'email' => 'Required'
		);

		$validator = Validator::make($userEmail, $rules);
		if($validator->passes())
		{
			//Validation passed, user is redirected back with success message
			// Check if Email already exists
			if($Emails::where('email', '=', Input::get('mailingListEmail'))->exists()){
			   return Redirect::to('')->with('alert', '<div class="alert alert-danger" role="alert">Sorry, your email is already part of our list.</div>');
			}
			else
			{
				$Emails ->email = $userEmail['email'];
				$Emails ->ip = $_SERVER['REMOTE_ADDR'];
				$Emails ->save();

				return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert">Thanks! ' . $userEmail['email'] . ' has been added to our list!</div>');
			}

		}
		else
		{
			//Redirect back with error
			return Redirect::to('')->with('alert', '<div class="alert alert-danger" role="alert">Sorry, something went wrong try submitting your email again.</div>');
		}
	}

	public function getPreferredCustomer()
	{
		$Customers = new Customers();

		$userData = array(
			'first-name' => Input::get('first-name'),
			'last-name' => Input::get('last-name'),
			'street-1' => Input::get('street-1'),
			'street-2' => Input::get('street-2'),
			'city' => Input::get('city'),
			'state' => Input::get('state'),
			'zip-code' => Input::get('zip-code'),
			'tel' => Input::get('tel'),
			'email' => Input::get('email'),
		);

		$rules = array(
			'first-name' => 'Required',
			'last-name' => 'Required',
			'street-1' => 'Required',
			'street-2' => '',
			'city' => 'Required',
			'state' => 'Required',
			'zip-code' => 'Required',
			'tel' => 'Required',
			'email' => 'Required',
		);

		$validator = Validator::make($userData, $rules);

		if($validator->passes())
		{
			//Validation passed, user is redirected back with success message
			// Check if email already exists
			if($Customers::where('email', '=', $userData['email'])->exists()){
			   return Redirect::to('')->with('alert', '<div class="alert alert-danger" role="alert">Sorry, your email is already part of our list.</div>');
			}
			else
			{
				$Customers ->first_name = $userData['first-name'];
				$Customers ->last_name = $userData['last-name'];
				$Customers ->street_one = $userData['street-1'];
				$Customers ->street_two = $userData['street-2'];
				$Customers ->city = $userData['city'];
				$Customers ->state = $userData['state'];
				$Customers ->zip = $userData['zip-code'];
				$Customers ->phone = $userData['tel'];
				$Customers ->email = $userData['email'];
				$Customers ->ip = $_SERVER['REMOTE_ADDR'];
				$Customers ->save();

				return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert">Thanks ' . $Customers['first-name'] . ', we have received your application.</div>');
			}
		}
		else
		{
			//Redirect back with error
			return Redirect::to('')->with('alert', '<div class="alert alert-danger" role="alert">Sorry, something went wrong try submitting your email again. | ' . $messages = $validator->messages() . '</div>');
		}
	}

	public function getRegister()
	{
		return View::make('register');
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function postRegister()
	{
		$User = new User;
		$userdata = array(
			'first-name' => Input::get('first-name'),
			'last-name' => Input::get('last-name'),
			'username' => Input::get('username'),
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'pass_confirmation' => Input::get('pass_confirmation')
		);

		$rules = array(
			'first-name' => 'Required',
			'last-name' => 'Required',
			'username' => 'Required',
			'email' => 'Required',
			'password' => 'Required',
			'pass_confirmation' => 'Required'
		);

		$validator = Validator::make($userdata, $rules);

		if($validator->passes())
		{
			// Validation passed however we still need to check if the users email already exists to prevent duplicates
			if($User::where('email', '=', $userdata['email'])->exists()){
				return Redirect::to('register')->with('alert', '<div class="alert alert-danger" style="margin-top: 5px;" role="alert">Sorry, your email is already part of our list.</div>');
			}

			else{
				//core validation passed now to check whether passwords match
				if($userdata['password'] == $userdata['pass_confirmation'])
				{
					//passwords match save user into the db
					$User ->first_name = $userdata['first-name'];
					$User ->last_name = $userdata['last-name'];
					$User ->username = $userdata['username'];
					$User ->password = Hash::make($userdata['password']);
					$User ->email = $userdata['email'];
					$User ->ip = $_SERVER['REMOTE_ADDR'];
					$User ->save();

					return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="margin-top: 5px;">Thanks ' . $userdata['first-name'] . ', you have successfully registered. Now just login to your account!</div>');
				}

				else
				{
					//passwords don't match redirect user back.
					return Redirect::to('register')->with('alert', '<div class="alert alert-danger" role="alert" style="margin-top: 5px;">Sorry, your passwords did not match.</div>');
				}
			}
		}
		else
		{
			//validation failed
			return Redirect::to('register')->with('alert', '<div class="alert alert-danger" style="margin-top: 5px;" role="alert">Sorry, please make sure you complete all fields.</div>');
		}
	}

	public function postLogin()
	{
		$userData = array
		(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		$rules = array(
			'username' => 'Required',
			'password' => 'Required'
		);

		$Validator = Validator::make($userData, $rules);
		if($Validator->passes())
		{
			//core validation succeeded
			if (Auth::attempt($userData))
			{
				//user authenticated
				return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Thanks ' . Auth::user()->first_name . ', you have successfully logged In.</div>');
			}

			else
			{
				return Redirect::to('login')->with('alert', '<div class="alert alert-danger" style="top: 0;margin-bottom:40px;position:relative; width:85%" role="alert">An error occured while logging in. Please check your username and Password and try again.</div>');
			}
		}
		else
		{
			//validation failed
			return Redirect::to('login')->with('alert', '<div class="alert alert-danger" style="top: 0;margin-bottom:40px;position:relative; width:85%" role="alert">Sorry, please make sure you complete all fields.</div>');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Thanks, you have successfully logged out.</div>');
	}

	public function getAdminCP()
	{
		return View::make('admin');
	}

	public function getNewListing()
	{
		return View::make('create');
	}

	public function postNewListing()
	{
		require_once('tradingConstants.php');
		
		if(Input::get('on_ebay') == 'Yes') {
			$productData = array(
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'categoryID' => Input::get('category'),
				'startPrice' => Input::get('price'),
				'paypal' => Input::get('paypal'),
				'duration' => Input::get('duration'),
				'condition' => Input::get('condition'),
				'quantity_ebay' => Input::get('q_ebay'),
				'quantity_store' => Input::get('q_store'),
				'picture' => Input::get('image'),
				'length' => Input::get('length'),
				'width' => Input::get('width'),
				'height' => Input::get('height')
			);

			$rules = array(
				'title' => 'Required',
				'description' => 'Required',
				'categoryID' => 'Required',
				'startPrice' => 'Required',
				'paypal' => 'Required',
				'duration' => 'Required',
				'condition' => 'Required',
				'length' => 'Required',
				'width' => 'Required',
				'height' => 'Required'
			);
			
			$shipping = $this->getCalcShipping($productData['length'], $productData['width'], $productData['height']);
			$tax = 
			$file = Input::file('image');
			$destinationPath = 'product_images/';
			$filename = uniqid("casels_") . ".jpg";
			
			Input::file('image')->move($destinationPath, $filename);
			
			$fileURL = "http://aidevserver.co/projects/casels/public/product_images/" . $filename;
			$Validator = Validator::make($productData,  $rules);
			
			if($Validator->passes())
			{	
				// grab our posted keywords and call helper function
				// TODO: check if need urlencode

				// Create unique id for adding item to prevent duplicate adds
				$uuid = md5(uniqid());

				// create the XML request
				$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
				$xmlRequest .= "<AddItemRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">";
				$xmlRequest .= "<ErrorLanguage>en_US</ErrorLanguage>";
				$xmlRequest .= "<WarningLevel>High</WarningLevel>";
				$xmlRequest .= "<Item>";
				$xmlRequest .= "<Title>" . $productData['title'] . "</Title>";
				$xmlRequest .= "<Description>" . $productData['description'] . "</Description>";
				$xmlRequest .= "<PrimaryCategory>";
				$xmlRequest .= "<CategoryID>" . $productData['categoryID'] . "</CategoryID>";
				$xmlRequest .= "</PrimaryCategory>";
				$xmlRequest .= "<StartPrice>" . $productData['startPrice'] . "</StartPrice>";
				$xmlRequest .= "<ConditionID>" . $productData['condition'] . "</ConditionID>";
				$xmlRequest .= "<CategoryMappingAllowed>true</CategoryMappingAllowed>";
				$xmlRequest .= "<Country>US</Country>";
				$xmlRequest .= "<Currency>USD</Currency>";
				$xmlRequest .= "<DispatchTimeMax>3</DispatchTimeMax>";
				$xmlRequest .= "<ListingDuration>" . $productData['duration'] . "</ListingDuration>";
				$xmlRequest .= "<ListingType>FixedPriceItem</ListingType>";
				$xmlRequest .= "<PaymentMethods>PayPal</PaymentMethods>";
				$xmlRequest .= "<PayPalEmailAddress>" . $productData['paypal'] . "</PayPalEmailAddress>";
				$xmlRequest .= "<PictureDetails>";
				$xmlRequest .= "<GalleryType>Gallery</GalleryType>";
				$xmlRequest .= "<PictureURL>" . $fileURL . "</PictureURL>";
				$xmlRequest .= "<GalleryURL>" . $fileURL . "</GalleryURL>";
				$xmlRequest .= "</PictureDetails>";
				$xmlRequest .= "<PostalCode>05485</PostalCode>";
				$xmlRequest .= "<Quantity>" . $productData['quantity_ebay'] . "</Quantity>";
				$xmlRequest .= "<ReturnPolicy>";
				$xmlRequest .= "<ReturnsAcceptedOption>ReturnsAccepted</ReturnsAcceptedOption>";
				$xmlRequest .= "<RefundOption>MoneyBack</RefundOption>";
				$xmlRequest .= "<ReturnsWithinOption>Days_30</ReturnsWithinOption>";
				$xmlRequest .= "<Description>" . $productData['description']. "</Description>";
				$xmlRequest .= "<ShippingCostPaidByOption>Buyer</ShippingCostPaidByOption>";
				$xmlRequest .= "</ReturnPolicy>";
				$xmlRequest .= "<ShippingDetails>";
				$xmlRequest .= "<ShippingType>Flat</ShippingType>";
				$xmlRequest .= "<ShippingServiceOptions>";
				$xmlRequest .= "<ShippingServicePriority>1</ShippingServicePriority>";
				$xmlRequest .= "<ShippingService>USPSMedia</ShippingService>";
				$xmlRequest .= "<ShippingServiceCost>" . $shipping . "</ShippingServiceCost>";
				$xmlRequest .= "<ShippingServiceAdditionalCost>0</ShippingServiceAdditionalCost>";
				$xmlRequest .= "</ShippingServiceOptions>";
				$xmlRequest .= "</ShippingDetails>";
				$xmlRequest .= "<Site>US</Site>";
				$xmlRequest .= "<UUID>" . $uuid . "</UUID>";
				$xmlRequest .= "</Item>";
				$xmlRequest .= "<RequesterCredentials>";
				$xmlRequest .= "<eBayAuthToken>" . AUTH_TOKEN . "</eBayAuthToken>";
				$xmlRequest .= "</RequesterCredentials>";
				$xmlRequest .= "<WarningLevel>High</WarningLevel>";
				$xmlRequest .= "</AddItemRequest>";

				// define our header array for the Trading API call
				// notice different headers from shopping API and SITE_ID changes to SITEID
				$headers = array(
				'X-EBAY-API-SITEID:'.SITEID,
				'X-EBAY-API-CALL-NAME:AddItem',
				'X-EBAY-API-REQUEST-ENCODING: JSON',
				'X-EBAY-API-COMPATIBILITY-LEVEL:' . API_COMPATIBILITY_LEVEL,
				'X-EBAY-API-DEV-NAME:' . API_DEV_NAME,
				'X-EBAY-API-APP-NAME:' . API_APP_NAME,
				'X-EBAY-API-CERT-NAME:' . API_CERT_NAME,
				'Content-Type: text/xml;charset=utf-8'
				);

				// initialize our curl session
				$session  = curl_init(API_URL);

				// set our curl options with the XML request
				curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($session, CURLOPT_POST, true);
				curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest);
				curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

				// execute the curl request
				$responseXML = curl_exec($session);

				// close the curl session
				curl_close($session);

				$additemresponse = simplexml_load_string($responseXML);
				
				if($additemresponse->Ack == "Success")
				{
					$Inventory = new Inventory();
					$Inventory ->product_id = $additemresponse->ItemID;
					$Inventory ->title = $productData['title'];
					$Inventory ->description = $productData['description'];
					$Inventory ->condition = $productData['condition'];
					$Inventory ->category_id = $productData['categoryID'];
					$Inventory ->price = $productData['startPrice'];
					if($productData['quantity_ebay'] == 1)
					{
						if($productData['quantity_store'] == 1)
						{
							$Inventory ->type = 1;
						}
						elseif($productData['quantity_store'] > 1)
						{
							$Inventory ->type = 0;
						}
					}
					$Inventory ->inventory = $productData['quantity_store'];
					$Inventory ->active = 1;
					$Inventory ->picture_id = $fileURL;
					$Inventory ->shipping = $shipping;
					
					$Inventory ->save();
					return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0; margin-bottom:40px;position:relative; width:85%">Listing Created: ' . $additemresponse->ItemID . '</div>');
				}
				
				elseif($additemresponse->Ack == "Failure")
				{
					return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0; margin-bottom:40px;position:relative; width:85%"><code>' . $responseXML . '</code></div>');
				}
				
				elseif($additemresponse->Ack == "Warning")
				{
					$Inventory = new Inventory();
					$Inventory ->product_id = $additemresponse->ItemID;
					$Inventory ->title = $productData['title'];
					$Inventory ->description = $productData['description'];
					$Inventory ->condition = $productData['condition'];
					$Inventory ->category_id = $productData['categoryID'];
					$Inventory ->price = $productData['startPrice'];
					if($productData['quantity_ebay'] == 1)
					{
						if($productData['quantity_store'] == 1)
						{
							$Inventory ->type = 1;
						}
						elseif($productData['quantity_store'] > 1)
						{
							$Inventory ->type = 0;
						}
					}
					$Inventory ->inventory = $productData['quantity_store'];
					$Inventory ->active = 1;
					$Inventory ->picture_id = $fileURL;
					
					$Inventory ->save();
					return Redirect::to('')->with('alert', '<div class="alert alert-warning" role="alert" style="top: 0; margin-bottom:40px;position:relative; width:85%">WARNING | Listing Created: ' . $additemresponse->ItemID . '</div>');
				}
				
				else
				{
					return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0; margin-bottom:40px;position:relative; width:85%"><code>' . $responseXML . '</code></div>');
				}
			}
			
			elseif($Validator->fails())
			{
				//form validation failed
				$le_error = $Validator->errors()->all();
				return Redirect::to('/')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Error: ' . var_dump($Validator->errors()->all()) . '</div>');
			}
		}

		elseif(Input::get('on_ebay') == 'No') {
			$productData = array(
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'startPrice' => Input::get('price'),
				'paypal' => Input::get('paypal'),
				'condition' => Input::get('condition'),
				'quantity_store' => Input::get('q_store'),
				'picture' =>  Input::get('image'),
				'length' => Input::get('length'),
				'width' => Input::get('width'),
				'height' => Input::get('height')
			);

			$rules = array(
				'title' => 'Required',
				'description' => 'Required',
				'startPrice' => 'Required',
				'paypal' => 'Required',
				'condition' => 'Required',
				'length' => 'Required',
				'width' => 'Required',
				'height' => 'Required'
			);

			$shipping = $this->getCalcShipping($productData['length'], $productData['width'], $productData['height']);
			$tax = 
			$file = Input::file('image');
			$destinationPath = 'product_images/';
			$filename = uniqid("casels_") . ".jpg";
			
			Input::file('image')->move($destinationPath, $filename);
			
			$fileURL = "http://aidevserver.co/projects/casels/public/product_images/" . $filename;
			$Validator = Validator::make($productData,  $rules);
			
			if($Validator->passes())
			{	
				$Inventory = new Inventory();
				$Inventory ->product_id = $additemresponse->ItemID;
				$Inventory ->title = $productData['title'];
				$Inventory ->description = $productData['description'];
				$Inventory ->condition = $productData['condition'];
				$Inventory ->price = $productData['startPrice'];
				$Inventory ->inventory = $productData['quantity_store'];
				$Inventory ->active = 1;
				$Inventory ->picture_id = $fileURL;
				$Inventory ->shipping = $shipping;
				
				$Inventory ->save();

				return Redirect::to('')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0; margin-bottom:40px;position:relative; width:85%">Listing Created</div>');
			}
			elseif($Validator->fails())
			{
				//form validation failed
				$le_error = $Validator->errors()->all();
				return Redirect::to('/')->with('alert', '<div class="alert alert-success" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Error: ' . var_dump($Validator->errors()->all()) . '</div>');
			}
		}

		else{
			//something reall dun goof'd
		}
	}

	public function getIndividualProduct($id)
	{
		
		foreach(Inventory::where('id', '=', $id)->get() as $product)
		{	
			$response = file_get_contents('http://open.api.ebay.com/shopping?callname=GetItemStatus&responseencoding=XML&appid=ArgyleIn-66f3-4bb6-89ef-c8066d7d1d86&siteid=0&version=895&ItemID=' . $product->product_id);
			
			$getitemstatusresponse = simplexml_load_string($response);
			
			return View::make('individual')->with('id', $id)->with('getitemstatusresponse', $getitemstatusresponse);
		}
	}
	
	public function getEditItem($ID)
	{
		return View::make('revise')->with('id', $ID);
	}
	
	public function postEditItem($ID)
	{
		$productData = array(
			'title' => Input::get('title'),
			'price' => Input::get('price'),
			'description' => Input::get('description'),
			'length' => Input::get('length'),
			'width' => Input::get('width'),
			'height' => Input::get('height')
		);
			
		$rules = array(
			'title' => 'Required',
			'price' => 'Required',
			'description' => 'Required',
			'length' => 'Required',
			'width' => 'Required',
			'height' => 'Required'
		);

		$shipping = $this->getCalcShipping($productData['length'], $productData['width'], $productData['height']);
		//$salesTax = $this->getCalcTax($price, 7.00);
		
		$Validator = Validator::make($productData, $rules);
		if($Validator ->passes())
		{
			$Inventory = Inventory::find($ID);
			$Inventory ->title = $productData['title'];
			$Inventory ->description = $productData['description'];
			$Inventory ->price = $productData['price'];
			$Inventory ->shipping = $shipping;
			$Inventory ->save();
			
			return Redirect::to('/product/' . $ID)->with('alert', '<div class="alert alert-success" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Product Information has been successfully updated.</div>');
		}
		else
		{
			return Redirect::to('/admin/products/edit/' . $ID)->with('alert', '<div class="alert alert-danger" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Form Validation failed, please check all fields are completed.</div>');
		}
	}
	
	public function getRemoveItem($ID)
	{
		$Inventory = Inventory::find($ID);
		$Inventory ->delete();
		
		return Redirect::to('admin')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-bottom:40px;position:relative; width:85%">Product has been removed.</div>');
	}
	
	public function postAddItemToCart($ID)
	{
		require_once('tradingConstants.php');
		/**
		 * Add a row to the cart
		 *
		 * @param string|Array $id      Unique ID of the item|Item formated as array|Array of items
		 * @param string       $name    Name of the item
		 * @param int          $qty     Item qty to add to the cart
		 * @param float        $price   Price of one item
		 * @param Array        $options Array of additional options, such as 'size' or 'color'
		 */
		
		foreach(Inventory::where('id', '=', $ID)->get() as $product)
		{
			if(Input::get('quantity') == null)
			{
				$productData = array(
					'quantity' => 1
				);
			}
			
			else
			{
				$productData = array(
					'quantity' => Input::get('quantity'),
				);
			}
			
			if($productData['quantity'] > $product ->inventory)
			{
				//over order
				return Redirect::to('/cart')->with('alert', '<div class="alert alert-danger" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">You cannot order more than is currently in stock.</div>');
			}
			
			elseif($productData['quantity'] == $product ->inventory)
			{
				//ordered all remaining inventory
				//end item on ebay when this happens
				Cart::add($product ->id, $product ->title, $productData['quantity'], $product ->price, array('size' => $product ->picture_id));
				// Create unique id for adding item to prevent duplicate adds
				return Redirect::to('/cart')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Item successfully added to your Cart.</div>');
			}
			
			elseif($productData['quantity'] < $product ->inventory)
			{
				//we gucci
				Cart::add($product ->id, $product ->title, $productData['quantity'], $product ->price, array('size' => $product ->picture_id));
				return Redirect::to('/cart')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Item successfully added to your Cart.</div>');
			}
			
		}
	}
	
	public function getCart()
	{
		return View::make('cart');
	}
	
	public function getRemoveItemFromCart($ID)
	{
		Cart::remove($ID);
		
		return Redirect::to('/cart')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Item successfully removed from Cart.</div>');
	}
	
	public function getAddOneItemToCart($ID)
	{
		$qty = 0;
		$cart=Cart::content();
		foreach($cart as $row)
		{	$qty = $row->qty + 1;
		
		}
			
		Cart::update($ID, $qty);
		
		return Redirect::to('/cart')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Item successfully added to Cart.</div>');	
	}
	
	public function getMyProfile()
	{
		if(Auth::check())
		{
			return View::make('me');
		}
		
		else
		{
			//user not logged in
			return redirect::to('')->with('alert', '<div class="alert alert-danger" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Not logged in.</div>');
		}
	}
	
	public function getPublicProfile($username)
	{
		return View::make('profile')->with('username', $username);
	}
	
	public function postContactUs()
	{
		Mail::send('welcome', array('key' => 'value'), function($message)
		{
			$message->to('branjohn223@yahoo.com', 'John Smith')->subject('Welcome!');
			return View::make('welcome');
		});	
	}
	
	public function getAddItemFromShop($ID)
	{
/**
		 * Add a row to the cart
		 *
		 * @param string|Array $id      Unique ID of the item|Item formated as array|Array of items
		 * @param string       $name    Name of the item
		 * @param int          $qty     Item qty to add to the cart
		 * @param float        $price   Price of one item
		 * @param Array        $options Array of additional options, such as 'size' or 'color'
		 */
		require_once('tradingConstants.php');
		foreach(Inventory::where('id', '=', $ID)->get() as $product)
		{
			if(Input::get('quantity') == null)
			{
				$productData = array(
					'quantity' => 1
				);
			}
			
			else
			{
				$productData = array(
					'quantity' => Input::get('quantity'),
				);
			}
			
			if($productData['quantity'] > $product ->inventory)
			{
				//over order
				return Redirect::to('/cart')->with('alert', '<div class="alert alert-danger" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">You cannot order more than is currently in stock.</div>');
			}
			
			elseif($productData['quantity'] == $product ->inventory)
			{
				//ordered all remaining inventory
				//end item on ebay when this happens
				Cart::add($product ->id, $product ->title, $productData['quantity'], $product ->price, array('size' => $product ->picture_id));
				return Redirect::to('/cart')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Last one left in stock has been added to your cart.</div>');
			}
			
			elseif($productData['quantity'] < $product ->inventory)
			{
				//we gucci
				Cart::add($product ->id, $product ->title, $productData['quantity'], $product ->price, array('size' => $product ->picture_id));
				return Redirect::to('/cart')->with('alert', '<div class="alert alert-info" role="alert" style="top: 0;margin-top: 20px;margin-bottom:40px;position:relative; width:85%">Item successfully added to your Cart.</div>');
			}
			
		}
	}
	
	public function postSearch() {
		$search_query = Input::get('search');
		$search_amount = Input::get('amount');
		
		$searchData = array(
			'query' => $search_query,
			'amount' => $search_amount
		);
		
		return View::make('search_results')->with('search_query', $search_query)->with('search_amount');
	}
	
	
    /*
    * Display form to process payment using credit card
    */
    public function create()
    {
        return View::make('checkout');
    }

    /*
    * Process payment using credit card
    */
    public function store()
    {
        // ### Address
        // Base Address object used as shipping or billing
        // address in a payment. [Optional]
        $addr= Paypalpayment::address();
        $addr->setLine1("3909 Witmer Road");
        $addr->setLine2("Niagara Falls");
        $addr->setCity("Niagara Falls");
        $addr->setState("NY");
        $addr->setPostal_code("14305");
        $addr->setCountry_code("US");
        $addr->setPhone("716-298-1822");

        // ### CreditCard
        $card = Paypalpayment::creditCard();
        $card->setType("visa")
            ->setNumber("4758411877817150")
            ->setExpireMonth("05")
            ->setExpireYear("2019")
            ->setCvv2("456")
            ->setFirstName("Joe")
            ->setLastName("Shopper");

        // ### FundingInstrument
        // A resource representing a Payer's funding instrument.
        // Use a Payer ID (A unique identifier of the payer generated
        // and provided by the facilitator. This is required when
        // creating or using a tokenized funding instrument)
        // and the `CreditCardDetails`
        $fi = Paypalpayment::fundingInstrument();
        $fi->setCredit_card($card);

        // ### Payer
        // A resource representing a Payer that funds a payment
        // Use the List of `FundingInstrument` and the Payment Method
        // as 'credit_card'
        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("credit_card")
            ->setFundingInstruments(array($fi));

        $item1 = Paypalpayment::item();
        $item1->setName('Ground Coffee 40 oz')
                ->setDescription('Ground Coffee 40 oz')
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setTax(0.3)
                ->setPrice(7.50);

        $item2 = Paypalpayment::item();
        $item2->setName('Granola bars')
                ->setDescription('Granola Bars with Peanuts')
                ->setCurrency('USD')
                ->setQuantity(5)
                ->setTax(0.2)
                ->setPrice(2);


        $itemList = Paypalpayment::itemList();
        $itemList->setItems(array($item1,$item2));


        $details = Paypalpayment::details();
        $details->setShipping("1.2")
                ->setTax("1.3")
                //total of items prices
                ->setSubtotal("17.5");

        //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("USD")
                // the total is $17.8 = (16 + 0.6) * 1 ( of quantity) + 1.2 ( of Shipping).
                ->setTotal("20")
                ->setDetails($details);

        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. Transaction is created with
        // a `Payee` and `Amount` types

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent as 'sale'

        $payment = Paypalpayment::payment();

        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions(array($transaction));

        try {
            // ### Create Payment
            // Create a payment by posting to the APIService
            // using a valid ApiContext
            // The return object contains the status;
            $payment->create();
        } catch (\PPConnectionException $ex) {
            return  "Exception: " . $ex->getMessage() . PHP_EOL;
            exit(1);
        }

        dd($payment);
    } 
	
	public function getCalcShipping($LENGTH, $WIDTH, $HEIGHT)
	{
		$dimensional_Total = $LENGTH * $WIDTH * $HEIGHT;
		$dimensional_Weight = $dimensional_Total / 166;
		
		return $dimensional_Weight;
	}
	
	public function getCalcTax($price, $percent)
	{
		$sales_tax = $price * $percent;
		return $sales_tax;
	}
	
	public function getReviseEbay($ebayID)
	{
		return View::make('ebay')->with('itemid', '');
	}
}