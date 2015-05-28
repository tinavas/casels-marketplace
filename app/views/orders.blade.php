
<?php
	use PayPal\Api\ExecutePayment;
	use PayPal\Api\Payment;
	use PayPal\Api\PaymentExecution;
	
/* 	$cart_items = array();
	$Orders = new Orders();
	foreach(Cart::content() as $item)
	{
		//array_push($cart_items, array('title' => $item->name, 'qty' => $item->qty, 'price' => $item->price));
		$Orders->title = $item->name;
		$Orders->
	}
 */
	$client_ID = "AUG7R_5aSqYBZj3SSavT1rGZ0wqq_YJUWTgnEo_4hgGKehlLef9AtlrFPsrEBweZl8Xwlcgpd14K8rB9"; 
	$client_Secret = "EE9CLC8Atvj16t4JHOB7yBZqwmt-I_zc3FdGPWGg1dIE7vT79-B6iQmZo6tQKULcwVLys19DBT6eXSFl";
	$apiContext = new \PayPal\Rest\ApiContext(
	  new \PayPal\Auth\OAuthTokenCredential(
		$client_ID,
		$client_Secret
	  )
	);
	$paymentId = $_GET['paymentId'];
	$payment = Payment::get($paymentId, $apiContext);

	$execution = new PaymentExecution();
	$execution->setPayerId($_GET['PayerID']);

	try{
		
		$result = $payment->execute($execution, $apiContext);
		//ResultPrinter::printResult("Executed Payment", "Payment", $payment->getId(), $execution, $result);
		try {
			$payment = Payment::get($paymentId, $apiContext);
			$payer = json_decode($payment->getPayer(), true);
			
			
			
			$Orders = new Orders();
			foreach(Cart::content() as $item)
			{
				$Inventory = Inventory::find($item->id);
				
				if($Inventory->inventory == $item->qty)
				{
					//check listing type
					//deactivate listing
					
					if($Inventory->type == 1)
					{
						//active on both site and store
						//deactivate on store AND eBay
						
						require_once('tradingConstants.php');
						
						$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
						$xmlRequest  .= "<EndItemRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">";
						$xmlRequest  .= "<RequesterCredentials>";
						$xmlRequest  .= "<eBayAuthToken>" . AUTH_TOKEN . "</eBayAuthToken>";
						$xmlRequest  .= "</RequesterCredentials>";
						$xmlRequest  .= "<ItemID>" . $Inventory->product_id . "</ItemID>";
						$xmlRequest  .= "<EndingReason>NotAvailable</EndingReason>";
						$xmlRequest  .= "</EndItemRequest>";
						
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
						$Inventory->inventory = '0';
						$Inventory->save();

						$additemresponse = simplexml_load_string($responseXML);
						echo $additemresponse;
						echo $Inventory->inventory;
						echo $item->id;
					}
					
					elseif($Inventory->type == 0)
					{
						// regular listing
						// deactivate on site, dont worry about ebay
						$Inventory->inventory = 0;
						$Inventory->save();
					}
					
					else { 
						//something seriously dun goof'd 
					}
				}
				
				else if($Inventory->inventory > $item->qty)
				{
					//check listing type
					//subtract purchased quantity from inventory
					$new_inventory = $Inventory->inventory - $item->qty;
					if($Inventory->type == 1)
					{
						//eBay listing
						$Inventory->inventory = $new_inventory;
						$Inventory->save();
					}
					
					elseif($Inventory->type == 0)
					{
						//regular listing
						$Inventory->inventory = $new_inventory;
						$Inventory->save();
					}
				}
				
				else if($Inventory->inventory < $item->qty)
				{
					//something went seriously wrong, shut down listing and contact developer
					$Inventory->inventory = 0;
					$Inventory->save();
				}
				
 				$Orders ->product_id = $item->id;
				$Orders ->title = $item->name;
				$Orders ->qty = $item->qty;
				$Orders ->payer_email = $payer{'payer_info'}{'email'};
				$Orders ->address = $payer{'payer_info'}{'shipping_address'}{'line1'};
				$Orders ->city = $payer{'payer_info'}{'shipping_address'}{'city'};
				$Orders ->state = $payer{'payer_info'}{'shipping_address'}{'state'};
				$Orders ->zip = $payer{'payer_info'}{'shipping_address'}{'postal_code'};
				
				$Orders ->save();
			}
			
			//Payment::get($pay_id)->getPayer()->getPayerInfo()->getShipping_address()
			//$result->toJSON();	
			//echo $result->{'transactions'}->description;
			//echo $payment->getPayerInfo();
			
		}
		
		catch (Exception $ex) {
			//ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
			echo "First: " . $ex;
			echo "<pre>" . $payment . "</pre>";
			exit(1);
		}
	} 

	catch (Exception $ex) {
		echo "First: " . $ex;
		//ResultPrinter::printError("Executed Payment", "Payment", null, null, $ex);
		exit(1);
	}
?>

@include('header') 
	@if ($message = Session::get('alert')) 
		{{ $message }} 
	@endif
	<div id="page-main-title" style="margin-bottom:0px">
		<div class="wrapper">
			<h1 id="page-h1">Your Order Summary</h1>
			<?php $cart=Cart::content(); ?>@foreach($cart as $row) @foreach(Inventory::where('id', '=', $row->id)->get() as $product)
	<div class="in-cart-item">
		<img src="{{ $row->options->size }}" class="desktop-cart-main-pic">
		<h1>
				{{ $row->name }}
			</h1>
		<img src="{{ $row->options->size }}" class="mobile-cart-main-pic">

		<p>
			Product ID:
			<label class="label label-default" style="font-weight:100;">{{ $row->id }}</label>
		</p>
		<p>
			Quantity:
			<label class="label label-default" style="font-weight:100;">{{ $row->qty }}</label>
		</p>
		<p>
			Price:
			<label class="label label-info" style="font-size:18px;">${{ $row->price }}</label>
		</p>
		</br>
		<p>
			Shipping:
			<label class="label label-warning" style="font-size: 12px;">${{ $product->shipping }}</label>
		</p>
	</div>
	@endforeach @endforeach
		<?php Cart::destroy(); ?>
		</div>
	</div>
	<div class="wrapper">
@include('footer')