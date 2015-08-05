<?php

// # Create Payment using PayPal as payment method
// This sample code demonstrates how you can process a 
// PayPal Account based Payment.
// API used: /v1/payments/payment

//require __DIR__ . '/../bootstrap.php';
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class PayPalPaymentController extends BaseController {
	
	public function getSummary()
	{
		return View::make('orders');	
	}
	
	public function store()
	{
		//require('vendor/autoload.php');
		$client_ID = "AUG7R_5aSqYBZj3SSavT1rGZ0wqq_YJUWTgnEo_4hgGKehlLef9AtlrFPsrEBweZl8Xwlcgpd14K8rB9"; 
		$client_Secret = "EE9CLC8Atvj16t4JHOB7yBZqwmt-I_zc3FdGPWGg1dIE7vT79-B6iQmZo6tQKULcwVLys19DBT6eXSFl";
		$apiContext = new \PayPal\Rest\ApiContext(
		  new \PayPal\Auth\OAuthTokenCredential(
			$client_ID,
			$client_Secret
		  )
		);
		// ### Payer
		// A resource representing a Payer that funds a payment
		// For paypal account payments, set payment method
		// to 'paypal'.
		$payer = new Payer();
		$payer->setPaymentMethod("paypal");

		// ### Itemized information
		// (Optional) Lets you specify item wise
		// information
		$total_shipping=0; 
		foreach(Cart::content() as $row)
		{
			foreach(Inventory::where('id', '=', $row->id)->get() as $product)
			{		
				
				foreach(Inventory::where( 'id', '=', $row->id)->get() as $product) 
				{ 
					$total_shipping += $product->shipping; 
					//echo $total_shipping; } echo $total_shipping;
				}
			}
		}
		
		$i = 0;
		$myshipping = 0;
		foreach(Cart::content() as $row)
		{
			foreach(Inventory::where('id', '=', $row->id)->get() as $product)
			{	
				$myshipping += $product->shipping;
				
				$items[$i] = new Item();
				$items[$i]->setQuantity($row->qty)
					->setName($row->name)
					->setPrice($row->price)
					->setCurrency('USD'); 
				
				$details = new Details();
				$details->setSubtotal($row->price * $row->qty)
					->setTax(($row->price * $row->qty) * 0.07)
					->setShipping($product->shipping);
			
				$i++;
			}
		}
		
		$itemList = new ItemList();
		$itemList->setItems($items);

		// ### Additional payment details
		// Use this optional field to set additional
		// payment information such as tax, shipping
		// charges etc.

		// ### Amount
		// Lets you specify a payment amount.
		// You can also specify additional details
		// such as shipping, tax.
		
		$amount = new Amount();
		$amount->setCurrency("USD")
			->setDetails($details)
			->setTotal(Cart::total() + (Cart::total() * 0.07) + $total_shipping);

		// ### Transaction
		// A transaction defines the contract of a
		// payment - what is the payment for and who
		// is fulfilling it. 
		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($itemList)
			->setDescription("Payment description")
			->setInvoiceNumber(uniqid());

		// ### Redirect urls
		// Set the urls that the buyer must be redirected to after 
		// payment approval/ cancellation.
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl("http://aidevserver.co/projects/casels/public/orders")
			->setCancelUrl("http://aidevserver.co/projects/casels/public/checkout/cancel");

		// ### Payment
		// A Payment Resource; create one using
		// the above types and intent set to 'sale'
		$payment = new Payment();
		$payment->setIntent("sale")
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions(array($transaction));


		// For Sample Purposes Only.
		$request = clone $payment;

		// ### Create Payment
		// Create a payment by calling the 'create' method
		// passing it a valid apiContext.
		// (See bootstrap.php for more on `ApiContext`)
		// The return object contains the state and the
		// url to which the buyer must be redirected to
		// for payment approval
		try {
			$payment->create($apiContext);
		} catch (Exception $ex) {
			//ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
			//var_dump($items);
			echo "<pre>" . $payment;
			echo $ex->getData();
			echo $product->shipping;
			echo $amount->getTotal;
			exit(1);
		}
		
		$approvalUrl = $payment->getApprovalLink();
		return Redirect::to($approvalUrl);
	}
}
